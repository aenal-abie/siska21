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
    
     public function select_nama_kurikulum()
    {
        $this->db->select(' nama_kurikulum.kode_nama_kurikulum,
                            nama_kurikulum.nama_kurikulum,
                            nama_kurikulum.kode_nama_jurusan,
                            nama_jurusan.nama_jurusan,
                            nama_kurikulum.status_kurikulum,
                            nama_kurikulum.tanggal_add,
                            nama_kurikulum.tanggal_edit');
		$this->db->from("nama_kurikulum");
		$this->db->join('nama_jurusan', 'nama_jurusan.kode_nama_jurusan = nama_kurikulum.kode_nama_jurusan');
		return $this->db->get()->result();
    }
    
    public function get_mk($kd_nama_kurikulum=0){
        $this->db->select(' kurikulum.kode_kurikulum,
                            matakuliah.nama_matakuliah,
                            matakuliah.kode_matakuliah');
        $this->db->from("kurikulum ");		                            
        $this->db->join('matakuliah',' kurikulum.kode_matakuliah = matakuliah.kode_matakuliah');
        $this->db->where('kode_nama_kurikulum',$kd_nama_kurikulum);
        return $this->db->get();
    }
    
     public function get_prasyarat($mk_diambil=0,$kd_nama_kurikulum=0){
        $this->db->select(' matakuliah_prasyarat.kode_matakuliah_prasyarat,
                            matakuliah.kode_matakuliah,
                            matakuliah.nama_matakuliah,
                            matakuliah.sks_teori,
                            matakuliah.sks_praktek,
                            matakuliah.sks_praktikum');
        $this->db->from("matakuliah_prasyarat");		                            
        $this->db->join('kurikulum','  matakuliah_prasyarat.matakuliah_prasyarat = kurikulum.kode_kurikulum');
        $this->db->join('matakuliah','  kurikulum.kode_matakuliah = matakuliah.kode_matakuliah');
        $this->db->where('matakuliah_prasyarat.matakuliah_yg_diambil',$mk_diambil);
        $this->db->where('matakuliah_prasyarat.kode_nama_kurikulum',$kd_nama_kurikulum);
        return $this->db->get();
    }
}
