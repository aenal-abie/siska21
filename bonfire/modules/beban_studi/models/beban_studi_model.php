<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Beban_studi_model extends BF_Model {

	protected $table		= "beban_studi";
	protected $key			= "kode_beban_studi";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user = true;
    protected $created_by_field = 'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
    
    
    public function select_nama_jurusan()
    {
        $this->table='nama_jurusan';
        return $this->find_all();        
    }
    
    public  function select_all()
    {
        
        $this->db->select(" nama_jurusan.nama_jurusan,
                            beban_studi.kode_beban_studi,
                            beban_studi.kode_nama_jurusan,
                            beban_studi.jumlah_sks,
                            beban_studi.tanggal_add,
                            beban_studi.tanggal_edit")
        ->from($this->table)
        ->join('nama_jurusan','beban_studi.kode_nama_jurusan = nama_jurusan.kode_nama_jurusan');
        return $this->db->get()->result();
    }
}
