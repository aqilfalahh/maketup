<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$mockup = $this->db->query("SELECT * FROM mockup")->result();
		$mockup = json_decode(json_encode($mockup), True);
		$_SESSION['mockup'] = $mockup;

		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}
