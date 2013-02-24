<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kurikulum_model extends BF_Model {

	protected $table		= "kurikulum";
	protected $key			= "kode_kurikulum";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
    protected $modified_field = "tanggal_edit";
    protected $log_user = TRUE;
	protected $created_by_field = 'kode_pengguna_add';
	protected $modified_by_field = 'kode_pengguna_edit';
	
    
    public function select_nama_kurikulum()
    {
        $this->db->select(' nama_kurikulum.kode_nama_kurikulum,
                            nama_kurikulum.nama_kurikulum,
                            nama_kurikulum.kode_nama_jurusan,
                            nama_jurusan.nama_jurusan,
                            nama_kurikulum.status_kurikulum,
                            nama_kurikulum.tanggal_add,
                            nama_kurikulum.tanggal_edit');
		$this->db->from('nama_kurikulum');
		$this->db->join('nama_jurusan', 'nama_jurusan.kode_nama_jurusan = nama_kurikulum.kode_nama_jurusan');
        $this->db->where('nama_kurikulum.status_kurikulum','A');
		return $this->db->get()->result();
    }
    
    public function select_mk()
    {
        $this->table='matakuliah';
        return $this->find_all();
    }
    
    public function select_all($kd_nama_kurikulum='')
    {
       $this->db->select('  matakuliah.nama_matakuliah,
                            kurikulum.kode_kurikulum,
                            kurikulum.kode_nama_kurikulum,
                            matakuliah.kode_matakuliah,
                            kurikulum.tanggal_add,
                            kurikulum.tanggal_edit');
		$this->db->from($this->table);
		$this->db->join('matakuliah', 'kurikulum.kode_matakuliah = matakuliah.kode_matakuliah');
        $this->db->where('kurikulum.kode_nama_kurikulum',$kd_nama_kurikulum);
		return $this->db->get()->result();         
    }
}
