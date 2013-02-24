<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kompetensi_model extends BF_Model {

	protected $table		= "kompetensi";
	protected $key			= "kode_kompetensi";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    
    protected $log_user = true;
    protected $created_by_field = 'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
    
    public function get_kompetensi()
    {
        $this->db->select('nama_jurusan.nama_jurusan,
                            kompetensi.kode_kompetensi,
                            kompetensi.kode_nama_jurusan,
                            kompetensi.nama_kompetensi,
                            kompetensi.kode_pengguna_add,
                            kompetensi.tanggal_add,
                            kompetensi.kode_pengguna_edit,
                            kompetensi.tanggal_edit')
        ->from($this->table)
        ->join('nama_jurusan','nama_jurusan.kode_nama_jurusan = kompetensi.kode_nama_jurusan');
        return $this->db->get()->result();
        
    }
    public function get_nama_jurusan()
    {
        $this->table='nama_jurusan';
        return $this->find_all();   
        $this->table='kompetensi' ;
    }
}
