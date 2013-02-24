<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nama_kurikulum_model extends BF_Model {

	protected $table		= "nama_kurikulum";
	protected $key			= "kode_nama_kurikulum";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
	 protected $log_user = TRUE;
	protected $created_by_field = 'kode_pengguna_add';
	protected $modified_by_field = 'kode_pengguna_edit';
    
    public function select_nama_jurusan()
    {
        $this->table='nama_jurusan';
        return $this->find_all();
    }
    
    public function select_all()
    {
        $this->db->select(' nama_kurikulum.kode_nama_kurikulum,
                            nama_kurikulum.nama_kurikulum,
                            nama_kurikulum.kode_nama_jurusan,
                            nama_jurusan.nama_jurusan,
                            nama_kurikulum.status_kurikulum,
                            nama_kurikulum.tanggal_add,
                            nama_kurikulum.tanggal_edit');
		$this->db->from($this->table);
		$this->db->join('nama_jurusan', 'nama_jurusan.kode_nama_jurusan = nama_kurikulum.kode_nama_jurusan');
		return $this->db->get()->result();
    }
}
