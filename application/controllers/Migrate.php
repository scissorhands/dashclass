<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

	public $migrationList;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
		$this->migrationList = $this->migration->find_migrations();
	}

	public function index()
	{
		exit( json_encode( $this->migrationList ) );
	}

	public function run_by_version( $version = null )
	{
		if( $version === null ){ exit("version needed"); }
		if ($this->migration->version($version) === FALSE)
		{
			show_error($this->migration->error_string());
		} else {
			$list = $this->migrationList;
			if(isset($list[$version])){
				$data = array(
					"version" => date("Y-m-d H:i:s", strtotime($version)),
					"file" => $list[$version]
				);
				exit( json_encode( $data ) );
			}
		}
	}

}

/* End of file Migrate.php */
/* Location: ./application/controllers/Migrate.php */