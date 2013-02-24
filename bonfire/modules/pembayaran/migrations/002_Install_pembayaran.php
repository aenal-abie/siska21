<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_pembayaran extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_pembayaran' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_tahun_akademik' => array(
				'type' => 'SMALLINT',
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
		$this->dbforge->add_key('kode_pembayaran', true);
		$this->dbforge->create_table('pembayaran');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('pembayaran');

	}

	//--------------------------------------------------------------------

}