<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tahunakademik_model extends BF_Model {

	protected $table		= "tahun_akademik";
	protected $key			= "kode_tahun_akademik";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user = TRUE;
	protected $created_by_field = 'kode_pengguna_add';
	protected $modified_by_field = 'kode_pengguna_edit';
    
   public function get_jurusan()
   {
        $this->table('tahun_akademik');      
        return  $this->find_all();
   }
}
