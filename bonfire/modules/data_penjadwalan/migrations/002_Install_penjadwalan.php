<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_penjadwalan extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_penjadwalan' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_tahun_akademik' => array(
				'type' => 'SMALLINT',
				'constraint' => 2,
				
			),
			'kode_matakuliah' => array(
				'type' => 'CHAR',
				'constraint' => 10,
				
			),
			'kode_dosen' => array(
				'type' => 'INT',
				'constraint' => 2,
				
			),
			'kode_ruang' => array(
				'type' => 'SMALLINT',
				'constraint' => 2,
				
			),
			'kelompok' => array(
				'type' => 'CHAR',
				'constraint' => 2,
				
			),
			'jam_mulai' => array(
				'type' => 'CHAR',
				'constraint' => 2,
				
			),
			'jam_berakhir' => array(
				'type' => 'CHAR',
				'constraint' => 2,
				
			),
			'status_perkuliahan' => array(
				'type' => 'ENUM',
				'constraint' => '\'R\',\'K\'',
				
			),
			'tanggal_add' => array(
				'type' => 'datetime',
				'default' => '0000-00-00 00:00:00',
			),
			'tanggal_edit' => array(
				'type' => 'datetime',
				'default' => '0000-00-00 00:00:00',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('kode_penjadwalan', true);
		$this->dbforge->create_table('penjadwalan');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('penjadwalan');

	}

	//--------------------------------------------------------------------

}