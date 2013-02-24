<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nama_jurusan_model extends BF_Model {

	protected $table		= "nama_jurusan";
	protected $key			= "kode_nama_jurusan";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
     protected $log_user = TRUE;
	protected $created_by_field = 'kode_pengguna_add';
	protected $modified_by_field = 'kode_pengguna_edit';
    
    
     public function select_jurusan()
    {
        $this->table='jurusan';
        return $this->find_all();
    }
    
    public function select_jenjang()
    {
        $this->table='jenjang';
        return $this->find_all();
    }
    
    function get_all ()
    {
        $this->db->select(" nama_jurusan.kode_nama_jurusan,
                            nama_jurusan.kode_jurusan,
                            nama_jurusan.kode_jenjang,
                            nama_jurusan.nama_jurusan,
                            nama_jurusan.singkatan_jurusan,
                            nama_jurusan.kode_pengguna_add,
                            nama_jurusan.tanggal_add,
                            nama_jurusan.kode_pengguna_edit,
                            nama_jurusan.tanggal_edit,
                            jenjang.nama_jenjang as jenjang,
                            jurusan.nama_jurusan as jurusan");
        $this->db->from($this->table);
		$this->db->join('jenjang', 'jenjang.kode_jenjang = nama_jurusan.kode_jenjang');
        $this->db->join('jurusan', 'jurusan.kode_jurusan= nama_jurusan.kode_jurusan');
		return $this->db->get()->result();
        
    }

}
