<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Detail_kalender_akademik_model extends BF_Model {

	protected $table		= "detail_kalender_akademik";
	protected $key			= "kode_detail_kalender_akademik";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
	
	/**
	 * Mendapatkan semua data kalender_akademik
	*/
	function get_kalender_akademik()
	{		
		$this->db->order_by('kode_kalender_akademik');
		return $this->db->get('kalender_akademik');
	}
    function get_detail_kalender_akademik($kode_tahun_akademik=1)
    {
        $sql ="SELECT
                
                tahun_akademik.tahun_akademik,
                tahun_akademik.semester,
                detail_kalender_akademik.tanggal_mulai,
                detail_kalender_akademik.tanggal_berakhir,
                detail_kalender_akademik.kode_detail_kalender_akademik,
                kalender_akademik.deskripsi_kalender_akademik,
                detail_kalender_akademik.tanggal_add,
                detail_kalender_akademik.tanggal_edit
                FROM
                tahun_akademik
                INNER JOIN detail_kalender_akademik ON detail_kalender_akademik.kode_tahun_akademik = tahun_akademik.kode_tahun_akademik
                INNER JOIN kalender_akademik ON detail_kalender_akademik.kode_kalender_akademik = kalender_akademik.kode_kalender_akademik
                where detail_kalender_akademik.kode_tahun_akademik=$kode_tahun_akademik";
        $data = $this->db->query($sql);
        return $data->result();
    }
}
