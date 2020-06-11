<?php

class Change extends CI_Controller{
	public function index()
	{

		$this->form_validation->set_rules('current_password', 'Current Password', 'required', [
			'required'	=> 'Current password harus diisi!'
		]);
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|matches[new_password2]', [
			'required'	=> 'New password harus diisi!'
		]);
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]', [
			'required'	=> 'New password harus diisi!'
		]);


		if($this->form_validation->run() == false) {
			$this->load->view('templates/header');
			$this->load->view('change');
			$this->load->view('templates/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if(!password_verify($current_password, $data['username']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
				redirect('auth/change');
			} else {
				if($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
					redirect('auth/change');
				} else {
					$password_hash = password_hash($new_password, pasword_default);

					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password change!</div>');
					redirect('auth/login');
					$this->db->insert('tb_user',$data);
					redirect('auth/login');
				}
			}
		}
		
	}
}