<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_dosen_model extends BF_Model {

	protected $table		= "dosen";
	protected $key			= "kode_dosen";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
	
	public function update_foto($id=NULL, $data=NULL)
	{
		$this->db->where($this->key, $id);
		if ($this->db->update($this->table, $data))
		{
			return TRUE;
		}

		return FALSE;
	}
	
	public function get_data_dosen($limit, $offset)
	{
		return $this->db->get($this->table, $limit, $offset)->result();	
	}
}
