<?php 
/**
 * 
 */
 class CekLogin_Model extends CI_Model
 {
 	
 	public $nama_table_customer = 'Customer';
 	public $nama_table_petugas = 'Petugas';
 	function __construct()
 	{
 		parent::__construct();

 	}
 	function cek_login_customer($username,$password){
 		$this->db->where('Username', $username);
 		$this->db->where('Password', $password);
 		return $this->db->get($this->nama_table_customer)->row(); 	
 	}
 	function cek_login_petugas($username,$password){
 		$this->db->where('Username_Petugas', $username);
 		$this->db->where('Password', $password);
 		return $this->db->get($this->nama_table_petugas)->row(); 	
 	}
 } ?>