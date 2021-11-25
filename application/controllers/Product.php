<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		if ($_GET['id']) {
			$id = $_GET['id'];
			$query = $this->db->query("SELECT * FROM mockup WHERE id = '$id'")->result();
			$detail = json_decode(json_encode($query), True);
			$_SESSION['detail_product'] = $detail;

			$this->load->view('template/header');
			$this->load->view('product/index');
			$this->load->view('template/footer');
		}else{
			echo "404 Not Found";
		}

	}
}
