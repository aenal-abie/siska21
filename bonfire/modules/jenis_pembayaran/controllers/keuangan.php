<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class keuangan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Jenis_Pembayaran.Keuangan.View');
		$this->load->model('jenis_pembayaran_model', null, true);
		$this->lang->load('jenis_pembayaran');
		
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
					$result = $this->jenis_pembayaran_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('jenis_pembayaran_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('jenis_pembayaran_delete_failure') . $this->jenis_pembayaran_model->error, 'error');
				}
			}
		}

		$records = $this->jenis_pembayaran_model->find_all_to();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Jenis Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------

	/*
		Method: create()

		Creates a Jenis Pembayaran object.
	*/
	public function create()
	{
		$this->auth->restrict('Jenis_Pembayaran.Keuangan.Create');
        Assets::add_js('format_uang');
		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_jenis_pembayaran())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('jenis_pembayaran_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'jenis_pembayaran');

				Template::set_message(lang('jenis_pembayaran_create_success'), 'success');
				Template::redirect(SITE_AREA .'/keuangan/jenis_pembayaran/create');
			}
			else
			{
				Template::set_message(lang('jenis_pembayaran_create_failure') . $this->jenis_pembayaran_model->error, 'error');
			}
		}

        $data=$this->jenis_pembayaran_model->get_nama_jurusan();
        if(!empty($data))
        {
            $option[""]="";
            foreach ($data as $row)
            {
                $option[$row->kode_nama_jurusan]=$row->nama_jurusan;    
            }
             $option['99']='Semua Jurusan'; 
            Template::set('nama_jurusan', $option);
        }
        
        $data_kode_jenis_pembayaran=$this->jenis_pembayaran_model->get_kode_jenis_pembayaran();
        if(!empty($data_kode_jenis_pembayaran))
        {
            $option_kode_jenis[""]="";
            foreach ($data_kode_jenis_pembayaran as $row)
            {
                $option_kode_jenis[$row->kode_jenis_pembayaran]=$row->jenis_pembayaran;    
            } 
            Template::set('kode_jenis_pembayaran', $option_kode_jenis);
        }
        
		Assets::add_module_js('jenis_pembayaran', 'jenis_pembayaran.js');

		Template::set('toolbar_title', lang('jenis_pembayaran_create') . ' Jenis Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Jenis Pembayaran data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);
        Assets::add_js('format_uang');
		if (empty($id))
		{
			Template::set_message(lang('jenis_pembayaran_invalid_id'), 'error');
			redirect(SITE_AREA .'/keuangan/jenis_pembayaran');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Jenis_Pembayaran.Keuangan.Edit');

			if ($this->save_jenis_pembayaran('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('jenis_pembayaran_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'jenis_pembayaran');

				Template::set_message(lang('jenis_pembayaran_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('jenis_pembayaran_edit_failure') . $this->jenis_pembayaran_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Jenis_Pembayaran.Keuangan.Delete');

			if ($this->jenis_pembayaran_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('jenis_pembayaran_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'jenis_pembayaran');

				Template::set_message(lang('jenis_pembayaran_delete_success'), 'success');

				redirect(SITE_AREA .'/keuangan/jenis_pembayaran');
			} else
			{
				Template::set_message(lang('jenis_pembayaran_delete_failure') . $this->jenis_pembayaran_model->error, 'error');
			}
		}
		Template::set('jenis_pembayaran', $this->jenis_pembayaran_model->find($id));
        $data=$this->jenis_pembayaran_model->get_nama_jurusan();
        if(!empty($data))
        {
            $option[""]="";
            foreach ($data as $row)
            {
                $option[$row->kode_nama_jurusan]=$row->nama_jurusan;    
            }
             $option['99']='Semua Jurusan'; 
            Template::set('nama_jurusan', $option);
        }
        
        $data_kode_jenis_pembayaran=$this->jenis_pembayaran_model->get_kode_jenis_pembayaran();
        if(!empty($data_kode_jenis_pembayaran))
        {
            $option_kode_jenis[""]="";
            foreach ($data_kode_jenis_pembayaran as $row)
            {
                $option_kode_jenis[$row->kode_jenis_pembayaran]=$row->jenis_pembayaran;    
            } 
            Template::set('kode_jenis_pembayaran', $option_kode_jenis);
        }
		Assets::add_module_js('jenis_pembayaran', 'jenis_pembayaran.js');

		Template::set('toolbar_title', lang('jenis_pembayaran_edit') . ' Jenis Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_jenis_pembayaran()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_jenis_pembayaran($type='insert', $id=0)
	{
        if ($type == 'insert') 
        {
			$this->form_validation->set_rules('save','','multi_unique[jenis_pembayaran,angkatan.angkatan,kode_nama_jurusan.kode_nama_jurusan,jenis_pembayaran.kode_jenis_pembayaran]');
		} else
        {
            $this->form_validation->set_rules('save','','edit_multi_unique[jenis_pembayaran,kode_jenis_pembayaran.'.$id.',angkatan.angkatan,kode_nama_jurusan.kode_nama_jurusan,jenis_pembayaran.kode_jenis_pembayaran]');            
        }	   
		$this->form_validation->set_rules('angkatan','Angkatan','required|max_length[4]');
        $this->form_validation->set_rules('kode_nama_jurusan','Nama Jurusan','required');
		$this->form_validation->set_rules('kode_jenis_pembayaran','Kode Jenis Pembayaran','required|max_length[50]');
		$this->form_validation->set_rules('jumlah','Jumlah','required|max_length[10]');
		$this->form_validation->set_rules('prosentase_denda','Prosentase Denda','max_length[10]');
		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['angkatan']        = $this->input->post('angkatan');
		$data['kode_nama_jurusan']        = $this->input->post('kode_nama_jurusan');
        $data['jenis_pembayaran']        = $this->input->post('kode_jenis_pembayaran');
		$data['jumlah']        =  str_replace(',','',$this->input->post('jumlah'));
		$data['prosentase_denda']        = $this->input->post('prosentase_denda');

		if ($type == 'insert')
		{
			$id = $this->jenis_pembayaran_model->insert($data);

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
			$return = $this->jenis_pembayaran_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}