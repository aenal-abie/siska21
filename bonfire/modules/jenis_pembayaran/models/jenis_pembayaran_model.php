<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jenis_pembayaran_model extends BF_Model {

	protected $table		= "jenis_pembayaran";
	protected $key			= "kode_jenis_pembayaran";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user = true;
    protected $created_by_field = 'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
    
     public function get_nama_jurusan()
    {
        $this->table='nama_jurusan';
        return $this->find_all();
    }
    
    public function get_kode_jenis_pembayaran()
    {
        $query = $this->db->query('select * from kode_jenis_pembayaran');
        return $query->result();
    }
    
    public function find_all_to()
    {
     $this->db->select('nama_jurusan.nama_jurusan,
                        jenis_pembayaran.kode_jenis_pembayaran,
                        jenis_pembayaran.angkatan,
                        kode_jenis_pembayaran.jenis_pembayaran,
                        jenis_pembayaran.kode_nama_jurusan,
                        jenis_pembayaran.jumlah,
                        jenis_pembayaran.prosentase_denda,
                        jenis_pembayaran.kode_pengguna_add,
                        jenis_pembayaran.tanggal_add,
                        jenis_pembayaran.kode_pengguna_edit,
                        jenis_pembayaran.tanggal_edit,
                        kode_jenis_pembayaran.jenis_pembayaran ')->from($this->table);
     $this->db->join('kode_jenis_pembayaran', 'jenis_pembayaran.jenis_pembayaran = kode_jenis_pembayaran.kode_jenis_pembayaran','left');
     $this->db->join('nama_jurusan ', 'jenis_pembayaran.kode_nama_jurusan = nama_jurusan.kode_nama_jurusan','left');
     return $this->db->get()->result();
    } 
    
}
