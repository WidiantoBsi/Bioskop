<?php 
/**
 * 
 */
 class Jadwal extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Jadwal_Model');
 		$this->load->model('Film_Model');
 		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
 	function index()
 	{
 		$data['Jadwal']=$this->Jadwal_Model->Select_Jadwal();
 		$this->load->view('Jadwal/Jadwal_List',$data);
 	}
 	function hapus($Release)
 	{
 		$this->Jadwal_Model->hapus_data($Release);
 		redirect(site_url('Jadwal'));
 	}
 	function tambah()
 	{
 		$data=array(
 			'ID_Jadwal'=>set_value('ID_Jadwal'),
 			'Tanggal_Dan_Jam'=>set_value('Tanggal_Dan_Jam'),
 			'ID_Film'=>$this->Film_Model->Select_Film(),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Jadwal/Tambah_Aksi'),
 		);
 		$this->load->view('Jadwal/Jadwal_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'ID_Jadwal'=>$this->input->post('ID_Jadwal'),
 			'Tanggal_Dan_Jam'=>$this->input->post('Tanggal_Dan_Jam'),
 			'ID_Film'=>$this->input->post('ID_Film'),
 		);
 		$this->Jadwal_Model->tambah_data($data);
 		redirect(site_url('Jadwal'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->Jadwal_Model->ambil_data_id($ID);
 		

 		$Film=($this->Film_Model->ambil_data_id($mhs->ID_Film));
		$arrFilm = $this->Film_Model->Select_Film();
		$indexFilm=0; 
		foreach ($arrFilm as $key => $value) {
			if($value->Nama_Film == $Film->Nama_Film){
				break;
			}
			else{
				$indexFilm++;
			}
		}
		$data=array(
 			'ID_Jadwal'=>set_value('ID_Jadwal',$mhs->ID_Jadwal),
 			'Tanggal_Dan_Jam'=>set_value('Tanggal_Dan_Jam',$mhs->Tanggal_Dan_Jam),
 			'ID_Film'=>$this->Film_Model->Select_Film(),
 			'Button'=>'Edit',
 			'Action'=>site_url('Jadwal/Edit_Aksi'),
 		);
 		$this->load->view('Jadwal/Jadwal_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'ID_Jadwal'=>$this->input->post('ID_Jadwal'),
 			'Tanggal_Dan_Jam'=>$this->input->post('Tanggal_Dan_Jam'),
 			'ID_Film'=>$this->input->post('ID_Film'),
 		);
 		$ID_Jadwal=$this->input->post('ID_Jadwal');
 		$this->Jadwal_Model->edit_data($ID_Jadwal,$data);
 		redirect(site_url('Jadwal'));
 	}


 } 
 ?>