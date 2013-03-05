<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_predikat_kelulusan2 extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_predikat_kelulusan' => array(
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
		$this->dbforge->add_key('kode_predikat_kelulusan', true);
		$this->dbforge->create_table('predikat_kelulusan2');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('predikat_kelulusan2');

	}

	//--------------------------------------------------------------------

}