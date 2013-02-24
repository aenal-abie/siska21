<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Detail_kalender_akademik_model extends BF_Model {

	protected $table		= "detail_kalender_akademik";
	protected $key			= "kode_detail_kalender_akademik";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
	
	/**
	 * Mendapatkan semua data kalender_akademik
	*/
	function get_kalender_akademik()
	{		
		$this->db->order_by('kode_kalender_akademik');
		return $this->db->get('kalender_akademik');
	}
}
