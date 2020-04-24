<?php

class Profile extends CI_Contorller{
	public function cekprofil()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('cekprofil');
		$this->load->view('templates/footer');
	}

}