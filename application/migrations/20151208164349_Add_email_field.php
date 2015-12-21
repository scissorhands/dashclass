<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_email_field extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$fields = array(
			"email" => array(
				"type" => "VARCHAR",
				"constraint" => "120",
				"after" => "name"
			)
		);
		$this->dbforge->add_column("users", $fields);
	}

	public function down() {
		$this->dbforge->drop_column( "users", "email" );
	}

}

/* End of file 20151208164349_Add_email_field.php */
/* Location: ./application/migrations/20151208164349_Add_email_field.php */