<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_mahasiswa extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'nim' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'npm' => array(
				'type' => 'CHAR',
				'constraint' => 23,
				
			),
			'nomor_pendaftaran' => array(
				'type' => 'CHAR',
				'constraint' => 12,
				
			),
			'nomor_pendaftaran_ulang' => array(
				'type' => 'CHAR',
				'constraint' => 12,
				
			),
			'nama_mahasiswa' => array(
				'type' => 'VARCHAR',
				'constraint' => 125,
				
			),
			'tempat_lahir' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'tanggal_lahir' => array(
				'type' => 'DATE',
				'default' => '0000-00-00',
				
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
		$this->dbforge->add_key('nim', true);
		$this->dbforge->create_table('mahasiswa');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('mahasiswa');

	}

	//--------------------------------------------------------------------

}