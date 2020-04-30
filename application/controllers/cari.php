<?php

class Cari extends CI_Controller{
	public function cari($keyword){
		$data = "SELECT * FROM nama_brg
					WHERE
				  nama = 'keyword'
				";
	}
}