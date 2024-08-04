<?php 

/**
 * 
 */
 class Tiket_Model extends CI_Model
 {
 	public $nama_table = 'tiket';
 	public $id = 'ID_Tiket';
 	public $order = 'DSC';
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Tiket()
 	{
 		$this->db->distinct();
 		$this->db->select('T.ID_Tiket, C.Username, C.Nama_Customer, J.ID_Jadwal, J.Tanggal_Dan_Jam, F.ID_Film, F.Nama_Film, K.ID_Kursi, K.Nama_Kursi, S.ID_Studio, S.Nama_Studio, P.Username_Petugas, P.Nama_Petugas, T.Status');
 		$this->db->from('Tiket T');
 		$this->db->join('Customer C', 'C.Username = T.Username');
 		$this->db->join('Jadwal J', 'J.ID_Jadwal = T.ID_Jadwal');
 		$this->db->join('Film F', 'F.ID_Film = T.ID_Film');
 		$this->db->join('Kursi K', 'K.ID_Kursi = T.ID_Kursi');
 		$this->db->join('Studio S', 'S.ID_Studio = T.ID_Studio');
 		$this->db->join('Petugas P', 'P.Username_Petugas = T.Username_Petugas');
 		return $this->db->get($this->nama_table)->result();
 	}
 	function Select_Tiket_Username($idx)
 	{
 		$this->db->distinct();
 		$this->db->select('T.ID_Tiket, C.Username, C.Nama_Customer, J.ID_Jadwal, J.Tanggal_Dan_Jam, F.ID_Film, F.Nama_Film, K.ID_Kursi, K.Nama_Kursi, S.ID_Studio, S.Nama_Studio, P.Username_Petugas, P.Nama_Petugas, T.Status');
 		$this->db->from('Tiket T');
 		$this->db->join('Customer C', 'C.Username = T.Username');
 		$this->db->join('Jadwal J', 'J.ID_Jadwal = T.ID_Jadwal');
 		$this->db->join('Film F', 'F.ID_Film = T.ID_Film');
 		$this->db->join('Kursi K', 'K.ID_Kursi = T.ID_Kursi');
 		$this->db->join('Studio S', 'S.ID_Studio = T.ID_Studio');
 		$this->db->join('Petugas P', 'P.Username_Petugas = T.Username_Petugas');
 		$this->db->where('T.Username', $idx);
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