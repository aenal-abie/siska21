<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Jenjang.Jurusan.View');
		$this->load->model('jenjang_model', null, true);
		$this->lang->load('jenjang');
		
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
					$result = $this->jenjang_model->delete_where(array('kode_jenjang'=>$pid));
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('jenjang_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('jenjang_delete_failure') . $this->jenjang_model->error, 'error');
				}
			}
		}

		$records = $this->jenjang_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manajemen Jenjang');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Jenjang object.
	*/
	public function create()
	{
		$this->auth->restrict('Jenjang.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_jenjang())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('jenjang_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'jenjang');

				Template::set_message(lang('jenjang_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/jenjang');
			}
			else
			{
				Template::set_message(lang('jenjang_create_failure') . $this->jenjang_model->error, 'error');
			}
		}
		Assets::add_module_js('jenjang', 'jenjang.js');

		Template::set('toolbar_title', lang('jenjang_create') . ' Jenjang');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Jenjang data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if ($id=="")
		{
			Template::set_message(lang('jenjang_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/jenjang');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Jenjang.Jurusan.Edit');

			if ($this->save_jenjang('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('jenjang_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'jenjang');

				Template::set_message(lang('jenjang_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('jenjang_edit_failure') . $this->jenjang_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Jenjang.Jurusan.Delete');

			if ($this->jenjang_model->delete_where(array('kode_jenjang',$id)))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('jenjang_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'jenjang');

				Template::set_message(lang('jenjang_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/jenjang');
			} else
			{
				Template::set_message(lang('jenjang_delete_failure') . $this->jenjang_model->error, 'error');
			}
		}
		Template::set('jenjang', $this->jenjang_model->find_by(array('kode_jenjang'=>$id)));
		Assets::add_module_js('jenjang', 'jenjang.js');

		Template::set('toolbar_title', lang('jenjang_edit') . ' Jenjang');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_jenjang()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_jenjang($type='insert', $id=0)
	{	
		$this->form_validation->set_rules('jenjang_kode_jenjang','Kode Jenjang','required|max_length[1]');
		$this->form_validation->set_rules('jenjang_nama_jenjang','Nama Jenjang','required|max_length[20]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_jenjang']        = $this->input->post('jenjang_kode_jenjang');
		$data['nama_jenjang']        = $this->input->post('jenjang_nama_jenjang');

		if ($type == 'insert')
		{
			$id = $this->jenjang_model->insert($data);

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
			$return =  $this->jenjang_model->update_where('kode_jenjang',$id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}