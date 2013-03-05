<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_detail_kalender_akademik extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_detail_kalender_akademik' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'kode_tahun_akademik' => array(
				'type' => 'CHAR',
				'constraint' => 2,
				
			),
			'deskripsi_detail_kalender_akademik' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				
			),
			'tanggal_mulai' => array(
				'type' => 'DATE',
				'default' => '0000-00-00',
				
			),
			'tanggal_berakhir' => array(
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
		$this->dbforge->add_key('kode_detail_kalender_akademik', true);
		$this->dbforge->create_table('detail_kalender_akademik');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('detail_kalender_akademik');

	}

	//--------------------------------------------------------------------

}