<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tahun_akademik_model extends BF_Model {

	protected $table		= "tahun_akademik";
	protected $key			= "kode_tahun_akademik";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
}
