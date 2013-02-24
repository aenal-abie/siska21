<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Tahun_Akademik.Jurusan.View');
		$this->load->model('tahun_akademik_model', null, true);
		$this->lang->load('tahun_akademik');
		
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
					$result = $this->tahun_akademik_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tahun_akademik_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tahun_akademik_delete_failure') . $this->tahun_akademik_model->error, 'error');
				}
			}
		}

		$records = $this->tahun_akademik_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Tahun Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Tahun Akademik object.
	*/
	public function create()
	{
		$this->auth->restrict('Tahun_Akademik.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_tahun_akademik())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tahun_akademik_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'tahun_akademik');

				Template::set_message(lang('tahun_akademik_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/tahun_akademik');
			}
			else
			{
				Template::set_message(lang('tahun_akademik_create_failure') . $this->tahun_akademik_model->error, 'error');
			}
		}
		Assets::add_module_js('tahun_akademik', 'tahun_akademik.js');

		Template::set('toolbar_title', lang('tahun_akademik_create') . ' Tahun Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Tahun Akademik data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tahun_akademik_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/tahun_akademik');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tahun_Akademik.Jurusan.Edit');

			if ($this->save_tahun_akademik('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tahun_akademik_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tahun_akademik');

				Template::set_message(lang('tahun_akademik_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tahun_akademik_edit_failure') . $this->tahun_akademik_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tahun_Akademik.Jurusan.Delete');

			if ($this->tahun_akademik_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tahun_akademik_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tahun_akademik');

				Template::set_message(lang('tahun_akademik_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/tahun_akademik');
			} else
			{
				Template::set_message(lang('tahun_akademik_delete_failure') . $this->tahun_akademik_model->error, 'error');
			}
		}
		Template::set('tahun_akademik', $this->tahun_akademik_model->find($id));
		Assets::add_module_js('tahun_akademik', 'tahun_akademik.js');

		Template::set('toolbar_title', lang('tahun_akademik_edit') . ' Tahun Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_tahun_akademik()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_tahun_akademik($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_tahun_akademik'] = $id;
		}

		
		$this->form_validation->set_rules('tahun_akademik_tahun_akademik','Tahun Akademik','max_length[9]');
		$this->form_validation->set_rules('tahun_akademik_semester','Semester','');
		$this->form_validation->set_rules('tahun_akademik_tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('tahun_akademik_tanggal_berakhir','Tanggal Berakhir','required');
		$this->form_validation->set_rules('tahun_akademik_status','Status','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['tahun_akademik']        = $this->input->post('tahun_akademik_tahun_akademik');
		$data['semester']        = $this->input->post('tahun_akademik_semester');
		$data['tanggal_mulai']        = $this->input->post('tahun_akademik_tanggal_mulai') ? $this->input->post('tahun_akademik_tanggal_mulai') : '0000-00-00';
		$data['tanggal_berakhir']        = $this->input->post('tahun_akademik_tanggal_berakhir') ? $this->input->post('tahun_akademik_tanggal_berakhir') : '0000-00-00';
		$data['status']        = $this->input->post('tahun_akademik_status');

		if ($type == 'insert')
		{
			$id = $this->tahun_akademik_model->insert($data);

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
			$return = $this->tahun_akademik_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}