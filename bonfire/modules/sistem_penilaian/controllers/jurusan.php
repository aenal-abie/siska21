<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Sistem_Penilaian.Jurusan.View');
		$this->load->model('sistem_penilaian_model', null, true);
		$this->lang->load('sistem_penilaian');
		
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
					$result = $this->sistem_penilaian_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('sistem_penilaian_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('sistem_penilaian_delete_failure') . $this->sistem_penilaian_model->error, 'error');
				}
			}
		}

		$records = $this->sistem_penilaian_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Sistem Penilaian');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Sistem Penilaian object.
	*/
	public function create()
	{
		$this->auth->restrict('Sistem_Penilaian.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_sistem_penilaian())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('sistem_penilaian_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'sistem_penilaian');

				Template::set_message(lang('sistem_penilaian_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/sistem_penilaian');
			}
			else
			{
				Template::set_message(lang('sistem_penilaian_create_failure') . $this->sistem_penilaian_model->error, 'error');
			}
		}
		Assets::add_module_js('sistem_penilaian', 'sistem_penilaian.js');

		Template::set('toolbar_title', lang('sistem_penilaian_create') . ' Sistem Penilaian');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Sistem Penilaian data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('sistem_penilaian_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/sistem_penilaian');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Sistem_Penilaian.Jurusan.Edit');

			if ($this->save_sistem_penilaian('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('sistem_penilaian_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'sistem_penilaian');

				Template::set_message(lang('sistem_penilaian_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('sistem_penilaian_edit_failure') . $this->sistem_penilaian_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Sistem_Penilaian.Jurusan.Delete');

			if ($this->sistem_penilaian_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('sistem_penilaian_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'sistem_penilaian');

				Template::set_message(lang('sistem_penilaian_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/sistem_penilaian');
			} else
			{
				Template::set_message(lang('sistem_penilaian_delete_failure') . $this->sistem_penilaian_model->error, 'error');
			}
		}
		Template::set('sistem_penilaian', $this->sistem_penilaian_model->find($id));
		Assets::add_module_js('sistem_penilaian', 'sistem_penilaian.js');

		Template::set('toolbar_title', lang('sistem_penilaian_edit') . ' Sistem Penilaian');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_sistem_penilaian()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_sistem_penilaian($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_sistem_penilaian'] = $id;
		}

		
		$this->form_validation->set_rules('sistem_penilaian_nilai_minimum','Nilai Minimum','required|max_length[5]');
		$this->form_validation->set_rules('sistem_penilaian_nilai_maksimum','Nilai Maksimum','required|max_length[5]');
		$this->form_validation->set_rules('sistem_penilaian_grade','Grade','required|max_length[2]');
		$this->form_validation->set_rules('sistem_penilaian_bobot_nilai','Bobot Nilai','required|max_length[3]');
		$this->form_validation->set_rules('sistem_penilaian_kategori','Kategori','required');
		$this->form_validation->set_rules('sistem_penilaian_keterangan','Keterangan','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nilai_minimum']        = $this->input->post('sistem_penilaian_nilai_minimum');
		$data['nilai_maksimum']        = $this->input->post('sistem_penilaian_nilai_maksimum');
		$data['grade']        = $this->input->post('sistem_penilaian_grade');
		$data['bobot_nilai']        = $this->input->post('sistem_penilaian_bobot_nilai');
		$data['kategori']        = $this->input->post('sistem_penilaian_kategori');
		$data['keterangan']        = $this->input->post('sistem_penilaian_keterangan');

		if ($type == 'insert')
		{
			$id = $this->sistem_penilaian_model->insert($data);

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
			$return = $this->sistem_penilaian_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}