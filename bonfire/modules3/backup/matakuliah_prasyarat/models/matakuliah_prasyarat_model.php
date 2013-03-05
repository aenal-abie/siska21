<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Matakuliah_prasyarat_model extends BF_Model {

	protected $table		= "matakuliah_prasyarat";
	protected $key			= "kode_matakuliah_prasyarat";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
}
