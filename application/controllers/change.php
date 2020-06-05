<?php

class Change extends CI_Controller{
	public function index()
	{
		$data['title'] = 'Change Password';
		$data['tb_user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('nama')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]');


		if($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/change', $data);
			$this->load->view('templates/footer', $data);
		}
		
	}
}