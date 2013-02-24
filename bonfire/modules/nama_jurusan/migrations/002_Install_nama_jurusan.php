<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_nama_jurusan extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_nama_jurusan' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_jurusan' => array(
				'type' => 'CHAR',
				'constraint' => 2,
				
			),
			'kode_jenjang' => array(
				'type' => 'CHAR',
				'constraint' => 1,
				
			),
			'nama_jurusan' => array(
				'type' => 'VARCHAR',
				'constraint' => 80,
				
			),
			'singkatan_jurusan' => array(
				'type' => 'CHAR',
				'constraint' => 4,
				
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
		$this->dbforge->add_key('kode_nama_jurusan', true);
		$this->dbforge->create_table('nama_jurusan');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('nama_jurusan');

	}

	//--------------------------------------------------------------------

}