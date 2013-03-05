<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_dosen extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_dosen' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'nik' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
			),
			'nidn' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
			),
			'nama_dosen' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'tempat_lahir' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'tanggal_lahir' => array(
				'type' => 'DATE',
				'default' => '0000-00-00',
				
			),
			'jenis_kelamin' => array(
				'type' => 'ENUM',
				'constraint' => "'L','P'",
				
			),
			'agama' => array(
				'type' => 'ENUM',
				'constraint' => "'Islam','Hindu','Kristen','Katolik','Budha','Konghucu'",
				
			),
			'alamat' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'kota' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'propinsi' => array(
				'type' => 'ENUM',
				'constraint' => "'Aceh','Sumatera Utara','Sumatera Barat','Riau','Jambi','Sumatera Selatan','Bengkulu','Lampung','Kepulauan Bangka Belitung','Kepulauan Riau','Daerah Khusus Ibukota Jakarta','Jawa Barat','Jawa Tengah','Daerah Istimewa Yogyakarta','Jawa Timur','Banten','Bali','Nusa Tenggara Barat','Nusa Tenggara Timur','Kalimantan Barat','Kalimantan Tengah','Kalimantan Selatan','Kalimantan Timur','Sulawesi Utara','Sulawesi Tengah','Sulawesi Selatan','Sulawesi Tenggara','Gorontalo','Sulawesi Barat','Maluku','Maluku Utara','Papua Barat','Papua'",
				
			),
			'kodepos' => array(
				'type' => 'VARCHAR',
				'constraint' => 5,
				
			),
			'telepon' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'website' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'kepakaran' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'peminatan' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'foto' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
			),
			'status' => array(
				'type' => 'ENUM',
				'constraint' => "'Tetap','Luar'",
				
			),
			'status_perwalian' => array(
				'type' => 'ENUM',
				'constraint' => "'A','N'",
				
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
		$this->dbforge->add_key('kode_dosen', true);
		$this->dbforge->create_table('dosen');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('dosen');

	}

	//--------------------------------------------------------------------

}