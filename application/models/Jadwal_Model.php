<?php 
/**
 * 
 */
 class Jadwal_Model extends CI_Model
 {
 	public $nama_table = 'Jadwal';
 	public $id = 'ID_Jadwal';
 	public $order = 'DSC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Jadwal()
 	{
 		$this->db->distinct();
 		$this->db->select('J.ID_Jadwal , F.ID_Film, J.Tanggal_Dan_Jam, F.Nama_Film');
 		$this->db->from('Jadwal J');
 		$this->db->join('Film F', 'F.ID_Film = J.ID_Film');
 		return $this->db->get($this->nama_table)->result();
 	}

 	function Select_Jadwal1($id_filmnya)
 	{
 		$this->db->distinct();
 		$this->db->select('J.ID_Jadwal , F.ID_Film, J.Tanggal_Dan_Jam, F.Nama_Film');
 		$this->db->from('Jadwal J');
 		$this->db->join('Film F', 'F.ID_Film = J.ID_Film');
 		$this->db->where('J.ID_Film',$id_filmnya);
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