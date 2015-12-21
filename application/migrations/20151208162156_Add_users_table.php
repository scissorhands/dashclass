<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users_table extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(
			array(
				"id" => array(
					"type" => "INT",
					"constraint" => "9",
					"auto_increment" => true,
					"unsigned" => true
				),
				"name" => array(
					"type" => "VARCHAR",
					"constraint" => "120",
					"null" => false
				),
				"last_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
			)
		)->add_key( "id", true )
		->add_key( "name" )
		->create_table("users");
	}

	public function down() {
		// TODO
		$this->dbforge->drop_table("users");
	}

}

/* End of file 20151208162156_Add_users_table.php */
/* Location: ./application/migrations/20151208162156_Add_users_table.php */