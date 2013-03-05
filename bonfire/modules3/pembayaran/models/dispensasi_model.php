<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dispensasi_model extends BF_Model {

	protected $table		= "dispensasi";
	protected $key			= "kode_dispensasi";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user     = TRUE;
    protected $created_by_field  =   'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
   
    
}