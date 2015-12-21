<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_last_name_field extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$fields = array(
			"last_name" => array(
				"type" => "VARCHAR",
				"constraint" => "120",
				'after' => 'name'
			)
		);
		$this->dbforge->add_column("users", $fields);

		$user = array(
			"name" => "Francisco",
			"last_name" => "Reado",
			"email" => "fc@da.sh"		
		);
		$this->db->insert("users", $user);
	}

	public function down() {
		$this->dbforge->drop_column( "users", "last_name" );
		$this->db->where( "email", "fc@da.sh" )->delete("users");	
	}

}

/* End of file 20151208165856_Add_last_name_field.php */
/* Location: ./application/migrations/20151208165856_Add_last_name_field.php */