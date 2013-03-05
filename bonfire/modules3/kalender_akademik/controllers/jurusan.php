<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Kalender_Akademik.Jurusan.View');
		$this->load->model('kalender_akademik_model', null, true);
		$this->lang->load('kalender_akademik');
		
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
					$result = $this->kalender_akademik_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kalender_akademik_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kalender_akademik_delete_failure') . $this->kalender_akademik_model->error, 'error');
				}
			}
		}

		$records = $this->kalender_akademik_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Kalender Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Kalender Akademik object.
	*/
	public function create()
	{
		$this->auth->restrict('Kalender_Akademik.Jurusan.Create');

		if ($this->input->post('save'))
		{			
			if ($insert_id = $this->save_kalender_akademik())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kalender_akademik_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'kalender_akademik');

				Template::set_message(lang('kalender_akademik_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/kalender_akademik');
			}
			else
			{
				Template::set_message(lang('kalender_akademik_create_failure') . $this->kalender_akademik_model->error, 'error');
			}
		}
		Assets::add_module_js('kalender_akademik', 'kalender_akademik.js');

		Template::set('toolbar_title', lang('kalender_akademik_create') . ' Kalender Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Kalender Akademik data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);
		
		// buat session untuk menyimpan data primary key (kode_kalender_akademik)
		$this->session->set_userdata('kode_kalender_akademik', $id);

		if (empty($id))
		{
			Template::set_message(lang('kalender_akademik_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/kalender_akademik');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Kalender_Akademik.Jurusan.Edit');

			if ($this->save_kalender_akademik('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kalender_akademik_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'kalender_akademik');

				Template::set_message(lang('kalender_akademik_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('kalender_akademik_edit_failure') . $this->kalender_akademik_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Kalender_Akademik.Jurusan.Delete');

			if ($this->kalender_akademik_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kalender_akademik_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'kalender_akademik');

				Template::set_message(lang('kalender_akademik_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/kalender_akademik');
			} else
			{
				Template::set_message(lang('kalender_akademik_delete_failure') . $this->kalender_akademik_model->error, 'error');
			}
		}
		$ka = $this->kalender_akademik_model->find($id);
		$this->session->set_userdata('deskripsi_lama', $ka->deskripsi_kalender_akademik);
		
		Template::set('kalender_akademik', $this->kalender_akademik_model->find($id));		
		Assets::add_module_js('kalender_akademik', 'kalender_akademik.js');

		Template::set('toolbar_title', lang('kalender_akademik_edit') . ' Kalender Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_kalender_akademik()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_kalender_akademik($type='insert', $id=0)
	{
		if ($type == 'update') {									
			$this->form_validation->set_rules('kalender_akademik_kode_kalender_akademik','Kode Kalender Akademik','required|is_numeric|edit_unique[kalender_akademik.kode_kalender_akademik.'.$id.']|max_length[2]');			
			$this->form_validation->set_rules('kalender_akademik_deskripsi_kalender_akademik','Deskripsi Kalender Akademik','required|edit_unique[kalender_akademik.deskripsi_kalender_akademik.'.$deskripsi_lama.']|max_length[40]');						
		}
		
		if ($type == 'insert')
		{
			$this->form_validation->set_rules('kalender_akademik_kode_kalender_akademik','Kode Kalender Akademik','required|is_numeric|unique[kalender_akademik.kode_kalender_akademik]|max_length[2]');			
			$this->form_validation->set_rules('kalender_akademik_deskripsi_kalender_akademik','Deskripsi Kalender Akademik','required|unique[kalender_akademik.deskripsi_kalender_akademik]|max_length[40]');			
		}
		

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_kalender_akademik']        = $this->input->post('kalender_akademik_kode_kalender_akademik');
		$data['deskripsi_kalender_akademik']        = $this->input->post('kalender_akademik_deskripsi_kalender_akademik');

		if ($type == 'insert')
		{
			$id = $this->kalender_akademik_model->insert($data);
			
			/*if ($id)
			{
				$return = TRUE;
			} else
			{
				$return = FALSE;				
			}	*/
			$return = TRUE;
		}
		else if ($type == 'update')
		{
			$return = $this->kalender_akademik_model->update($id, $data);
		}

		return $return;
	}

	/**
	 * Cek apakah kode_kalender_akademik valid, agar tidak ganda. Hanya untuk proses update data kode_kalender_akademik
	 */
	function valid_kode_kalender_akademik()
	{
		$current_kode_kalender_akademik 	= $this->session->userdata('kode_kalender_akademik');
		$new_kode_kalender_akademik			= $this->input->post('kalender_akademik_kode_kalender_akademik');
				
		if ($new_kode_kalender_akademik === $current_kode_kalender_akademik)
		{
			return TRUE;
		}
		else
		{
			if($this->kalender_akademik_model->valid_kode_kalender_akademik($new_kode_kalender_akademik) === TRUE)
			{
				$this->form_validation->set_message('valid_kode_kalender_akademik', "Kalender Akademik dengan kode $new_kode_kalender_akademik sudah terdaftar");
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
	}
	//--------------------------------------------------------------------	

}