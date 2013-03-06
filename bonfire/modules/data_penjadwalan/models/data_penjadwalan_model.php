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
