<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Nama_Jurusan.Jurusan.View');
		$this->load->model('nama_jurusan_model', null, true);
		$this->lang->load('nama_jurusan');
		
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
					$result = $this->nama_jurusan_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('nama_jurusan_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('nama_jurusan_delete_failure') . $this->nama_jurusan_model->error, 'error');
				}
			}
		}

		$records = $this->nama_jurusan_model->get_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Nama Jurusan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Nama Jurusan object.
	*/
	public function create()
	{
		$this->auth->restrict('Nama_Jurusan.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_nama_jurusan())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('nama_jurusan_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'nama_jurusan');

				Template::set_message(lang('nama_jurusan_create_success'), 'success');
				//Template::redirect(SITE_AREA .'/jurusan/nama_jurusan');
			}
			else
			{
				Template::set_message(lang('nama_jurusan_create_failure') . $this->nama_jurusan_model->error, 'error');
			}
		}
		
        $data=$this->nama_jurusan_model->select_jurusan();
        if(!empty($data)){
            $option_jurusan['']='';
            foreach ($data as $row)
            {
                $option_jurusan[$row->kode_jurusan]=$row->nama_jurusan;    
            }
            Template::set('jurusan', $option_jurusan);
        }
        
        $data=$this->nama_jurusan_model->select_jenjang();
        if(!empty($data)){
            $option['']='';
            foreach ($data as $row)
            {
                $option[$row->kode_jenjang]=$row->nama_jenjang;    
            }
            Template::set('jenjang', $option);
        }
        
        Assets::add_module_js('nama_jurusan', 'nama_jurusan.js');
		Template::set('toolbar_title', lang('nama_jurusan_create') . ' Nama Jurusan');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Nama Jurusan data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('nama_jurusan_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/nama_jurusan');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Nama_Jurusan.Jurusan.Edit');

			if ($this->save_nama_jurusan('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('nama_jurusan_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'nama_jurusan');

				Template::set_message(lang('nama_jurusan_edit_success'), 'success');
                Template::redirect(SITE_AREA .'/jurusan/nama_jurusan');
			}
			else
			{
				Template::set_message(lang('nama_jurusan_edit_failure') . $this->nama_jurusan_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Nama_Jurusan.Jurusan.Delete');

			if ($this->nama_jurusan_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('nama_jurusan_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'nama_jurusan');

				Template::set_message(lang('nama_jurusan_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/nama_jurusan');
			} else
			{
				Template::set_message(lang('nama_jurusan_delete_failure') . $this->nama_jurusan_model->error, 'error');
			}
		}
		Template::set('nama_jurusan', $this->nama_jurusan_model->find($id));
        $data=$this->nama_jurusan_model->select_jurusan();
        if(!empty($data)){
            $option_jurusan['']='';
            foreach ($data as $row)
            {
                $option_jurusan[$row->kode_jurusan]=$row->nama_jurusan;    
            }
            Template::set('jurusan', $option_jurusan);
        }
        //print_r($option_jurusan);
        $data=$this->nama_jurusan_model->select_jenjang();
        if(!empty($data)){
            $option['']='';
            foreach ($data as $row)
            {
                $option[$row->kode_jenjang]=$row->nama_jenjang;    
            }
            Template::set('jenjang', $option);
        }
        //print_r($option);
		Assets::add_module_js('nama_jurusan', 'nama_jurusan.js');

		Template::set('toolbar_title', lang('nama_jurusan_edit') . ' Nama Jurusan');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_nama_jurusan()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_nama_jurusan($type='insert', $id=0)
	{
		($type == 'insert') ?
            $this->form_validation->set_rules('save','','multi_unique[nama_jurusan,kode_jurusan.nama_jurusan_kode_jurusan,kode_jenjang.nama_jurusan_kode_jenjang]')
		: "" ;
            $this->form_validation->set_rules('save','','edit_multi_unique[nama_jurusan,kode_nama_jurusan.'.$id.',kode_jurusan.nama_jurusan_kode_jurusan,kode_jenjang.nama_jurusan_kode_jenjang]');                
        $this->form_validation->set_rules('nama_jurusan_kode_jurusan','Kode Jurusan','required|max_length[2]');
		$this->form_validation->set_rules('nama_jurusan_kode_jenjang','Kode Jenjang','required|max_length[1]');
		$this->form_validation->set_rules('nama_jurusan_nama_jurusan','Nama Jurusan','required|max_length[80]');
		$this->form_validation->set_rules('nama_jurusan_singkatan_jurusan','Singkatan Jurusan','required|max_length[4]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kode_jurusan']        = $this->input->post('nama_jurusan_kode_jurusan');
		$data['kode_jenjang']        = $this->input->post('nama_jurusan_kode_jenjang');
		$data['nama_jurusan']        = $this->input->post('nama_jurusan_nama_jurusan');
		$data['singkatan_jurusan']        = $this->input->post('nama_jurusan_singkatan_jurusan');

		if ($type == 'insert')
		{
			$id = $this->nama_jurusan_model->insert($data);

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
			$return = $this->nama_jurusan_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}