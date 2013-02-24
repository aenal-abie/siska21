<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('PredikatKelulusan.Jurusan.View');
		$this->load->model('predikatkelulusan_model', null, true);
		$this->lang->load('predikatkelulusan');
		
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
					$result = $this->predikatkelulusan_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('predikatkelulusan_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('predikatkelulusan_delete_failure') . $this->predikatkelulusan_model->error, 'error');
				}
			}
		}

		$records = $this->predikatkelulusan_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage PredikatKelulusan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a PredikatKelulusan object.
	*/
	public function create()
	{
		$this->auth->restrict('PredikatKelulusan.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_predikatkelulusan())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('predikatkelulusan_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'predikatkelulusan');

				Template::set_message(lang('predikatkelulusan_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/predikatkelulusan');
			}
			else
			{
				Template::set_message(lang('predikatkelulusan_create_failure') . $this->predikatkelulusan_model->error, 'error');
			}
		}
		Assets::add_module_js('predikatkelulusan', 'predikatkelulusan.js');

		Template::set('toolbar_title', lang('predikatkelulusan_create') . ' PredikatKelulusan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of PredikatKelulusan data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('predikatkelulusan_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/predikatkelulusan');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('PredikatKelulusan.Jurusan.Edit');

			if ($this->save_predikatkelulusan('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('predikatkelulusan_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'predikatkelulusan');

				Template::set_message(lang('predikatkelulusan_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('predikatkelulusan_edit_failure') . $this->predikatkelulusan_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('PredikatKelulusan.Jurusan.Delete');

			if ($this->predikatkelulusan_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('predikatkelulusan_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'predikatkelulusan');

				Template::set_message(lang('predikatkelulusan_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/predikatkelulusan');
			} else
			{
				Template::set_message(lang('predikatkelulusan_delete_failure') . $this->predikatkelulusan_model->error, 'error');
			}
		}
		Template::set('predikatkelulusan', $this->predikatkelulusan_model->find($id));
		Assets::add_module_js('predikatkelulusan', 'predikatkelulusan.js');

		Template::set('toolbar_title', lang('predikatkelulusan_edit') . ' PredikatKelulusan');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_predikatkelulusan()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_predikatkelulusan($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_predikat_kelulusan'] = $id;
		}

		
		$this->form_validation->set_rules('predikatkelulusan_nilai_minimum','Nilai Minimum','max_length[5]');
		$this->form_validation->set_rules('predikatkelulusan_nilai_maksimum','Nilai Maksimum','max_length[5]');
		$this->form_validation->set_rules('predikatkelulusan_keterangan','Keterangan','');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nilai_minimum']        = $this->input->post('predikatkelulusan_nilai_minimum');
		$data['nilai_maksimum']        = $this->input->post('predikatkelulusan_nilai_maksimum');
		$data['keterangan']        = $this->input->post('predikatkelulusan_keterangan');

		if ($type == 'insert')
		{
			$id = $this->predikatkelulusan_model->insert($data);

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
			$return = $this->predikatkelulusan_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}