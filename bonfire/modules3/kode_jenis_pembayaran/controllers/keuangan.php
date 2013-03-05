<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class keuangan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Kode_Jenis_Pembayaran.Keuangan.View');
		$this->load->model('kode_jenis_pembayaran_model', null, true);
		$this->lang->load('kode_jenis_pembayaran');
		
		Template::set_block('sub_nav', 'keuangan/_sub_nav');
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
					$result = $this->kode_jenis_pembayaran_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kode_jenis_pembayaran_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kode_jenis_pembayaran_delete_failure') . $this->kode_jenis_pembayaran_model->error, 'error');
				}
			}
		}

		$records = $this->kode_jenis_pembayaran_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Kode Jenis Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Kode Jenis Pembayaran object.
	*/
	public function create()
	{
		$this->auth->restrict('Kode_Jenis_Pembayaran.Keuangan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_kode_jenis_pembayaran())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kode_jenis_pembayaran_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'kode_jenis_pembayaran');

				Template::set_message(lang('kode_jenis_pembayaran_create_success'), 'success');
				Template::redirect(SITE_AREA .'/keuangan/kode_jenis_pembayaran');
			}
			else
			{
				Template::set_message(lang('kode_jenis_pembayaran_create_failure') . $this->kode_jenis_pembayaran_model->error, 'error');
			}
		}
		Assets::add_module_js('kode_jenis_pembayaran', 'kode_jenis_pembayaran.js');

		Template::set('toolbar_title', lang('kode_jenis_pembayaran_create') . ' Kode Jenis Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Kode Jenis Pembayaran data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('kode_jenis_pembayaran_invalid_id'), 'error');
			redirect(SITE_AREA .'/keuangan/kode_jenis_pembayaran');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Kode_Jenis_Pembayaran.Keuangan.Edit');

			if ($this->save_kode_jenis_pembayaran('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kode_jenis_pembayaran_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'kode_jenis_pembayaran');

				Template::set_message(lang('kode_jenis_pembayaran_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('kode_jenis_pembayaran_edit_failure') . $this->kode_jenis_pembayaran_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Kode_Jenis_Pembayaran.Keuangan.Delete');

			if ($this->kode_jenis_pembayaran_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kode_jenis_pembayaran_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'kode_jenis_pembayaran');

				Template::set_message(lang('kode_jenis_pembayaran_delete_success'), 'success');

				redirect(SITE_AREA .'/keuangan/kode_jenis_pembayaran');
			} else
			{
				Template::set_message(lang('kode_jenis_pembayaran_delete_failure') . $this->kode_jenis_pembayaran_model->error, 'error');
			}
		}
		Template::set('kode_jenis_pembayaran', $this->kode_jenis_pembayaran_model->find_by('kode_jenis_pembayaran',$id));
		Assets::add_module_js('kode_jenis_pembayaran', 'kode_jenis_pembayaran.js');

		Template::set('toolbar_title', lang('kode_jenis_pembayaran_edit') . ' Kode Jenis Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_kode_jenis_pembayaran()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_kode_jenis_pembayaran($type='insert', $id=0)
	{
		if ($type == 'update') {
			$this->form_validation->set_rules('save','','edit_multi_unique[kode_jenis_pembayaran,kode_jenis_pembayaran.'.$id.',kode_jenis_pembayaran.kode_jenis_pembayaran_kode_jenis_pembayaran]');
            $this->form_validation->set_rules('save','','edit_multi_unique[kode_jenis_pembayaran,kode_jenis_pembayaran.'.$id.',jenis_pembayaran.kode_jenis_pembayaran_jenis_pembayaran]');
		} else {
            $this->form_validation->set_rules('kode_jenis_pembayaran_kode_jenis_pembayaran','Kode Jenis Pembayaran','is_unique[kode_jenis_pembayaran.kode_jenis_pembayaran]|required|max_length[2]');
            $this->form_validation->set_rules('kode_jenis_pembayaran_jenis_pembayaran','Jenis Pembayaran','is_unique[kode_jenis_pembayaran.jenis_pembayaran]|required|max_length[50]');
		}
		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_jenis_pembayaran']        = $this->input->post('kode_jenis_pembayaran_kode_jenis_pembayaran');
		$data['jenis_pembayaran']        = $this->input->post('kode_jenis_pembayaran_jenis_pembayaran');

		if ($type == 'insert')
		{
			$id = $this->kode_jenis_pembayaran_model->insert($data);

			
				$return = true;
			
		}
		else if ($type == 'update')
		{
			$return = $this->kode_jenis_pembayaran_model->update_where('kode_jenis_pembayaran',$id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}