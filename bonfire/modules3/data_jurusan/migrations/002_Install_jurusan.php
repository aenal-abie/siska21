<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_jurusan extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_jurusan' => array(
				'type' => 'CHAR',
				'constraint' => 2,
				
			),
			'nama_jurusan' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
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
		$this->dbforge->create_table('jurusan');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('jurusan');

	}

	//--------------------------------------------------------------------

}