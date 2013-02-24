<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jenjang_model extends BF_Model {

	protected $table		= "jenjang";
	protected $key			= "kode_jenjang";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user     = TRUE;
    protected $created_by_field  =   'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
    
    public function update_where($field=NULL, $value=NULL, $data=NULL)
	{
		if (empty($field) ||  !is_array($data))
		{
			$this->error = $this->lang->line('bf_model_no_data');
			$this->logit('['. get_class($this) .': '. __METHOD__ .'] '. $this->lang->line('bf_model_no_data'));
			return FALSE;
		}

		// Add the modified field
		if ($this->set_modified === TRUE && !array_key_exists($this->modified_field, $data))
		{
			$data[$this->modified_field] = $this->set_date();
		}

		if ($this->set_modified === TRUE && $this->log_user === TRUE && !array_key_exists($this->modified_by_field, $data))
		{
			$data[$this->modified_by_field] = $this->auth->user_id();
		}

		return $this->db->update($this->table, $data, array($field => $value));

	}
}
