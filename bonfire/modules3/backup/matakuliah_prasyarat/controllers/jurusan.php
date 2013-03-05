<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Matakuliah_Prasyarat.Jurusan.View');
		$this->load->model('matakuliah_prasyarat_model', null, true);
		$this->lang->load('matakuliah_prasyarat');
		
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
					$result = $this->matakuliah_prasyarat_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('matakuliah_prasyarat_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('matakuliah_prasyarat_delete_failure') . $this->matakuliah_prasyarat_model->error, 'error');
				}
			}
		}

		$records = $this->matakuliah_prasyarat_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Matakuliah Prasyarat');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Matakuliah Prasyarat object.
	*/
	public function create()
	{
		$this->auth->restrict('Matakuliah_Prasyarat.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_matakuliah_prasyarat())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('matakuliah_prasyarat_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'matakuliah_prasyarat');

				Template::set_message(lang('matakuliah_prasyarat_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/matakuliah_prasyarat');
			}
			else
			{
				Template::set_message(lang('matakuliah_prasyarat_create_failure') . $this->matakuliah_prasyarat_model->error, 'error');
			}
		}
		Assets::add_module_js('matakuliah_prasyarat', 'matakuliah_prasyarat.js');

		Template::set('toolbar_title', lang('matakuliah_prasyarat_create') . ' Matakuliah Prasyarat');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Matakuliah Prasyarat data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('matakuliah_prasyarat_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/matakuliah_prasyarat');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Matakuliah_Prasyarat.Jurusan.Edit');

			if ($this->save_matakuliah_prasyarat('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('matakuliah_prasyarat_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'matakuliah_prasyarat');

				Template::set_message(lang('matakuliah_prasyarat_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('matakuliah_prasyarat_edit_failure') . $this->matakuliah_prasyarat_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Matakuliah_Prasyarat.Jurusan.Delete');

			if ($this->matakuliah_prasyarat_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('matakuliah_prasyarat_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'matakuliah_prasyarat');

				Template::set_message(lang('matakuliah_prasyarat_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/matakuliah_prasyarat');
			} else
			{
				Template::set_message(lang('matakuliah_prasyarat_delete_failure') . $this->matakuliah_prasyarat_model->error, 'error');
			}
		}
		Template::set('matakuliah_prasyarat', $this->matakuliah_prasyarat_model->find($id));
		Assets::add_module_js('matakuliah_prasyarat', 'matakuliah_prasyarat.js');

		Template::set('toolbar_title', lang('matakuliah_prasyarat_edit') . ' Matakuliah Prasyarat');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_matakuliah_prasyarat()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_matakuliah_prasyarat($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_matakuliah_prasyarat'] = $id;
		}

		
		$this->form_validation->set_rules('matakuliah_prasyarat_kode_nama_kurikulum','Kode Nama Kurikulum','required|unique[matakuliah_prasyarat.kode_nama_kurikulum,matakuliah_prasyarat.kode_matakuliah_prasyarat]|max_length[1]');
		$this->form_validation->set_rules('matakuliah_prasyarat_matakuliah_yg_diambil','Matakuliah Yg Diambil','max_length[10]');
		$this->form_validation->set_rules('matakuliah_prasyarat_matakuliah_prasyarat','Matakuliah Prasyarat','max_length[10]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_nama_kurikulum']        = $this->input->post('matakuliah_prasyarat_kode_nama_kurikulum');
		$data['matakuliah_yg_diambil']        = $this->input->post('matakuliah_prasyarat_matakuliah_yg_diambil');
		$data['matakuliah_prasyarat']        = $this->input->post('matakuliah_prasyarat_matakuliah_prasyarat');

		if ($type == 'insert')
		{
			$id = $this->matakuliah_prasyarat_model->insert($data);

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
			$return = $this->matakuliah_prasyarat_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}