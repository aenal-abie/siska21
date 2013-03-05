<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class dosen extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Data_Dosen.Dosen.View');
		$this->load->model('data_dosen_model', null, true);
		$this->lang->load('data_dosen');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
		Template::set_block('sub_nav', 'dosen/_sub_nav');
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
					$result = $this->data_dosen_model->delete($pid);					
					unlink("./uploads/foto/dosen/$pid.jpg");
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('data_dosen_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('data_dosen_delete_failure') . $this->data_dosen_model->error, 'error');
				}
			}
		}

    // Pagination
		$this->load->library('pagination');		
    $total = $this->data_dosen_model->count_all();    
    $limit = $this->settings_lib->item('site.list_limit');        
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
        
    $records = $this->data_dosen_model->get_data_dosen($limit, $offset);        
		
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Data Dosen');
		Template::render();
	}

	//--------------------------------------------------------------------	

	/*
		Method: create()

		Creates a Data Dosen object.
	*/
	public function create()
	{
		$this->auth->restrict('Data_Dosen.Dosen.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_data_dosen())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_dosen_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'data_dosen');

				Template::set_message(lang('data_dosen_create_success'), 'success');
				Template::redirect(SITE_AREA .'/dosen/data_dosen');
			}
			else
			{
				Template::set_message(lang('data_dosen_create_failure') . $this->data_dosen_model->error, 'error');
			}
		}
		Assets::add_module_js('data_dosen', 'data_dosen.js');

		Template::set('toolbar_title', lang('data_dosen_create') . ' Data Dosen');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Data Dosen data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('data_dosen_invalid_id'), 'error');
			redirect(SITE_AREA .'/dosen/data_dosen');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Data_Dosen.Dosen.Edit');

			if ($this->save_data_dosen('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_dosen_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_dosen');

				Template::set_message(lang('data_dosen_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('data_dosen_edit_failure') . $this->data_dosen_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Data_Dosen.Dosen.Delete');

			if ($this->data_dosen_model->delete($id))
			{								
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('data_dosen_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'data_dosen');

				Template::set_message(lang('data_dosen_delete_success'), 'success');

				redirect(SITE_AREA .'/dosen/data_dosen');
			} else
			{
				Template::set_message(lang('data_dosen_delete_failure') . $this->data_dosen_model->error, 'error');
			}
		}
		Template::set('data_dosen', $this->data_dosen_model->find($id));
		Assets::add_module_js('data_dosen', 'data_dosen.js');

		Template::set('toolbar_title', lang('data_dosen_edit') . ' Data Dosen');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_data_dosen()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_data_dosen($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_dosen'] = $id;
		}

		
		$this->form_validation->set_rules('data_dosen_nik','Nik','max_length[20]');
		$this->form_validation->set_rules('data_dosen_nidn','Nidn','max_length[20]');
		$this->form_validation->set_rules('data_dosen_nama_dosen','Nama Dosen','required|max_length[75]');
		$this->form_validation->set_rules('data_dosen_tempat_lahir','Tempat Lahir','required|max_length[75]');
		$this->form_validation->set_rules('data_dosen_tanggal_lahir','Tanggal Lahir','required|max_length[75]');
		$this->form_validation->set_rules('data_dosen_jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('data_dosen_agama','Agama','required');
		$this->form_validation->set_rules('data_dosen_alamat','Alamat','required|max_length[75]');
		$this->form_validation->set_rules('data_dosen_kota','Kota','required|max_length[50]');
		$this->form_validation->set_rules('data_dosen_propinsi','Propinsi','required');
		$this->form_validation->set_rules('data_dosen_kodepos','Kodepos','is_numeric|max_length[5]');
		$this->form_validation->set_rules('data_dosen_telepon','Telepon','required|is_numeric|max_length[20]');
		$this->form_validation->set_rules('data_dosen_email','Email','required|valid_email|max_length[75]');
		$this->form_validation->set_rules('data_dosen_website','Website','max_length[75]');
		$this->form_validation->set_rules('data_dosen_kepakaran','Kepakaran','max_length[255]');
		$this->form_validation->set_rules('data_dosen_peminatan','Peminatan','max_length[255]');
		//$this->form_validation->set_rules('data_dosen_foto','Foto','max_length[20]');
		$this->form_validation->set_rules('data_dosen_status','Status','required');
		$this->form_validation->set_rules('data_dosen_status_perwalian','Status Perwalian','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nik']        = $this->input->post('data_dosen_nik');
		$data['nidn']        = $this->input->post('data_dosen_nidn');
		$data['nama_dosen']        = $this->input->post('data_dosen_nama_dosen');
		$data['tempat_lahir']        = $this->input->post('data_dosen_tempat_lahir');
		$data['tanggal_lahir']        = $this->input->post('data_dosen_tanggal_lahir') ? $this->input->post('data_dosen_tanggal_lahir') : '0000-00-00';
		$data['jenis_kelamin']        = $this->input->post('data_dosen_jenis_kelamin');
		$data['agama']        = $this->input->post('data_dosen_agama');
		$data['alamat']        = $this->input->post('data_dosen_alamat');
		$data['kota']        = $this->input->post('data_dosen_kota');
		$data['propinsi']        = $this->input->post('data_dosen_propinsi');
		$data['kodepos']        = $this->input->post('data_dosen_kodepos');
		$data['telepon']        = $this->input->post('data_dosen_telepon');
		$data['email']        = $this->input->post('data_dosen_email');
		$data['website']        = $this->input->post('data_dosen_website');
		$data['kepakaran']        = $this->input->post('data_dosen_kepakaran');
		$data['peminatan']        = $this->input->post('data_dosen_peminatan');
		if (empty($_FILES['data_dosen_foto']) && $type=='insert')
		{
			$data['foto']        = 'noimage.jpg';
		}
		
		$data['status']        = $this->input->post('data_dosen_status');
		$data['status_perwalian']        = $this->input->post('data_dosen_status_perwalian');				
		
		if ($type == 'insert')
		{
			$id = $this->data_dosen_model->insert($data);			

			if (is_numeric($id))
			{
				// Mengunggah foto dosen ke direktori /uploads/foto/dosen
				if ((!empty($_FILES['data_dosen_foto'])) && ($_FILES['data_dosen_foto']['error']==0))
				{				
					// Mengatur konfigurasi file upload
					$config['file_name'] = $id.'.jpg';
					$config['upload_path'] = realpath( FCPATH.'uploads/foto/dosen/');
					$config['allowed_types'] = 'jpg';
					$config['max_size'] = '2000';
					$config['max_width'] = '2000';
					$config['max_height'] = '2000';
					$this->load->library('upload', $config);
						
					if (!$this->upload->do_upload('data_dosen_foto'))
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
		        $this->data_dosen_model->update_foto($id, $data);				
					}
				}									
				$return = $id;
			} 
			else
			{
				$return = FALSE;
			}
		}
		else if ($type == 'update')
		{
			// Mengunggah foto dosen ke direktori /uploads/foto/dosen
			if ((!empty($_FILES['data_dosen_foto'])) && ($_FILES['data_dosen_foto']['error']==0))
			{				
				// Mengatur konfigurasi file upload
				$config['file_name'] = $id.'.jpg';
				$config['upload_path'] = realpath( FCPATH.'uploads/foto/dosen/');
				$config['allowed_types'] = 'jpg';
				$config['max_size'] = '2000';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				$this->load->library('upload', $config);
					
				if (!$this->upload->do_upload('data_dosen_foto'))
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
	        $this->data_dosen_model->update_foto($id, $data);				
				}
			}
				
			$return = $this->data_dosen_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}