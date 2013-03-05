<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pembayaran_model extends BF_Model {

	protected $table		= "pembayaran";
	protected $key			= "kode_pembayaran";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
	protected $log_user = true;
    protected $created_by_field = 'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
    
    
    public function getData_pembayaran($nim='',$offset=0,$limit=0)
    {
        $sql =  "SELECT
                mahasiswa.nama_mahasiswa,
                kode_jenis_pembayaran.jenis_pembayaran,
                jenis_pembayaran.jumlah,
                tahun_akademik.tahun_akademik,
                tahun_akademik.semester,
                pembayaran.nim,
                pembayaran.kode_pembayaran,
                pembayaran.status_pembayaran
                FROM
                pembayaran
                INNER JOIN jenis_pembayaran ON pembayaran.kode_jenis_pembayaran = jenis_pembayaran.kode_jenis_pembayaran
                INNER JOIN kode_jenis_pembayaran ON jenis_pembayaran.jenis_pembayaran = kode_jenis_pembayaran.kode_jenis_pembayaran
                INNER JOIN mahasiswa ON mahasiswa.nim = pembayaran.nim
                INNER JOIN tahun_akademik ON tahun_akademik.kode_tahun_akademik = pembayaran.kode_tahun_akademik ";
        if($nim!='')
        {
            $sql .=" where mahasiswa.nim='$nim'";
        } 
        $sql .=' order by pembayaran.kode_pembayaran desc ';
        if($limit!=''){
            ($offset!='') ? $sql .=" limit $offset,$limit" : $sql .=" limit $limit" ;
        }
        $query=$this->db->query($sql);      
        return $query->result();
    }
    
    public function lookup($keyword){
		$this->db->select('nim, nama_mahasiswa')->from('mahasiswa');
        $this->db->like('nim',$keyword);
        $this->db->limit(20);
        $query = $this->db->get();    
        
        return $query->result();
	}
    
    public function get_jenis_pembayaran($nim=0,$kode_nama_jurusan=0)
    {
        $angkatan= '20'.substr($nim,0,2);        
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
                        kode_jenis_pembayaran.jenis_pembayaran ')->from('jenis_pembayaran');
     $this->db->join('kode_jenis_pembayaran', 'jenis_pembayaran.jenis_pembayaran = kode_jenis_pembayaran.kode_jenis_pembayaran','left');
     $this->db->join('nama_jurusan ', 'jenis_pembayaran.kode_nama_jurusan = nama_jurusan.kode_nama_jurusan','left');
     $this->db->where(array('jenis_pembayaran.angkatan'=>$angkatan,'jenis_pembayaran.kode_nama_jurusan'=>$kode_nama_jurusan));
     return $this->db->get()->result();
	}
    
    public function get_jumlah_pembayaran ($type=1,$kode_jenis_pembayaran=0)
    {
        $query=$this->db->query("select * from jenis_pembayaran where kode_jenis_pembayaran='$kode$kode_jenis_pembayaran'")->row();
        if($type==1)
        {
           $jumlah=$query->jumlah;
        } else if($type==2)
        {
            $jumlah=array();
            $jumlah['0']=$query->jumlah;
            $denda = ($query->prosentase_denda * $query->jumlah)/100;
            $jumlah['1']=$denda;
            
        }   
        return $jumlah;       
    }
    
    // menampilkan data mahasiswa dispensasi 
    public function getdata_dispensasi($kode_pembayaran=0)
    {
        $sql = "SELECT
                mahasiswa.nama_mahasiswa,
                jenis_pembayaran.jumlah,
                pembayaran.nim,
                dispensasi.tanggal_dispensasi,
                dispensasi.tanggal_jatuh_tempo,
                kode_jenis_pembayaran.jenis_pembayaran
                FROM
                pembayaran
                INNER JOIN jenis_pembayaran ON pembayaran.kode_jenis_pembayaran = jenis_pembayaran.kode_jenis_pembayaran
                INNER JOIN kode_jenis_pembayaran ON jenis_pembayaran.jenis_pembayaran = kode_jenis_pembayaran.kode_jenis_pembayaran
                INNER JOIN mahasiswa ON mahasiswa.nim = pembayaran.nim
                INNER JOIN dispensasi ON dispensasi.kode_pembayaran = pembayaran.kode_pembayaran 
                where dispensasi.kode_pembayaran=$kode_pembayaran";
       return  $query = $this->db->query($sql)->row();
    }
}
