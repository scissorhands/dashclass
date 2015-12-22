<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("template/loader",
			array(
			"title" => "Home Page",
			"content" => "home/content",
			)
		);
	}

	public function about()
	{
		echo "about";
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */