<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tes_lagi_model extends BF_Model {

	protected $table		= "tes_lagi";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    
    
    public function select_ta()
    {
        $this->table='tahun_akademik';
        return $this->find_all();
    }
}
