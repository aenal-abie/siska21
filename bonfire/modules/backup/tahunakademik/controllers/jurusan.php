<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jurusan extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Tahunakademik.Jurusan.View');
		$this->load->model('tahunakademik_model', null, true);
		$this->lang->load('tahunakademik');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
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
					$result = $this->tahunakademik_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tahunakademik_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tahunakademik_delete_failure') . $this->tahunakademik_model->error, 'error');
				}
			}
		}

		$records = $this->tahunakademik_model->find_all();
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manajemen Tahun Akademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a tahunakademik object.
	*/
	public function create()
	{
		$this->auth->restrict('Tahunakademik.Jurusan.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_tahunakademik())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tahunakademik_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'tahunakademik');

				Template::set_message(lang('tahunakademik_create_success'), 'success');
				Template::redirect(SITE_AREA .'/jurusan/tahunakademik');
			}
			else
			{
				Template::set_message(lang('tahunakademik_create_failure') . $this->tahunakademik_model->error, 'error');
			}
		}
		Assets::add_module_js('tahunakademik', 'tahunakademik.js');

		Template::set('toolbar_title', lang('tahunakademik_create') . ' tahunakademik');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of tahunakademik data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tahunakademik_invalid_id'), 'error');
			redirect(SITE_AREA .'/jurusan/tahunakademik');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tahunakademik.Jurusan.Edit');

			if ($this->save_tahunakademik('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tahunakademik_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tahunakademik');

				Template::set_message(lang('tahunakademik_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tahunakademik_edit_failure') . $this->tahunakademik_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tahunakademik.Jurusan.Delete');

			if ($this->tahunakademik_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('tahunakademik_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tahunakademik');

				Template::set_message(lang('tahunakademik_delete_success'), 'success');

				redirect(SITE_AREA .'/jurusan/tahunakademik');
			} else
			{
				Template::set_message(lang('tahunakademik_delete_failure') . $this->tahunakademik_model->error, 'error');
			}
		}
		Template::set('tahunakademik', $this->tahunakademik_model->find($id));
		Assets::add_module_js('tahunakademik', 'tahunakademik.js');

		Template::set('toolbar_title', lang('tahunakademik_edit') . ' tahunakademik');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_tahunakademik()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_tahunakademik($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['kode_tahun_akademik'] = $id;
		}

		
		$this->form_validation->set_rules('tahunakademik_tahun_akademik','Tahun Akademik','required|max_length[9]');
		$this->form_validation->set_rules('tahunakademik_semester','Semester','required');
		$this->form_validation->set_rules('tahunakademik_tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('tahunakademik_tanggal_berakhir','Tanggal Berakhir','required');
		$this->form_validation->set_rules('tahunakademik_status','Status','required');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['tahun_akademik']        = $this->input->post('tahunakademik_tahun_akademik');
		$data['semester']        = $this->input->post('tahunakademik_semester');
		$data['tanggal_mulai']        = $this->input->post('tahunakademik_tanggal_mulai') ? $this->input->post('tahunakademik_tanggal_mulai') : '0000-00-00';
		$data['tanggal_berakhir']        = $this->input->post('tahunakademik_tanggal_berakhir') ? $this->input->post('tahunakademik_tanggal_berakhir') : '0000-00-00';
		$data['status']        = $this->input->post('tahunakademik_status');

		if ($type == 'insert')
		{
			$id = $this->tahunakademik_model->insert($data);

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
			$return = $this->tahunakademik_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}