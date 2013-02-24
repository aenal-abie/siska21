<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_matakuliah extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_matakuliah' => array(
				'type' => 'CHAR',
				'constraint' => 10,
				
			),
			'nama_matakuliah' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'sks_teori' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				
			),
			'sks_praktek' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				
			),
			'sks_praktikum' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				
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
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('matakuliah');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('matakuliah');

	}

	//--------------------------------------------------------------------

}