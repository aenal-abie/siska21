
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Beban_Studi.Jurusan.View');
		$this->load->model('beban_studi_model', null, true);
		$this->lang->load('beban_studi');
		
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
					$result = $this->beban_studi_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('beban_studi_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('beban_studi_delete_failure') . $this->beban_studi_model->error, 'error');
				}
			}
		}

		$records = $this->beban_studi_model->select_all();
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manajemen Beban Studi');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Beban Studi object.
	*/
	public function create()
	{
		$this->auth->restrict('Beban_Studi.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_beban_studi())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('beban_studi_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'beban_studi');

				Template::set_message(lang('beban_studi_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/beban_studi');
			}
			else
			{
				Template::set_message(lang('beban_studi_create_failure') . $this->beban_studi_model->error, 'error');
			}
		}
        
        $data=$this->beban_studi_model->select_nama_jurusan();
        
        if(!empty($data)){
            foreach ($data as $row)
            {
                $option[$row->kode_nama_jurusan]=$row->nama_jurusan;    
            }
            Template::set('options', $option);
        } 
		Assets::add_module_js('beban_studi', 'beban_studi.js');

		Template::set('toolbar_title', lang('beban_studi_create') . ' Beban Studi');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Beban Studi data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('beban_studi_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/beban_studi');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Beban_Studi.Jurusan.Edit');

			if ($this->save_beban_studi('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('beban_studi_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'beban_studi');

				Template::set_message(lang('beban_studi_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('beban_studi_edit_failure') . $this->beban_studi_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Beban_Studi.Jurusan.Delete');

			if ($this->beban_studi_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('beban_studi_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'beban_studi');

				Template::set_message(lang('beban_studi_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/beban_studi');
			} else
			{
				Template::set_message(lang('beban_studi_delete_failure') . $this->beban_studi_model->error, 'error');
			}
		}
        Template::set('beban_studi', $this->beban_studi_model->find($id));
        $data=$this->beban_studi_model->select_nama_jurusan();
        
        if(!empty($data)){
            foreach ($data as $row)
            {
                $option[$row->kode_nama_jurusan]=$row->nama_jurusan;    
            }
            Template::set('options', $option);
        } 
        
		
        
		Assets::add_module_js('beban_studi', 'beban_studi.js');

		Template::set('toolbar_title', lang('beban_studi_edit') . ' Beban Studi');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_beban_studi()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_beban_studi($type='insert', $id=0)
	{
		if ($type == 'update') {
			$this->form_validation->set_rules('beban_studi_kode_nama_jurusan','Kode Nama Jurusan','required|max_length[6]');
		} else 
        {
            $this->form_validation->set_rules('beban_studi_kode_nama_jurusan','Kode Nama Jurusan','is_unique[beban_studi.kode_nama_jurusan]|required|max_length[6]');  
		}				
		$this->form_validation->set_rules('beban_studi_jumlah_sks','Jumlah Sks','required|max_length[10]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_nama_jurusan']        = $this->input->post('beban_studi_kode_nama_jurusan');
		$data['jumlah_sks']        = $this->input->post('beban_studi_jumlah_sks');

		if ($type == 'insert')
		{
			$id = $this->beban_studi_model->insert($data);

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
			$return = $this->beban_studi_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}