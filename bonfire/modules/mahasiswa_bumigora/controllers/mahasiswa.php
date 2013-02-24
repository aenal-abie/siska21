<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Mahasiswa_Bumigora.Mahasiswa.View');
		$this->load->model('mahasiswa_bumigora_model', null, true);
		$this->lang->load('mahasiswa_bumigora');
		
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
					$result = $this->mahasiswa_bumigora_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('mahasiswa_bumigora_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('mahasiswa_bumigora_delete_failure') . $this->mahasiswa_bumigora_model->error, 'error');
				}
			}
		}

		$records = $this->mahasiswa_bumigora_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Mahasiswa Bumigora');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Mahasiswa Bumigora object.
	*/
	public function create()
	{
		$this->auth->restrict('Mahasiswa_Bumigora.Mahasiswa.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_mahasiswa_bumigora())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('mahasiswa_bumigora_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'mahasiswa_bumigora');

				Template::set_message(lang('mahasiswa_bumigora_create_success'), 'success');
				Template::redirect(SITE_AREA .'/mahasiswa/mahasiswa_bumigora');
			}
			else
			{
				Template::set_message(lang('mahasiswa_bumigora_create_failure') . $this->mahasiswa_bumigora_model->error, 'error');
			}
		}
		Assets::add_module_js('mahasiswa_bumigora', 'mahasiswa_bumigora.js');

		Template::set('toolbar_title', lang('mahasiswa_bumigora_create') . ' Mahasiswa Bumigora');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Mahasiswa Bumigora data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('mahasiswa_bumigora_invalid_id'), 'error');
			redirect(SITE_AREA .'/mahasiswa/mahasiswa_bumigora');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Mahasiswa_Bumigora.Mahasiswa.Edit');

			if ($this->save_mahasiswa_bumigora('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('mahasiswa_bumigora_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'mahasiswa_bumigora');

				Template::set_message(lang('mahasiswa_bumigora_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('mahasiswa_bumigora_edit_failure') . $this->mahasiswa_bumigora_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Mahasiswa_Bumigora.Mahasiswa.Delete');

			if ($this->mahasiswa_bumigora_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('mahasiswa_bumigora_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'mahasiswa_bumigora');

				Template::set_message(lang('mahasiswa_bumigora_delete_success'), 'success');

				redirect(SITE_AREA .'/mahasiswa/mahasiswa_bumigora');
			} else
			{
				Template::set_message(lang('mahasiswa_bumigora_delete_failure') . $this->mahasiswa_bumigora_model->error, 'error');
			}
		}
		Template::set('mahasiswa_bumigora', $this->mahasiswa_bumigora_model->find($id));
		Assets::add_module_js('mahasiswa_bumigora', 'mahasiswa_bumigora.js');

		Template::set('toolbar_title', lang('mahasiswa_bumigora_edit') . ' Mahasiswa Bumigora');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_mahasiswa_bumigora()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_mahasiswa_bumigora($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['nim'] = $id;
		}

		
		$this->form_validation->set_rules('mahasiswa_bumigora_npm','Npm','max_length[23]');
		$this->form_validation->set_rules('mahasiswa_bumigora_nomor_pendaftaran','Nomor Pendaftaran','max_length[12]');
		$this->form_validation->set_rules('mahasiswa_bumigora_nomor_pendaftaran_ulang','Nomor Pendaftaran Ulang','max_length[12]');
		$this->form_validation->set_rules('mahasiswa_bumigora_nama_mahasiswa','Nama Mahasiswa','max_length[125]');
		$this->form_validation->set_rules('mahasiswa_bumigora_tempat_lahir','Tempat Lahir','max_length[50]');
		$this->form_validation->set_rules('mahasiswa_bumigora_tanggal_lahir','Tanggal Lahir','max_length[50]');
		$this->form_validation->set_rules('mahasiswa_bumigora_alamat','Alamat','max_length[75]');
		$this->form_validation->set_rules('mahasiswa_bumigora_kota','Kota','max_length[50]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['npm']        = $this->input->post('mahasiswa_bumigora_npm');
		$data['nomor_pendaftaran']        = $this->input->post('mahasiswa_bumigora_nomor_pendaftaran');
		$data['nomor_pendaftaran_ulang']        = $this->input->post('mahasiswa_bumigora_nomor_pendaftaran_ulang');
		$data['nama_mahasiswa']        = $this->input->post('mahasiswa_bumigora_nama_mahasiswa');
		$data['tempat_lahir']        = $this->input->post('mahasiswa_bumigora_tempat_lahir');
		$data['tanggal_lahir']        = $this->input->post('mahasiswa_bumigora_tanggal_lahir') ? $this->input->post('mahasiswa_bumigora_tanggal_lahir') : '0000-00-00';
		$data['alamat']        = $this->input->post('mahasiswa_bumigora_alamat');
		$data['kota']        = $this->input->post('mahasiswa_bumigora_kota');

		if ($type == 'insert')
		{
			$id = $this->mahasiswa_bumigora_model->insert($data);

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
			$return = $this->mahasiswa_bumigora_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}