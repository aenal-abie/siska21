<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_ruang extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_ruang' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'jenis_ruang' => array(
				'type' => 'ENUM',
				'constraint' => '\'K\',\'L\'',
				
			),
			'nama_ruang' => array(
				'type' => 'VARCHAR',
				'constraint' => 30,
				
			),
			'daya_tampung' => array(
				'type' => 'DECIMAL',
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
		$this->dbforge->add_key('kode_ruang', true);
		$this->dbforge->create_table('ruang');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('ruang');

	}

	//--------------------------------------------------------------------

}