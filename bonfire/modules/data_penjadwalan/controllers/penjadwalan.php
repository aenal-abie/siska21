<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class penjadwalan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Data_Penjadwalan.Penjadwalan.View');
		$this->load->model('data_penjadwalan_model', null, true);
		$this->lang->load('data_penjadwalan');
		
		Template::set_block('sub_nav', 'penjadwalan/_sub_nav');
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
					$result = $this->data_penjadwalan_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('data_penjadwalan_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('data_penjadwalan_delete_failure') . $this->data_penjadwalan_model->error, 'error');
				}
			}
		}

		$records = $this->data_penjadwalan_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Data Penjadwalan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Data Penjadwalan object.
	*/
	public function create()
	{
		$this->auth->restrict('Data_Penjadwalan.Penjadwalan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_data_penjadwalan())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_penjadwalan_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'data_penjadwalan');

				Template::set_message(lang('data_penjadwalan_create_success'), 'success');
				Template::redirect(SITE_AREA .'/penjadwalan/data_penjadwalan');
			}
			else
			{
				Template::set_message(lang('data_penjadwalan_create_failure') . $this->data_penjadwalan_model->error, 'error');
			}
		}
		Assets::add_module_js('data_penjadwalan', 'data_penjadwalan.js');

		Template::set('toolbar_title', lang('data_penjadwalan_create') . ' Data Penjadwalan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Data Penjadwalan data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('data_penjadwalan_invalid_id'), 'error');
			redirect(SITE_AREA .'/penjadwalan/data_penjadwalan');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Data_Penjadwalan.Penjadwalan.Edit');

			if ($this->save_data_penjadwalan('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_penjadwalan_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_penjadwalan');

				Template::set_message(lang('data_penjadwalan_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('data_penjadwalan_edit_failure') . $this->data_penjadwalan_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Data_Penjadwalan.Penjadwalan.Delete');

			if ($this->data_penjadwalan_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_penjadwalan_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_penjadwalan');

				Template::set_message(lang('data_penjadwalan_delete_success'), 'success');

				redirect(SITE_AREA .'/penjadwalan/data_penjadwalan');
			} else
			{
				Template::set_message(lang('data_penjadwalan_delete_failure') . $this->data_penjadwalan_model->error, 'error');
			}
		}
		Template::set('data_penjadwalan', $this->data_penjadwalan_model->find($id));
		Assets::add_module_js('data_penjadwalan', 'data_penjadwalan.js');

		Template::set('toolbar_title', lang('data_penjadwalan_edit') . ' Data Penjadwalan');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_data_penjadwalan()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_data_penjadwalan($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_penjadwalan'] = $id;
		}

		
		$this->form_validation->set_rules('data_penjadwalan_kode_tahun_akademik','Kode Tahun Akademik','required|max_length[2]');
		$this->form_validation->set_rules('data_penjadwalan_kode_matakuliah','Kode Matakuliah','required|max_length[10]');
		$this->form_validation->set_rules('data_penjadwalan_kode_dosen','Kode Dosen','required|max_length[2]');
		$this->form_validation->set_rules('data_penjadwalan_kode_ruang','Kode Ruang','required|max_length[2]');
		$this->form_validation->set_rules('data_penjadwalan_kelompok','Kelompok','required|max_length[2]');
		$this->form_validation->set_rules('data_penjadwalan_jam_mulai','Jam Mulai','required|max_length[2]');
		$this->form_validation->set_rules('data_penjadwalan_jam_berakhir','Jam Berakhir','required|max_length[2]');
		$this->form_validation->set_rules('data_penjadwalan_status_perkuliahan','Status Perkuliahan','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_tahun_akademik']        = $this->input->post('data_penjadwalan_kode_tahun_akademik');
		$data['kode_matakuliah']        = $this->input->post('data_penjadwalan_kode_matakuliah');
		$data['kode_dosen']        = $this->input->post('data_penjadwalan_kode_dosen');
		$data['kode_ruang']        = $this->input->post('data_penjadwalan_kode_ruang');
		$data['kelompok']        = $this->input->post('data_penjadwalan_kelompok');
		$data['jam_mulai']        = $this->input->post('data_penjadwalan_jam_mulai');
		$data['jam_berakhir']        = $this->input->post('data_penjadwalan_jam_berakhir');
		$data['status_perkuliahan']        = $this->input->post('data_penjadwalan_status_perkuliahan');

		if ($type == 'insert')
		{
			$id = $this->data_penjadwalan_model->insert($data);

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
			$return = $this->data_penjadwalan_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}