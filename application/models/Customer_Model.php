<?php 
/**
 * 
 */
 class Customer_Model extends CI_Model
 {
 	public $nama_table = 'Customer';
 	public $id = 'Username';
 	public $order = 'DSC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Customer()
 	{
 		$this->db->order_by($this->id,$this->order);
 		return $this->db->get($this->nama_table)->result();
 	}
 	function cek_login($username,$password){
 		$this->db->where('Username', $username);
 		$this->db->where('Password', $password);
 		return $this->db->get($this->nama_table)->row(); 	
 	}
 	function hapus_data($id)
 	{
 		$this->db->where($this->id,$id);
 		$this->db->delete($this->nama_table);
 	}
 	function tambah_data($data){
 		return $this->db->insert($this->nama_table, $data);
 	}
 	function edit_data($id,$data){
 		$this->db->where($this->id,$id);
 		$this->db->update($this->nama_table, $data);
 	}
 	function ambil_data_id($id){
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}
 } ?>