<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('explore/index');
		$this->load->view('template/footer');
	}
}
