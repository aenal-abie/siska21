<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_nama_kurikulum extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_nama_kurikulum' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'nama_kurikulum' => array(
				'type' => 'CHAR',
				'constraint' => 4,
				
			),
			'kode_nama_jurusan' => array(
				'type' => 'SMALLINT',
				'constraint' => 1,
				
			),
			'status_kurikulum' => array(
				'type' => 'ENUM',
				'constraint' => '\'A\',\'N\'',
				
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
		$this->dbforge->add_key('kode_nama_kurikulum', true);
		$this->dbforge->create_table('nama_kurikulum');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('nama_kurikulum');

	}

	//--------------------------------------------------------------------

}