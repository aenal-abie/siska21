<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Nama_Kurikulum.Jurusan.View');
		$this->load->model('nama_kurikulum_model', null, true);
		$this->lang->load('nama_kurikulum');
		
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
					$result = $this->nama_kurikulum_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('nama_kurikulum_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('nama_kurikulum_delete_failure') . $this->nama_kurikulum_model->error, 'error');
				}
			}
		}
        //Assets::add_js('bootstrap-tooltip', 'bootstrap-tooltip.js','external',true);
		$records = $this->nama_kurikulum_model->select_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Nama Kurikulum');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Nama Kurikulum object.
	*/
	public function create()
	{
		$this->auth->restrict('Nama_Kurikulum.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_nama_kurikulum())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('nama_kurikulum_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'nama_kurikulum');

				Template::set_message(lang('nama_kurikulum_create_success'), 'success');
				//Template::redirect(SITE_AREA .'/jurusan/nama_kurikulum');
			}
			else
			{
				Template::set_message(lang('nama_kurikulum_create_failure') . $this->nama_kurikulum_model->error, 'error');
			}
		}
		Assets::add_module_js('nama_kurikulum', 'nama_kurikulum.js');
        $data=$this->nama_kurikulum_model->select_nama_jurusan();
        if(!empty($data)){
            $option['']='';
            foreach ($data as $row)                
            {
                $option[$row->kode_nama_jurusan]=$row->nama_jurusan;    
            }
            Template::set('options', $option);
        }
        
        
		Template::set('toolbar_title', lang('nama_kurikulum_create') . ' Nama Kurikulum');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Nama Kurikulum data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('nama_kurikulum_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/nama_kurikulum');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Nama_Kurikulum.Jurusan.Edit');

			if ($this->save_nama_kurikulum('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('nama_kurikulum_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'nama_kurikulum');

				Template::set_message(lang('nama_kurikulum_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('nama_kurikulum_edit_failure') . $this->nama_kurikulum_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Nama_Kurikulum.Jurusan.Delete');

			if ($this->nama_kurikulum_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('nama_kurikulum_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'nama_kurikulum');

				Template::set_message(lang('nama_kurikulum_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/nama_kurikulum');
			} else
			{
				Template::set_message(lang('nama_kurikulum_delete_failure') . $this->nama_kurikulum_model->error, 'error');
			}
		}
        Template::set('nama_kurikulum', $this->nama_kurikulum_model->find($id));
        $data=$this->nama_kurikulum_model->select_nama_jurusan();
        if(!empty($data)){
            foreach ($data as $row)
            {
                $option[$row->kode_nama_jurusan]=$row->nama_jurusan;    
            }
            Template::set('options', $option);
        }
		
		Assets::add_module_js('nama_kurikulum', 'nama_kurikulum.js');

		Template::set('toolbar_title', lang('nama_kurikulum_edit') . ' Nama Kurikulum');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_nama_kurikulum()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_nama_kurikulum($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_nama_kurikulum'] = $id;
		}

		
		$this->form_validation->set_rules('nama_kurikulum_nama_kurikulum','Nama Kurikulum','required|unique[nama_kurikulum.kode_nama_kurikulum]|max_length[4]');
		$this->form_validation->set_rules('nama_kurikulum_kode_nama_jurusan','Nama Jurusan','required|max_length[1]');
		$this->form_validation->set_rules('nama_kurikulum_status_kurikulum','Status Kurikulum','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nama_kurikulum']        = $this->input->post('nama_kurikulum_nama_kurikulum');
		$data['kode_nama_jurusan']        = $this->input->post('nama_kurikulum_kode_nama_jurusan');
		$data['status_kurikulum']        = $this->input->post('nama_kurikulum_status_kurikulum');

		if ($type == 'insert')
		{
			$id = $this->nama_kurikulum_model->insert($data);

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
			$return = $this->nama_kurikulum_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}