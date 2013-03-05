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
			'telepon' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
			),
			'jenis_kelamin' => array(
				'type' => 'ENUM',
				'constraint' => "'L','P'",
				
			),
			'agama' => array(
				'type' => 'ENUM',
				'constraint' => "'Islam','Hindu','Kristen','Katolik','Budha','Konghucu'",
				
			),
			'golongan_darah' => array(
				'type' => 'ENUM',
				'constraint' => "'O','A','AB','B','-'",
				
			),
			'kewarganegaraan' => array(
				'type' => 'ENUM',
				'constraint' => "'WNI','WNA'",
				
			),
			'nama_instansi' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'nama_ayah' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'agama_ayah' => array(
				'type' => 'ENUM',
				'constraint' => "'Islam','Hindu','Kristen','Katolik','Budha','Konghucu'",
				
			),
			'pekerjaan_ayah' => array(
				'type' => 'ENUM',
				'constraint' => "'Pegawai Negeri Sipil','Pegawai Swasta','Wiraswasta','TNI/Polri','Dosen','Guru','Petani','Rumah Tangga','Lainnya'",
				
			),
			'nama_ibu' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'agama_ibu' => array(
				'type' => 'ENUM',
				'constraint' => "'Islam','Hindu','Kristen','Katolik','Budha','Konghucu'",
				
			),
			'pekerjaan_ibu' => array(
				'type' => 'ENUM',
				'constraint' => "'Pegawai Negeri Sipil','Pegawai Swasta','Wiraswasta','TNI/Polri','Dosen','Guru','Petani','Rumah Tangga','Lainnya'",
				
			),
			'alamat_orangtua' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				
			),
			'kota_orangtua' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'propinsi_orangtua' => array(
				'type' => 'ENUM',
				'constraint' => "'Aceh','Sumatera Utara','Sumatera Barat','Riau','Jambi','Sumatera Selatan','Bengkulu','Lampung','Kepulauan Bangka Belitung','Kepulauan Riau','Daerah Khusus Ibukota Jakarta','Jawa Barat','Jawa Tengah','Daerah Istimewa Yogyakarta','Jawa Timur','Banten','Bali','Nusa Tenggara Barat','Nusa Tenggara Timur','Kalimantan Barat','Kalimantan Tengah','Kalimantan Selatan','Kalimantan Timur','Sulawesi Utara','Sulawesi Tengah','Sulawesi Selatan','Sulawesi Tenggara','Gorontalo','Sulawesi Barat','Maluku','Maluku Utara','Papua Barat','Papua'",
				
			),
			'telepon_orangtua' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				
			),
			'foto' => array(
				'type' => 'CHAR',
				'constraint' => 16,
				
			),
			'sandi' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'status' => array(
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