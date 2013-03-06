<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_penjadwalan_model extends BF_Model {

	protected $table		= "penjadwalan";
	protected $key			= "kode_penjadwalan";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user = true;
    protected $created_by_field = 'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
    
    
    function get_data_penjadwalan()
    {
        $sql ="SELECT
            penjadwalan.*,
            matakuliah.nama_matakuliah,
            matakuliah.kode_matakuliah,
            matakuliah.sks_teori,
            matakuliah.sks_praktek,
            matakuliah.sks_praktikum,
            dosen.nama_dosen,
            ruang.nama_ruang
            FROM
            penjadwalan
            INNER JOIN matakuliah ON penjadwalan.kode_matakuliah = matakuliah.kode_matakuliah
            INNER JOIN dosen ON penjadwalan.kode_dosen = dosen.kode_dosen
            INNER JOIN ruang ON penjadwalan.kode_ruang = ruang.kode_ruang";
        $data = $this->db->query($sql);
        return $data->result();

    }
    
    function get_tahun_akademik()
    {
        $this->table='tahun_akademik';
        return $this->find_all();
    }
    
    function get_ruang()
    {
        $this->table='ruang';
        return $this->find_all();
    }
    
    public function lookup_mk($jenjang='S',$keyword='')
    {
		$data= $this->db->query("SELECT *
                            from matakuliah where nama_matakuliah LIKE '%$keyword%' 
                    and SUBSTR(kode_matakuliah FROM 2 FOR 1)='$jenjang'");    
        return $data->result();
        
	}
    
    public function lookup_dosen($keyword='')
    {
		$data= $this->db->query("SELECT *
                            from dosen where nama_dosen LIKE '%$keyword%'");    
        return $data->result();
        
	}
}
