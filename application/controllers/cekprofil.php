<?php

class Cekprofil extends CI_Controller{
	public function index(){
			$this->form_validation->run() == false)
			$this->load->view('templates/header');
			$this->load->view('cekprofil');
			$this->load->view('templates/footer');
	}
}