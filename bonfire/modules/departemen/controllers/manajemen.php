<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class manajemen extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Departemen.Manajemen.View');
		$this->load->model('departemen_model', null, true);
		$this->lang->load('departemen');
		
		Template::set_block('sub_nav', 'manajemen/_sub_nav');
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
					$result = $this->departemen_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('departemen_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('departemen_delete_failure') . $this->departemen_model->error, 'error');
				}
			}
		}

		$records = $this->departemen_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Departemen');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Departemen object.
	*/
	public function create()
	{
		$this->auth->restrict('Departemen.Manajemen.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_departemen())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('departemen_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'departemen');

				Template::set_message(lang('departemen_create_success'), 'success');
				Template::redirect(SITE_AREA .'/manajemen/departemen');
			}
			else
			{
				Template::set_message(lang('departemen_create_failure') . $this->departemen_model->error, 'error');
			}
		}
		Assets::add_module_js('departemen', 'departemen.js');

		Template::set('toolbar_title', lang('departemen_create') . ' Departemen');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Departemen data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('departemen_invalid_id'), 'error');
			redirect(SITE_AREA .'/manajemen/departemen');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Departemen.Manajemen.Edit');

			if ($this->save_departemen('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('departemen_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'departemen');

				Template::set_message(lang('departemen_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('departemen_edit_failure') . $this->departemen_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Departemen.Manajemen.Delete');

			if ($this->departemen_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('departemen_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'departemen');

				Template::set_message(lang('departemen_delete_success'), 'success');

				redirect(SITE_AREA .'/manajemen/departemen');
			} else
			{
				Template::set_message(lang('departemen_delete_failure') . $this->departemen_model->error, 'error');
			}
		}
		Template::set('departemen', $this->departemen_model->find($id));
		Assets::add_module_js('departemen', 'departemen.js');

		Template::set('toolbar_title', lang('departemen_edit') . ' Departemen');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_departemen()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_departemen($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_departemen'] = $id;
		}

		
		$this->form_validation->set_rules('departemen_nama_departemen','Nama Departemen','required|max_length[50]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nama_departemen']        = $this->input->post('departemen_nama_departemen');

		if ($type == 'insert')
		{
			$id = $this->departemen_model->insert($data);

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
			$return = $this->departemen_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}