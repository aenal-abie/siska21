<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kalender_akademik_model extends BF_Model {

	protected $table		= "kalender_akademik";
	protected $key			= "kode_kalender_akademik";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
	protected $log_user = true;
  protected $created_by_field = 'kode_pengguna_add';
  protected $modified_by_field = 'kode_pengguna_edit';	
  
  /**
	 * Validasi agar tidak ada kalender_akademik dengan kode ganda
	*/
	function valid_kode_kalender_akademik($kode_kalender_akademik)
	{
		$query = $this->db->get_where($this->table, array('kode_kalender_akademik' => $kode_kalender_akademik));
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
