<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Detail_Kalender_Akademik.Jurusan.View');
		$this->load->model('detail_kalender_akademik_model', null, true);
		$this->lang->load('detail_kalender_akademik');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
		Template::set_block('sub_nav', 'jurusan/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->detail_kalender_akademik_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('detail_kalender_akademik_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('detail_kalender_akademik_delete_failure') . $this->detail_kalender_akademik_model->error, 'error');
				}
			}
		}

		$this->db->join('kalender_akademik', 'kalender_akademik.kode_kalender_akademik=detail_kalender_akademik.kode_kalender_akademik');
		$records = $this->detail_kalender_akademik_model->select('kode_detail_kalender_akademik, detail_kalender_akademik.kode_kalender_akademik, kalender_akademik.deskripsi_kalender_akademik as deskripsi_kalender_akademik, deskripsi_detail_kalender_akademik, detail_kalender_akademik.tanggal_mulai, detail_kalender_akademik.tanggal_berakhir, detail_kalender_akademik.tanggal_add, detail_kalender_akademik.tanggal_edit')->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Detail Kalender Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Detail Kalender Akademik object.
	*/
	public function create()
	{
		$this->auth->restrict('Detail_Kalender_Akademik.Jurusan.Create');
		
		$options_kode_kalender_akademik = $this->detail_kalender_akademik_model->get_kalender_akademik()->result();
		$options = array(''=>'....');
		
		foreach($options_kode_kalender_akademik as $row)
		{
			//$data['options_kode_kalender_akademik']
			$options[$row->kode_kalender_akademik] = $row->kode_kalender_akademik.' - '.$row->deskripsi_kalender_akademik;
		}
		
		Template::set('options', $options);
				
		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_detail_kalender_akademik())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('detail_kalender_akademik_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'detail_kalender_akademik');

				Template::set_message(lang('detail_kalender_akademik_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/detail_kalender_akademik');
			}
			else
			{
				Template::set_message(lang('detail_kalender_akademik_create_failure') . $this->detail_kalender_akademik_model->error, 'error');
			}
		}
		Assets::add_module_js('detail_kalender_akademik', 'detail_kalender_akademik.js');

		Template::set('toolbar_title', lang('detail_kalender_akademik_create') . ' Detail Kalender Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Detail Kalender Akademik data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);
		
		$options_kode_kalender_akademik = $this->detail_kalender_akademik_model->get_kalender_akademik()->result();
		$options = array(''=>'....');
		
		foreach($options_kode_kalender_akademik as $row)
		{
			//$data['options_kode_kalender_akademik']
			$options[$row->kode_kalender_akademik] = $row->kode_kalender_akademik.' - '.$row->deskripsi_kalender_akademik;
		}
		
		Template::set('options', $options);
		
		if (empty($id))
		{
			Template::set_message(lang('detail_kalender_akademik_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/detail_kalender_akademik');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Detail_Kalender_Akademik.Jurusan.Edit');

			if ($this->save_detail_kalender_akademik('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('detail_kalender_akademik_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'detail_kalender_akademik');

				Template::set_message(lang('detail_kalender_akademik_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('detail_kalender_akademik_edit_failure') . $this->detail_kalender_akademik_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Detail_Kalender_Akademik.Jurusan.Delete');

			if ($this->detail_kalender_akademik_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('detail_kalender_akademik_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'detail_kalender_akademik');

				Template::set_message(lang('detail_kalender_akademik_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/detail_kalender_akademik');
			} else
			{
				Template::set_message(lang('detail_kalender_akademik_delete_failure') . $this->detail_kalender_akademik_model->error, 'error');
			}
		}
		Template::set('detail_kalender_akademik', $this->detail_kalender_akademik_model->find($id));
		Assets::add_module_js('detail_kalender_akademik', 'detail_kalender_akademik.js');

		Template::set('toolbar_title', lang('detail_kalender_akademik_edit') . ' Detail Kalender Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_detail_kalender_akademik()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_detail_kalender_akademik($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_detail_kalender_akademik'] = $id;
		}

		
		$this->form_validation->set_rules('detail_kalender_akademik_kode_kalender_akademik','Kode Kalender Akademik','required|max_length[2]');
		$this->form_validation->set_rules('detail_kalender_akademik_deskripsi_detail_kalender_akademik','Deskripsi Detail Kalender Akademik','required|max_length[100]');
		$this->form_validation->set_rules('detail_kalender_akademik_tanggal_mulai','Tanggal Mulai','required|max_length[100]');
		$this->form_validation->set_rules('detail_kalender_akademik_tanggal_berakhir','Tanggal Berakhir','required|max_length[100]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_kalender_akademik']        = $this->input->post('detail_kalender_akademik_kode_kalender_akademik');
		$data['deskripsi_detail_kalender_akademik']        = $this->input->post('detail_kalender_akademik_deskripsi_detail_kalender_akademik');
		$data['tanggal_mulai']        = $this->input->post('detail_kalender_akademik_tanggal_mulai') ? $this->input->post('detail_kalender_akademik_tanggal_mulai') : '0000-00-00';
		$data['tanggal_berakhir']        = $this->input->post('detail_kalender_akademik_tanggal_berakhir') ? $this->input->post('detail_kalender_akademik_tanggal_berakhir') : '0000-00-00';

		if ($type == 'insert')
		{
			$id = $this->detail_kalender_akademik_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			} else
			{
				$return = FALSE;
			}
		}
		else if ($type == 'update')
		{
			$return = $this->detail_kalender_akademik_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}