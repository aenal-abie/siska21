<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_sistem_penilaian extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_sistem_penilaian' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'nilai_minimum' => array(
				'type' => 'DECIMAL',
				'constraint' => 5,
				
			),
			'nilai_maksimum' => array(
				'type' => 'DECIMAL',
				'constraint' => 5,
				
			),
			'grade' => array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				
			),
			'bobot_nilai' => array(
				'type' => 'DECIMAL',
				'constraint' => 3,
				
			),
			'kategori' => array(
				'type' => 'ENUM',
				'constraint' => '\'Sempurna\',\'Baik\',\'Cukup\',\'Kurang\'',
				
			),
			'keterangan' => array(
				'type' => 'ENUM',
				'constraint' => '\'Lulus\',\'Tidak Lulus\',\'Gagal\'',
				
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
		$this->dbforge->add_key('kode_sistem_penilaian', true);
		$this->dbforge->create_table('sistem_penilaian');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('sistem_penilaian');

	}

	//--------------------------------------------------------------------

}