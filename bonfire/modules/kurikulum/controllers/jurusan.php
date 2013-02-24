<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Kurikulum.Jurusan.ViewDetail');
		$this->load->model('kurikulum_model', null, true);
		$this->lang->load('kurikulum');
		
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
					$result = $this->kurikulum_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kurikulum_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kurikulum_delete_failure') . $this->kurikulum_model->error, 'error');
				}
			}
		}
        $id = $this->uri->segment(5);
		$records = $this->kurikulum_model->select_all($id);
		Template::set('records', $records);
		Template::set('toolbar_title', 'Mengatur Mata Kuliah Kurikulum');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Kurikulum object.
	*/
	public function create()
	{
		$this->auth->restrict('Kurikulum.Jurusan.Create');      
        $data=$this->kurikulum_model->select_nama_kurikulum();
        
        if(!empty($data)){
            foreach ($data as $row)
            {
                $option[$row->kode_nama_kurikulum]=$row->nama_kurikulum . " --  " .$row->nama_jurusan;    
            }
            Template::set('options', $option);
        }
        
        $mk=$this->kurikulum_model->select_mk();
        Template::set('data_mk', $mk);
        $id = $this->uri->segment(5);
        Template::set('kode_nama_kurikulum', $id);
		Assets::add_module_js('kurikulum', 'kurikulum.js');

		Template::set('toolbar_title', lang('kurikulum_create') . ' Kurikulum');
		Template::render();
	}

	//--------------------------------------------------------------------
    
    public function save_kurikulum()
    {
        if ($this->input->post('save'))
		{
			 $kode_mk = $this->input->post('kode_matakuliah');
             $kode_kurikulum = $this->input->post('kode_nama_kurikulum');
             $matakuliah = count($kode_mk);
             for($i=0; $i<$matakuliah; $i++){
                $data = array();
        		$data['kode_nama_kurikulum']      = $kode_kurikulum ;
        		$data['kode_matakuliah']          = $kode_mk[$i];
                $this->kurikulum_model->insert($data);
             }
            Template::set_message($matakuliah.' Mata Kuliah Berhasil Ditambahkan ke Kurikulum', 'success');
            Template::redirect(SITE_AREA .'/jurusan/kurikulum/index/'.$kode_kurikulum);
		}    
        
    }
}