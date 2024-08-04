<?php 
/**
 * 
 */
 class Book_Tiket_List extends CI_Controller
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
 		$Username = $this->session->userdata('Username_Customer');
 		$id=$this->session->userdata('logined');
 		$data['Tiket']=$this->Tiket_Model->Select_Tiket_Username($Username);
 		$data['Film']=$this->Film_Model->Select_Film();
 		$this->load->view('Book_Tiket_List',$data);

 	}
 	
 	function hapus($Release)
 	{
 		$this->Tiket_Model->hapus_data($Release);
 		redirect(site_url('Book_Tiket_List'));
 	}
 	
 	
 } 
 ?>