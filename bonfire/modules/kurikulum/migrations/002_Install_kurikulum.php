<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_kurikulum extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_kurikulum' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_nama_kurikulum' => array(
				'type' => 'SMALLINT',
				'constraint' => 1,
				
			),
			'kode_matakuliah' => array(
				'type' => 'CHAR',
				'constraint' => 10,
				
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
		$this->dbforge->add_key('kode_kurikulum', true);
		$this->dbforge->create_table('kurikulum');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('kurikulum');

	}

	//--------------------------------------------------------------------

}