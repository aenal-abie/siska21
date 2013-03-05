<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class keuangan extends Admin_Controller {

	//--------------------------------------------------------------------
	public function __construct()
	{
		parent::__construct();
		$this->auth->restrict('Pembayaran.Keuangan.View');
		$this->load->model('pembayaran_model', null, true);
		$this->lang->load('pembayaran');
        Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');	
		Template::set_block('sub_nav', 'keuangan/_sub_nav');
        Assets::add_js('format_uang');
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
					$result = $this->pembayaran_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('pembayaran_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('pembayaran_delete_failure') . $this->pembayaran_model->error, 'error');
				}
			}
		}
        
        // Pagination
		$this->load->library('pagination');
        $total = $this->pembayaran_model->count_all();
        $limit = $this->settings_lib->item('site.list_limit');
        $offset=$this->input->get('per_page'); 
       	$this->pager['base_url'] 			= current_url()."?";
		$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= true;
        $this->pager['first_link'] = 'Awal';
		$this->pager['last_link'] = 'Akhir';
		$this->pager['next_link'] = '&raquo;';
		$this->pager['prev_link'] = '&laquo;';
        $this->pagination->initialize($this->pager);
        // end pagination 
        
        Assets::clear_cache();
        Assets::add_module_js('pembayaran', 'index_pembayaran');
        Assets::add_module_css('pembayaran', 'auto');
		$nim =$this->uri->segment(5);
        
        $records = $this->pembayaran_model->getData_pembayaran($nim,$offset,$limit);
        $nama = $this->db->get_where('mahasiswa',array('nim'=>$this->uri->segment(5)))->row();
        Template::set('records', $records);    
		Template::set('toolbar_title', 'Manage Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------
	/*
		Method: create()

		Creates a Pembayaran object.
	*/
	public function create()
	{  
        Assets::clear_cache();
        Assets::add_module_js('pembayaran', 'pembayaran');
        Assets::add_module_js('jumlah_pembayaran.js');
        Assets::add_module_css('pembayaran', 'auto');
        	
        $this->auth->restrict('Pembayaran.Keuangan.Create');
        
		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_pembayaran())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('pembayaran_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'pembayaran');

				Template::set_message(lang('pembayaran_create_success'), 'success');
				Template::redirect(SITE_AREA .'/keuangan/pembayaran/index/'.$this->input->post('nim'));
			}
			else
			{
				Template::set_message(lang('pembayaran_create_failure') . $this->pembayaran_model->error, 'error');
			}
		}
        

		Template::set('toolbar_title',  'Masukan Data Pembayaran Mahasiswa');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Pembayaran data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('pembayaran_invalid_id'), 'error');
			redirect(SITE_AREA .'/keuangan/pembayaran');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Pembayaran.Keuangan.Edit');

			if ($this->save_pembayaran('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('pembayaran_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'pembayaran');

				Template::set_message(lang('pembayaran_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('pembayaran_edit_failure') . $this->pembayaran_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Pembayaran.Keuangan.Delete');

			if ($this->pembayaran_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('pembayaran_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'pembayaran');

				Template::set_message(lang('pembayaran_delete_success'), 'success');

				redirect(SITE_AREA .'/keuangan/pembayaran');
			} else
			{
				Template::set_message(lang('pembayaran_delete_failure') . $this->pembayaran_model->error, 'error');
			}
		}
		Template::set('pembayaran', $this->pembayaran_model->find($id));
		Assets::add_module_js('pembayaran', 'pembayaran.js');

		Template::set('toolbar_title', lang('pembayaran_edit') . ' Pembayaran');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_pembayaran()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_pembayaran($type='insert', $id=0)
	{
		if ($type == 'insert') {
			$this->form_validation->set_rules('save','','multi_unique[pembayaran,nim.nim,kode_tahun_akademik.kode_tahun_akademik,kode_jenis_pembayaran.kode_jenis_pembayaran]');
		}
		$this->form_validation->set_rules('kode_tahun_akademik','Kode Tahun Akademik','max_length[1]|required');
        $this->form_validation->set_rules('kode_jenis_pembayaran','Kode Jenis Pembayaran','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
        $data['nim']        = $this->input->post('nim');
		$data['kode_tahun_akademik'] = $this->input->post('kode_tahun_akademik');
        $data['kode_jenis_pembayaran'] = $this->input->post('kode_jenis_pembayaran');
        if($this->input->post('denda')=='Y')
        {
            $data['status_denda'] ='D';            
        } else 
        {
            $data['status_denda'] ='TD';
        }
        
        $status_dispensasi=$this->input->post('status_pembayaran');
        $data['status_pembayaran'] = $status_dispensasi;
        
        
		if ($type == 'insert')
		{
			$id = $this->pembayaran_model->insert($data);
            // mengecek dispensasi jika dispensasi maka simpan dalam tabel dispensasi;;
            if($status_dispensasi=='D')
            {
                $this->load->model('dispensasi_model', null, true);
                $record_kode_pembayaran = $this->db->query('SELECT MAX(kode_pembayaran) AS kode_pembayaran FROM pembayaran')->row();
                $kode_pembayaran = $record_kode_pembayaran->kode_pembayaran;
                $record_dispensasi['kode_pembayaran']=$kode_pembayaran;
                $record_dispensasi['tanggal_dispensasi']=$this->input->post('tanggal_dispensasi');
                $record_dispensasi['tanggal_jatuh_tempo']=$this->input->post('tanggal_jatuh_tempo');
                $this->dispensasi_model->insert($record_dispensasi);
            }
            
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
			$return = $this->pembayaran_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------

    /**
     *  membuat fungsi untuk mencari hasil look up pada view
     */
    public function lookup()
    {
        $this->auth->restrict('Pembayaran.Keuangan.Create');
		// process posted form data (the requested items like province)
        $keyword = $this->input->get('term');
        $data['response'] = 'false'; //Set default response
        $query = $this->pembayaran_model->lookup($keyword); //Search DB
        if( ! empty($query) )
        {
            $data['response'] = 'true'; //Set response
            $data['message'] = array(); //Create array
            foreach( $query as $row )
            {
                $data['message'][] = array( 
                                        'label'=>$row->nim ." : ".$row->nama_mahasiswa,
                                        'value' => $row->nim ,
										'nama' => $row->nama_mahasiswa,
                                        'angkatan' => substr($row->nim,0,2),
                                        'nim' => $row->nim,
                                        ''
                                     ); 
            }
        }
            
        if('IS_AJAX')
        {
            echo json_encode($data); //echo json string if ajax request
            
        }
	}
    
    /* 
        ajax untuk mengeload jenis pembayaran.
    
     */
     
    public function get_pembayaran($nim='')
    {
        $this->auth->restrict('Pembayaran.Keuangan.Create');
        //$key=$this->uri->segment(5);
        $this->load->library('siska','TA','TA');
        $data['kode_tahun_akademik'] = $this->TA->get_kode_tahun_akademik();
        $data['tahun_akademik']=$this->TA->get_tahun_akademik();
        $data['semester_huruf']=$this->TA->get_semester_huruf();
        $NJN = $this->load->library('siska','NJN');
        $NJN->setNim($nim);
        $NJN->setNama_Jurusan();
        $data['nama_jurusan']=$NJN->getNamajurusan();
        $data['kode']=$NJN->getKode_nama_Jurusan();
        
        $data['jenis_pembayaran'] = $this->pembayaran_model->get_jenis_pembayaran($nim,$NJN->getKode_nama_Jurusan());
        
        $this->load->view('keuangan/jenis_pembayaran',$data);
    } 
    
    /* 
        ajax untuk mengeload jenis pembayaran.
    
     */
     
    /**
      *  $type ::  1= untuk mengambil jumlah saja, 2=jumlah dan denda;
      */ 
    public function get_jumlah_pembayaran($type=1,$kode_jenis_pembayaran=0)
    {
        $data['jumlah'] = $this->pembayaran_model->get_jumlah_pembayaran($type,$kode_jenis_pembayaran);
        $this->load->view('keuangan/jumlah',$data);   
    }
    
    
    public function getpembayaran_mahasiswa()
    {
        $nim = $this->uri->segment(5);
        $data['records'] = $this->pembayaran_model->getData_pembayaran($nim);
        $this->load->view('keuangan/pembayaran_mahasiswa',$data);
    }
    
    public function pembayaran_dispensasi()
    {
        $this->auth->restrict('Pembayaran.Keuangan.Dispensasi');
        $kode_pembayaran= $this->uri->segment(5);
        Assets::clear_cache();
        Assets::add_module_js('pembayaran','dispensasi');
        if ($this->input->post('save'))
		{
			$this->load->model('dispensasi_model', null, true);
            $data= array();
            $data['tanggal_pembayaran']  =  $this->input->post('tanggal_pembayaran');
            $this->dispensasi_model->update_where('kode_pembayaran',$kode_pembayaran,$data);
            $data_pembayaran['status_pembayaran'] = 'LD';
            ($this->input->post('denda')=='D') ? $data_pembayaran['status_denda']='D' : "";
            $this->pembayaran_model->update_where('kode_pembayaran',$kode_pembayaran,$data_pembayaran);
            Template::set_message('Berhasil menyimpan pembayaran dispensasi', 'success');
            Template::redirect(SITE_AREA.'/keuangan/pembayaran/');
		}
        $records = $this->pembayaran_model->getdata_dispensasi($kode_pembayaran);
        Template::set('record',$records);
        Template::set('toolbar_title', 'Pembayaran Dispensasi');
        Template::render();
    }
    
    private function save_pembayaran_dispensasi()
    {
        
    }
    
    
}