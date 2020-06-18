<?php

class Changeusername extends CI_Controller{
	public function index(){
			$this->form_validation->run() == false)
			$this->load->view('templates/header');
			$this->load->view('changeusername');
			$this->load->view('templates/footer');
		$this->form_validation->set_rules('current_username', 'Current Username', 'required', [
			'required'	=> 'Current username harus diisi!'
		]);
		$this->form_validation->set_rules('new_username1', 'New Username', 'required|trim|matches[new_username2]', [
			'required'	=> 'New usernmae harus diisi!'
		]);
		$this->form_validation->set_rules('new_username2', 'Confirm New username', 'required|trim|matches[new_username1]', [
			'required'	=> 'New username harus diisi!'
		]);

	}
}