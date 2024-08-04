<?php 
/**
 * 
 */
 class Studio_Model extends CI_Model
 {
 	public $nama_table = 'Studio';
 	public $id = 'ID_Studio';
 	public $order = 'DSC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Studio()
 	{
 		$this->db->order_by($this->id,$this->order);
 		return $this->db->get($this->nama_table)->result();
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