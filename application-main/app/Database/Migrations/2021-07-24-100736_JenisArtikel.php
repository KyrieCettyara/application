<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisArtikel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jenis_artikel'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_jenis_artikel'       => [
				'type'       => 'VARCHAR',
				'constraint' => '32',
			],
			'created_at' => [
				'type'		=> 'DATETIME',
				'null'		=>	TRUE
			]
		]);
		$this->forge->addKey('id_jenis_artikel', true);
		$this->forge->createTable('jenis_artikel');
	}

	public function down()
	{
		$this->forge->dropTable('jenis_artikel');
	}
}
