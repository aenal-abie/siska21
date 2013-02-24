<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Berisi fungsi-fungsi rutin yang dilakukan dalam data siska
 * */
class Siska {
    // data nama jurusan berdasarkan nim mahasiswa
     private $nim;
     private $jenjang ;
     private $jurusan;
     private $kode_nama_jurusan;
     private $nama_jurusan;
     private $singkatan_jurusan;
     
     // data tahun akademik
     private $kode_tahun_akademik;
     private $tahun_akademik;
     private $semester;   
     private $semester_huruf;
     
    
    /**
     *  type = "TA=Tahun Akademik", "NJN=Nama Jurusan berdasarkan NIM"
     */
    
    public function __construct($type="TA")
    {
        $this->ci =& get_instance();
        if($type=="TA")
        {
            $this->set_tahun_akademik();    
        } 
    }
    
    
    /**
     * begin NJN
     */
     
     public function getJenjang()
     {
        return $this->jenjang;        
     }
     
     public function getJurusan()
     {
        return $this->jurusan;
     }
     
     public function getNamajurusan()
     {
        return $this->nama_jurusan;
     }
     
     public function getKode_nama_Jurusan()
     {
        return $this->kode_nama_jurusan;
     }
     
     public function setNim($nim='')
     {
        $this->nim = $nim;
     }
     
     public function setNama_Jurusan()
     {
        if($this->nim!='')
        {
            $kode_jenjang=substr($this->nim,4,1);
            $kode_jurusan=substr($this->nim,2,2);
            $query = $this->ci->db->query("select * from jenjang where kode_jenjang='$kode_jenjang'")->row();
            $this->jenjang=$query->nama_jenjang;
            $query = $this->ci->db->query("select * from jurusan where kode_jurusan='$kode_jurusan'")->row();
            $this->jurusan=$query->nama_jurusan;
            $query = $this->ci->db->query("select * from nama_jurusan where kode_jurusan='$kode_jurusan' and kode_jenjang ='$kode_jenjang'")->row();
            $this->kode_nama_jurusan = $query->kode_nama_jurusan;
            $this->nama_jurusan=$query->nama_jurusan;
            $this->singkatan_jurusan= $query->singkatan_jurusan;
        } 
     }
     
     /**
     * begin TA
     */
    
    
    /**
     * begin TA
     */
    public function get_kode_tahun_akademik()
    {
        return $this->kode_tahun_akademik;
    }
    
    public function get_tahun_akademik()
    {
        return $this->tahun_akademik;
    }
    
    public function get_semester()
    {
        return $this->semester;
    }
    
     public function get_semester_huruf()
    {
        return $this->semester_huruf;
    }
    
    
    private function set_tahun_akademik()
    {
            $query = $this->ci->db->query("SELECT * FROM tahun_akademik WHERE status='A'")->row();
            $this->kode_tahun_akademik=$query->kode_tahun_akademik;
            $this->semester=$query->semester;
            if($this->semester=='0')
                $this->semester_huruf='Genap';
            else 
                $this->semester_huruf='Ganjil';
            $this->tahun_akademik=$query->tahun_akademik;
    }
    
    /**
     * end TA
     */
        
}
