<?php 
/**
 * 
 */
 class Studio extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Studio_Model');
 		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
 	function index()
 	{
 		$data['Studio']=$this->Studio_Model->Select_Studio();
 		$this->load->view('Studio/Studio_List',$data);
 	}
 	function hapus($Release)
 	{
 		$this->Studio_Model->hapus_data($Release);
 		redirect(site_url('Studio'));
 	}
 	function tambah()
 	{
 		$data=array(
 			'ID_Studio'=>set_value('ID_Studio'),
 			'Nama_Studio'=>set_value('Nama_Studio'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Studio/Tambah_Aksi'),
 		);
 		$this->load->view('Studio/Studio_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'ID_Studio'=>$this->input->post('ID_Studio'),
 			'Nama_Studio'=>$this->input->post('Nama_Studio'),
 		);
 		$this->Studio_Model->tambah_data($data);
 		redirect(site_url('Studio'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->Studio_Model->ambil_data_id($ID);
 		$data=array(
 			'ID_Studio'=>set_value('ID_Studio',$mhs->ID_Studio),
 			'Nama_Studio'=>set_value('Nama_Studio',$mhs->Nama_Studio),
 			'Button'=>'Edit',
 			'Action'=>site_url('Studio/Edit_Aksi'),
 		);
 		$this->load->view('Studio/Studio_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'ID_Studio'=>$this->input->post('ID_Studio'),
 			'Nama_Studio'=>$this->input->post('Nama_Studio'),
 		);
 		$ID_Studio=$this->input->post('ID_Studio');
 		$this->Studio_Model->edit_data($ID_Studio,$data);
 		redirect(site_url('Studio'));
 	}

 } 
 ?>