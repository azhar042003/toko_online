<?php

class Model_Pencarian extends CI_Model{
	public function cari(){
		return $this->db->get_where("tb_barang",array('pencarian' =>'nama_brg'));
	}
}