<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Kompetensi.Jurusan.View');
		$this->load->model('kompetensi_model', null, true);
		$this->lang->load('kompetensi');
		
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
					$result = $this->kompetensi_model->delete_where(array('kode_kompetensi'=>$pid));
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kompetensi_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kompetensi_delete_failure') . $this->kompetensi_model->error, 'error');
				}
			}
		}

		$records = $this->kompetensi_model->get_kompetensi();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Kompetensi');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Kompetensi object.
	*/
	public function create()
	{
		$this->auth->restrict('Kompetensi.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_kompetensi())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kompetensi_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'kompetensi');

				Template::set_message(lang('kompetensi_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/kompetensi/create');
			}
			else
			{
				Template::set_message(lang('kompetensi_create_failure') . $this->kompetensi_model->error, 'error');
			}
		}
        
        $data=$this->kompetensi_model->get_nama_jurusan();
        if (!empty($data))
        {
            foreach($data as $row)
            {
                $options[$row->kode_nama_jurusan]=$row->nama_jurusan;
            
            }
            Template::set('options',$options);
        }
		Assets::add_module_js('kompetensi', 'kompetensi.js');

		Template::set('toolbar_title', lang('kompetensi_create') . ' Kompetensi');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Kompetensi data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Kompetensi.Jurusan.Edit');

			if ($this->save_kompetensi('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kompetensi_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'kompetensi');

				Template::set_message(lang('kompetensi_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('kompetensi_edit_failure') . $this->kompetensi_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Kompetensi.Jurusan.Delete');

			if ($this->kompetensi_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('kompetensi_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'kompetensi');

				Template::set_message(lang('kompetensi_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/kompetensi');
			} else
			{
				Template::set_message(lang('kompetensi_delete_failure') . $this->kompetensi_model->error, 'error');
			}
		}
		Template::set('kompetensi', $this->kompetensi_model->find_by('kode_kompetensi',$id));
        $data=$this->kompetensi_model->get_nama_jurusan();
        if (!empty($data))
        {
            foreach($data as $row)
            {
                $options[$row->kode_nama_jurusan]=$row->nama_jurusan;
            
            }
            Template::set('options',$options);
        }
		Assets::add_module_js('kompetensi', 'kompetensi.js');

		Template::set('toolbar_title', lang('kompetensi_edit') . ' Kompetensi');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_kompetensi()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_kompetensi($type='insert', $id=0)
	{
	
		
		$this->form_validation->set_rules('kode_kompetensi','Kode Kompetensi','required|max_length[2]');
		$this->form_validation->set_rules('kode_nama_jurusan','Kode Nama Jurusan','required|max_length[5]');
		$this->form_validation->set_rules('nama_kompetensi','Nama Kompetensi','required|max_length[30]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_kompetensi']        = $this->input->post('kode_kompetensi');
		$data['kode_nama_jurusan']        = $this->input->post('kode_nama_jurusan');
		$data['nama_kompetensi']        = $this->input->post('nama_kompetensi');

		if ($type == 'insert')
		{
			$id = $this->kompetensi_model->insert($data);

			
				$return = true;
			
		}
		else if ($type == 'update')
		{
			$return = $this->kompetensi_model->update_where('kode_kompetensi',$id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}