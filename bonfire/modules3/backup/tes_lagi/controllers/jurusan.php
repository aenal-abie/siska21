<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Tes_Lagi.Jurusan.View');
		$this->load->model('tes_lagi_model', null, true);
		$this->lang->load('tes_lagi');
		
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
					$result = $this->tes_lagi_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tes_lagi_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tes_lagi_delete_failure') . $this->tes_lagi_model->error, 'error');
				}
			}
		}

		$records = $this->tes_lagi_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Tes Lagi');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Tes Lagi object.
	*/
	public function create()
	{
		$this->auth->restrict('Tes_Lagi.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_tes_lagi())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tes_lagi_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'tes_lagi');

				Template::set_message(lang('tes_lagi_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/tes_lagi');
			}
			else
			{
				Template::set_message(lang('tes_lagi_create_failure') . $this->tes_lagi_model->error, 'error');
			}
		}
		Assets::add_module_js('tes_lagi', 'tes_lagi.js');
        $data=$this->tes_lagi_model->select_ta();
        foreach ($data as $row)
        {
            $option[$row->kode_tahun_akademik]=$row->tahun_akademik;    
        }
        Template::set('options', $option);
		Template::set('toolbar_title', lang('tes_lagi_create') . ' Tes Lagi');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Tes Lagi data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tes_lagi_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/tes_lagi');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tes_Lagi.Jurusan.Edit');

			if ($this->save_tes_lagi('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tes_lagi_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tes_lagi');

				Template::set_message(lang('tes_lagi_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tes_lagi_edit_failure') . $this->tes_lagi_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tes_Lagi.Jurusan.Delete');

			if ($this->tes_lagi_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tes_lagi_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tes_lagi');

				Template::set_message(lang('tes_lagi_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/tes_lagi');
			} else
			{
				Template::set_message(lang('tes_lagi_delete_failure') . $this->tes_lagi_model->error, 'error');
			}
		}
		Template::set('tes_lagi', $this->tes_lagi_model->find($id));
		Assets::add_module_js('tes_lagi', 'tes_lagi.js');

		Template::set('toolbar_title', lang('tes_lagi_edit') . ' Tes Lagi');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_tes_lagi()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_tes_lagi($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('tes_lagi_nama','Nama','required|max_length[12]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nama']        = $this->input->post('tes_lagi_nama');

		if ($type == 'insert')
		{
			$id = $this->tes_lagi_model->insert($data);

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
			$return = $this->tes_lagi_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}