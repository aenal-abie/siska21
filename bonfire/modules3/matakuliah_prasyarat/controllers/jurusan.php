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
        //Template::redirect(SITE_AREA .'/jurusan/matakuliah_prasyarat/create');
        
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
        
        $data=$this->matakuliah_prasyarat_model->select_nama_kurikulum();
        if(!empty($data)){
            $option[""]="";
            foreach ($data as $row)
            {
                $option[$row->kode_nama_kurikulum]=$row->nama_kurikulum ." - ". $row->nama_jurusan ;    
            }
            Template::set('options', $option);
        }
         Assets::add_module_js('matakuliah_prasyarat', 'list');
         Template::set('toolbar_title', lang('matakuliah_prasyarat_list') . ' Matakuliah Prasyarat');
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
        Assets::add_module_js('matakuliah_prasyarat', 'matakuliah_prasyarat');
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
        
        $data=$this->matakuliah_prasyarat_model->select_nama_kurikulum();
        if(!empty($data)){
            $option[""]="";
            foreach ($data as $row)
            {
                $option[$row->kode_nama_kurikulum]=$row->nama_kurikulum ." - ". $row->nama_jurusan ;    
            }
            Template::set('options', $option);
        }
        
		
		Template::set('toolbar_title', lang('matakuliah_prasyarat_create') . ' Matakuliah Prasyarat');
		Template::render();
	}

	//--------------------------------------------------------------------

    public function get_data()
    {
        $id = $this->uri->segment(5); 
        $data['mk']=$this->matakuliah_prasyarat_model->get_mk($id)->result();
        $this->load->view('jurusan/matakuliah',$data);
    }

	//--------------------------------------------------------------------


    public function all_mk_kurikulum()
    {
        $id = $this->uri->segment(5); 
        $data['mk']=$this->matakuliah_prasyarat_model->get_mk($id)->result();
        $this->load->view('jurusan/list_mk',$data);
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
	public function save_prasyarat()
	{
		if ($this->input->post('save'))
		{
            $nama_kirikulum =$this->input->post('kode_nama_kurikulum');
            $kode_mk = $this->input->post('kode_matakuliah');
            $kode_prasyarat = $this->input->post('kode_prasyarat');
            $jml_prasyarat = count($kode_prasyarat);
            for($i=0; $i<$jml_prasyarat; $i++)
            {
                $data = array();
                $data['kode_nama_kurikulum']      = $nama_kirikulum ;
                $data['matakuliah_yg_diambil']      = $kode_mk ;
                $data['matakuliah_prasyarat']          = $kode_prasyarat[$i];
                $this->matakuliah_prasyarat_model->insert($data);
            }
            Template::set_message('Mata Kuliah Prasyarat Berhasil Ditambahkan Matakuliah', 'success');
            Template::redirect(SITE_AREA .'/jurusan/matakuliah_prasyarat/create/');
		}    
	}

	//--------------------------------------------------------------------


    public function all_syarat(){
        $kd_kurikulum = $this->uri->segment(5); 
        $kd_nama_kurikulum = $this->uri->segment(6);
        $data['syarat']=$this->matakuliah_prasyarat_model->get_prasyarat($kd_kurikulum,$kd_nama_kurikulum)->result();
        //print_r($data['syarat']);
        $this->load->view('jurusan/list_syarat',$data);        
    }


}