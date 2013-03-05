<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Data_Jurusan.Jurusan.View');
		$this->load->model('data_jurusan_model', null, true);
		$this->lang->load('data_jurusan');
		
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
					$result = $this->data_jurusan_model->delete_where(array('kode_jurusan'=>$pid));
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('data_jurusan_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('data_jurusan_delete_failure') . $this->data_jurusan_model->error, 'error');
				}
			}
		}

		$records = $this->data_jurusan_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manajemen Data Jurusan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Data Jurusan object.
	*/
	public function create()
	{
		$this->auth->restrict('Data_Jurusan.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_data_jurusan())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_jurusan_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'data_jurusan');

				Template::set_message(lang('data_jurusan_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/data_jurusan');
			}
			else
			{
				Template::set_message(lang('data_jurusan_create_failure') . $this->data_jurusan_model->error, 'error');
			}
		}
		Assets::add_module_js('data_jurusan', 'data_jurusan.js');

		Template::set('toolbar_title', lang('data_jurusan_create') . ' Data Jurusan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Data Jurusan data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if ($id==="")
		{
			Template::set_message(lang('data_jurusan_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/data_jurusan');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Data_Jurusan.Jurusan.Edit');

			if ($this->save_data_jurusan('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_jurusan_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_jurusan');

				Template::set_message(lang('data_jurusan_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('data_jurusan_edit_failure') . $this->data_jurusan_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Data_Jurusan.Jurusan.Delete');

			if ($this->data_jurusan_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_jurusan_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_jurusan');

				Template::set_message(lang('data_jurusan_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/data_jurusan');
			} else
			{
				Template::set_message(lang('data_jurusan_delete_failure') . $this->data_jurusan_model->error, 'error');
			}
		}
		Template::set('data_jurusan', $this->data_jurusan_model->find_by('kode_jurusan',$id));
		Assets::add_module_js('data_jurusan', 'data_jurusan.js');

		Template::set('toolbar_title', lang('data_jurusan_edit') . ' Data Jurusan');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_data_jurusan()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_data_jurusan($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('data_jurusan_kode_jurusan','Kode Jurusan','unique[jurusan.kode_jurusan.kode_jurusan]|required|max_length[2]');
		$this->form_validation->set_rules('data_jurusan_nama_jurusan','Nama Jurusan','required|max_length[20]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_jurusan']        = $this->input->post('data_jurusan_kode_jurusan');
		$data['nama_jurusan']        = $this->input->post('data_jurusan_nama_jurusan');

		if ($type == 'insert')
		{
			$id = $this->data_jurusan_model->insert($data);

			if (is_numeric($id))
			{
				$return = TRUE;
			} else
			{
				$return = FALSE;
			}
		}
		else if ($type == 'update')
		{
			$return = $this->data_jurusan_model->update_where('kode_jurusan',$id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}