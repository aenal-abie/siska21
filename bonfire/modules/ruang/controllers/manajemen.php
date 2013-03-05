<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class manajemen extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Ruang.Manajemen.View');
		$this->load->model('ruang_model', null, true);
		$this->lang->load('ruang');
		
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
					$result = $this->ruang_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('ruang_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('ruang_delete_failure') . $this->ruang_model->error, 'error');
				}
			}
		}

		$records = $this->ruang_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Ruang');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Ruang object.
	*/
	public function create()
	{
		$this->auth->restrict('Ruang.Manajemen.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_ruang())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('ruang_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'ruang');

				Template::set_message(lang('ruang_create_success'), 'success');
				Template::redirect(SITE_AREA .'/manajemen/ruang');
			}
			else
			{
				Template::set_message(lang('ruang_create_failure') . $this->ruang_model->error, 'error');
			}
		}
		Assets::add_module_js('ruang', 'ruang.js');

		Template::set('toolbar_title', lang('ruang_create') . ' Ruang');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Ruang data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('ruang_invalid_id'), 'error');
			redirect(SITE_AREA .'/manajemen/ruang');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Ruang.Manajemen.Edit');

			if ($this->save_ruang('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('ruang_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'ruang');

				Template::set_message(lang('ruang_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('ruang_edit_failure') . $this->ruang_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Ruang.Manajemen.Delete');

			if ($this->ruang_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('ruang_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'ruang');

				Template::set_message(lang('ruang_delete_success'), 'success');

				redirect(SITE_AREA .'/manajemen/ruang');
			} else
			{
				Template::set_message(lang('ruang_delete_failure') . $this->ruang_model->error, 'error');
			}
		}
		Template::set('ruang', $this->ruang_model->find($id));
		Assets::add_module_js('ruang', 'ruang.js');

		Template::set('toolbar_title', lang('ruang_edit') . ' Ruang');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_ruang()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_ruang($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_ruang'] = $id;
		}

		
		$this->form_validation->set_rules('ruang_jenis_ruang','Jenis Ruang','required');
		$this->form_validation->set_rules('ruang_nama_ruang','Nama Ruang','required|max_length[30]');
		$this->form_validation->set_rules('ruang_daya_tampung','Daya Tampung','required|max_length[1]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['jenis_ruang']        = $this->input->post('ruang_jenis_ruang');
		$data['nama_ruang']        = $this->input->post('ruang_nama_ruang');
		$data['daya_tampung']        = $this->input->post('ruang_daya_tampung');

		if ($type == 'insert')
		{
			$id = $this->ruang_model->insert($data);

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
			$return = $this->ruang_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}