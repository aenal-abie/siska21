<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Data_Mahasiswa.Mahasiswa.View');
		$this->load->model('data_mahasiswa_model', null, true);
		$this->lang->load('data_mahasiswa');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
		Template::set_block('sub_nav', 'mahasiswa/_sub_nav');
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
					$result = $this->data_mahasiswa_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('data_mahasiswa_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('data_mahasiswa_delete_failure') . $this->data_mahasiswa_model->error, 'error');
				}
			}
		}

    // Pagination
		$this->load->library('pagination');		
    $total = $this->data_mahasiswa_model->count_all();    
    //$limit = $this->settings_lib->item('site.list_limit');        
    $limit = 1;
		$offset=$this->input->get('per_page');     				    
   	$this->pager['base_url'] = current_url()."?";
		$this->pager['total_rows'] = $total;
		$this->pager['per_page'] = $limit;
		$this->pager['page_query_string']	= true;
    $this->pager['first_link'] = 'Awal';
		$this->pager['last_link'] = 'Akhir';
		$this->pager['next_link'] = '&raquo;';
		$this->pager['prev_link'] = '&laquo;';
    $this->pagination->initialize($this->pager);
    // end pagination           
        
    $records = $this->data_mahasiswa_model->get_data_mahasiswa($limit, $offset);  		

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Data Mahasiswa');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Data Mahasiswa object.
	*/
	public function create()
	{
		$this->auth->restrict('Data_Mahasiswa.Mahasiswa.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_data_mahasiswa())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_mahasiswa_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'data_mahasiswa');

				Template::set_message(lang('data_mahasiswa_create_success'), 'success');
				Template::redirect(SITE_AREA .'/mahasiswa/data_mahasiswa');
			}
			else
			{
				Template::set_message(lang('data_mahasiswa_create_failure') . $this->data_mahasiswa_model->error, 'error');
			}
		}
		Assets::add_module_js('data_mahasiswa', 'data_mahasiswa.js');

		Template::set('toolbar_title', lang('data_mahasiswa_create') . ' Data Mahasiswa');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Data Mahasiswa data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('data_mahasiswa_invalid_id'), 'error');
			redirect(SITE_AREA .'/mahasiswa/data_mahasiswa');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Data_Mahasiswa.Mahasiswa.Edit');

			if ($this->save_data_mahasiswa('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_mahasiswa_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_mahasiswa');

				Template::set_message(lang('data_mahasiswa_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('data_mahasiswa_edit_failure') . $this->data_mahasiswa_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Data_Mahasiswa.Mahasiswa.Delete');

			if ($this->data_mahasiswa_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_mahasiswa_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_mahasiswa');

				Template::set_message(lang('data_mahasiswa_delete_success'), 'success');

				redirect(SITE_AREA .'/mahasiswa/data_mahasiswa');
			} else
			{
				Template::set_message(lang('data_mahasiswa_delete_failure') . $this->data_mahasiswa_model->error, 'error');
			}
		}
		Template::set('data_mahasiswa', $this->data_mahasiswa_model->find($id));
		Assets::add_module_js('data_mahasiswa', 'data_mahasiswa.js');

		Template::set('toolbar_title', lang('data_mahasiswa_edit') . ' Data Mahasiswa');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_data_mahasiswa()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_data_mahasiswa($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['nim'] = $id;
		}

		$this->form_validation->set_rules('data_mahasiswa_nim','Nim','required|max_length[10]');
		$this->form_validation->set_rules('data_mahasiswa_npm','Npm','required|max_length[23]');
		$this->form_validation->set_rules('data_mahasiswa_nomor_pendaftaran','Nomor Pendaftaran','required|max_length[12]');
		$this->form_validation->set_rules('data_mahasiswa_nomor_pendaftaran_ulang','Nomor Pendaftaran Ulang','required|max_length[12]');
		$this->form_validation->set_rules('data_mahasiswa_nama_mahasiswa','Nama Mahasiswa','required|max_length[125]');
		$this->form_validation->set_rules('data_mahasiswa_tempat_lahir','Tempat Lahir','required|max_length[50]');
		$this->form_validation->set_rules('data_mahasiswa_tanggal_lahir','Tanggal Lahir','required|max_length[50]');
		$this->form_validation->set_rules('data_mahasiswa_alamat','Alamat','required|max_length[75]');
		$this->form_validation->set_rules('data_mahasiswa_kota','Kota','required|max_length[50]');
		$this->form_validation->set_rules('data_mahasiswa_propinsi','Propinsi','required');
		$this->form_validation->set_rules('data_mahasiswa_telepon','Telepon','required|is_numeric|max_length[20]');
		$this->form_validation->set_rules('data_mahasiswa_jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('data_mahasiswa_agama','Agama','required');
		$this->form_validation->set_rules('data_mahasiswa_golongan_darah','Golongan Darah','required');
		$this->form_validation->set_rules('data_mahasiswa_kewarganegaraan','Kewarganegaraan','required');
		$this->form_validation->set_rules('data_mahasiswa_nama_instansi','Nama Instansi','max_length[75]');
		$this->form_validation->set_rules('data_mahasiswa_email','Email','required|valid_email|max_length[75]');
		$this->form_validation->set_rules('data_mahasiswa_nama_ayah','Nama Ayah','required|max_length[50]');
		$this->form_validation->set_rules('data_mahasiswa_agama_ayah','Agama Ayah','required');
		$this->form_validation->set_rules('data_mahasiswa_pekerjaan_ayah','Pekerjaan Ayah','required');
		$this->form_validation->set_rules('data_mahasiswa_nama_ibu','Nama Ibu','required|max_length[50]');
		$this->form_validation->set_rules('data_mahasiswa_agama_ibu','Agama Ibu','required');
		$this->form_validation->set_rules('data_mahasiswa_pekerjaan_ibu','Pekerjaan Ibu','required');
		$this->form_validation->set_rules('data_mahasiswa_alamat_orangtua','Alamat Orangtua','required|max_length[75]');
		$this->form_validation->set_rules('data_mahasiswa_kota_orangtua','Kota Orangtua','required|max_length[50]');
		$this->form_validation->set_rules('data_mahasiswa_propinsi_orangtua','Propinsi Orangtua','required');
		$this->form_validation->set_rules('data_mahasiswa_telepon_orangtua','Telepon Orangtua','is_numeric|max_length[20]');
		//$this->form_validation->set_rules('data_mahasiswa_foto','Foto','max_length[16]');
		if ($type == 'insert')
		{
			$this->form_validation->set_rules('data_mahasiswa_sandi','Sandi','required|min_length[6]|max_length[255]|matches[data_mahasiswa_ulangi_sandi]');
			$this->form_validation->set_rules('data_mahasiswa_ulangi_sandi','Ulangi Sandi','required|min_length[6]|max_length[255]');
		}
		else
		{
			if (isset($_POST['data_mahasiswa_sandi']) && !empty($_POST['data_mahasiswa_sandi']))
			{
				$this->form_validation->set_rules('data_mahasiswa_sandi','Sandi','required|min_length[6]|max_length[255]|matches[data_mahasiswa_ulangi_sandi]');
				$this->form_validation->set_rules('data_mahasiswa_ulangi_sandi','Ulangi Sandi','required|min_length[6]|max_length[255]');	
			}
		}
		$this->form_validation->set_rules('data_mahasiswa_status','Status','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$nim        = $this->input->post('data_mahasiswa_nim');
		$data['nim']        = $this->input->post('data_mahasiswa_nim');
		$data['npm']        = $this->input->post('data_mahasiswa_npm');
		$data['nomor_pendaftaran']        = $this->input->post('data_mahasiswa_nomor_pendaftaran');
		$data['nomor_pendaftaran_ulang']        = $this->input->post('data_mahasiswa_nomor_pendaftaran_ulang');
		$data['nama_mahasiswa']        = $this->input->post('data_mahasiswa_nama_mahasiswa');
		$data['tempat_lahir']        = $this->input->post('data_mahasiswa_tempat_lahir');
		$data['tanggal_lahir']        = $this->input->post('data_mahasiswa_tanggal_lahir') ? $this->input->post('data_mahasiswa_tanggal_lahir') : '0000-00-00';
		$data['alamat']        = $this->input->post('data_mahasiswa_alamat');
		$data['kota']        = $this->input->post('data_mahasiswa_kota');
		$data['propinsi']        = $this->input->post('data_mahasiswa_propinsi');
		$data['telepon']        = $this->input->post('data_mahasiswa_telepon');
		$data['jenis_kelamin']        = $this->input->post('data_mahasiswa_jenis_kelamin');
		$data['agama']        = $this->input->post('data_mahasiswa_agama');
		$data['golongan_darah']        = $this->input->post('data_mahasiswa_golongan_darah');
		$data['kewarganegaraan']        = $this->input->post('data_mahasiswa_kewarganegaraan');
		$data['nama_instansi']        = $this->input->post('data_mahasiswa_nama_instansi');
		$data['email']        = $this->input->post('data_mahasiswa_email');
		$data['nama_ayah']        = $this->input->post('data_mahasiswa_nama_ayah');
		$data['agama_ayah']        = $this->input->post('data_mahasiswa_agama_ayah');
		$data['pekerjaan_ayah']        = $this->input->post('data_mahasiswa_pekerjaan_ayah');
		$data['nama_ibu']        = $this->input->post('data_mahasiswa_nama_ibu');
		$data['agama_ibu']        = $this->input->post('data_mahasiswa_agama_ibu');
		$data['pekerjaan_ibu']        = $this->input->post('data_mahasiswa_pekerjaan_ibu');
		$data['alamat_orangtua']        = $this->input->post('data_mahasiswa_alamat_orangtua');
		$data['kota_orangtua']        = $this->input->post('data_mahasiswa_kota_orangtua');
		$data['propinsi_orangtua']        = $this->input->post('data_mahasiswa_propinsi_orangtua');
		$data['telepon_orangtua']        = $this->input->post('data_mahasiswa_telepon_orangtua');
		if (empty($_FILES['data_mahasiswa_foto']) && $type=='insert')
		{
			$data['foto']        = 'noimage.jpg';
		}
		
		if (($type == 'insert') || (($type == 'update') && (!empty($_POST['data_mahasiswa_sandi']))))
		{
			$data['sandi']        = $this->input->post('data_mahasiswa_sandi');
		}
		
		$data['status']        = $this->input->post('data_mahasiswa_status');

		if ($type == 'insert')
		{
			$id = $this->data_mahasiswa_model->insert($data);

			if (is_numeric($id))
			{
				// Mengunggah foto mahasiswa ke direktori /uploads/foto/mahasiswa
				if ((!empty($_FILES['data_mahasiswa_foto'])) && ($_FILES['data_mahasiswa_foto']['error']==0))
				{				
					// Mengatur konfigurasi file upload
					$config['file_name'] = $nim.'.jpg';
					$config['upload_path'] = realpath( FCPATH.'uploads/foto/mahasiswa/');
					$config['allowed_types'] = 'jpg';
					$config['max_size'] = '2000';
					$config['max_width'] = '2000';
					$config['max_height'] = '2000';
					$this->load->library('upload', $config);
						
					if (!$this->upload->do_upload('data_mahasiswa_foto'))
					{
		        $this->error = $this->upload->display_errors();
		        return FALSE;
					}
					else
					{
		        $img_data = $this->upload->data();
						// meresize image yang diupload
						$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
						$config['maintain_ratio'] = TRUE;
						$config['width'] = 114;
						$config['height'] = 152;
				
						$this->load->library('image_lib');
						$this->image_lib->initialize($config);
				
						if (!$this->image_lib->resize())
						{
							$this->error = $this->image_lib->display_errors();
							return FALSE;
						}										        
		        $data['foto'] = $config['file_name'];			        			        
		        $this->data_mahasiswa_model->update_foto($id, $data);				
					}
				}
				$return = $id;
			} else
			{
				$return = FALSE;
			}
		}
		else if ($type == 'update')
		{
			// Mengunggah foto mahasiswa ke direktori /uploads/foto/mahasiswa
			if ((!empty($_FILES['data_mahasiswa_foto'])) && ($_FILES['data_mahasiswa_foto']['error']==0))
			{				
				// Mengatur konfigurasi file upload
				$config['file_name'] = $nim.'.jpg';
				$config['upload_path'] = realpath( FCPATH.'uploads/foto/mahasiswa/');
				$config['allowed_types'] = 'jpg';
				$config['max_size'] = '2000';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				$this->load->library('upload', $config);
					
				if (!$this->upload->do_upload('data_mahasiswa_foto'))
				{
	        $this->error = $this->upload->display_errors();
	        return FALSE;
				}
				else
				{
	        $img_data = $this->upload->data();
					// meresize image yang diupload
					$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 114;
					$config['height'] = 152;
			
					$this->load->library('image_lib');
					$this->image_lib->initialize($config);
			
					if (!$this->image_lib->resize())
					{
						$this->error = $this->image_lib->display_errors();
						return FALSE;
					}										        
	        $data['foto'] = $config['file_name'];			        			        
	        $this->data_mahasiswa_model->update_foto($id, $data);				
				}
			}
			
			$return = $this->data_mahasiswa_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}