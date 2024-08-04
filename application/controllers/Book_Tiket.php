<?php 
/**
 * 
 */
 class Book_Tiket extends CI_Controller
 {
 	
 	function __construct()
 	{

 		parent::__construct();
 		$this->load->model('Book_Tiket_Model');
 		$this->load->model('Tiket_Model');
 		$this->load->model('Customer_Model');
 		$this->load->model('Jadwal_Model');
 		$this->load->model('Film_Model');
		$this->load->model('Kursi_Model');
 		$this->load->model('Studio_Model');
 		$this->load->model('Petugas_Model');
 		

 	}
 	function index()
 	{
 		//$id_filmnya = $this->Film_Model->Select_IDFilm();
 		$data=array(
 			'ID_Tiket'=>set_value('ID_Tiket'),
 			'ID_Film'=>$this->Film_Model->Select_Film(),
 			'ID_Jadwal'=>$this->Jadwal_Model->Select_Jadwal(),
 			'ID_Studio'=>$this->Studio_Model->Select_Studio(),
 			'ID_Kursi'=>$this->Kursi_Model->Select_Kursi(),
 			'Status'=>set_value('Status'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Book_Tiket/Tambah_Aksi'),
 		);
 		$this->load->view('Book_Tiket', $data);
 	}
 	
 	function tambah_aksi()
 	{
 		$data=array(
 			'ID_Tiket'=>$this->input->post('ID_Tiket'),
 			'ID_Film'=>$this->input->post('ID_Film'),
 			'Username'=>$this->input->post('Username'),
 			'ID_Jadwal'=>$this->input->post('ID_Jadwal'),
 			'ID_Studio'=>$this->input->post('ID_Studio'),
 			'ID_Kursi'=>$this->input->post('ID_Kursi'),
 			'Status'=>$this->input->post('Status'),
 			'Username_Petugas'=>$this->input->post('Username_Petugas'),
 		);
 		$this->Book_Tiket_Model->tambah_data($data);
 		redirect(site_url('Book_Tiket_List'));
 	}
 	public function JadwalFilm($id) { 

       $result = $this->db->where("ID_Film",$id)->get("jadwal")->result();

       echo json_encode($result);
  	}
  	public function StudioKursi($id) { 

       $result = $this->db->where("ID_Studio",$id)->get("kursi")->result();

       echo json_encode($result);
  	}
 	
 } 
 ?>