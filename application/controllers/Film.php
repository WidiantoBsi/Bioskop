<?php 
/**
 * 
 */
 class Film extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Film_Model');
 		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
 	function index()
 	{
 		$data['Film']=$this->Film_Model->Select_Film();
 		$this->load->view('Film/Film_List',$data);
 	}
 	function hapus($Release)
 	{
 		$this->Film_Model->hapus_data($Release);
 		redirect(site_url('Film'));
 	}
 	function tambah()
 	{
 		$data=array(
 			'ID_Film'=>set_value('ID_Film'),
 			'Nama_Film'=>set_value('Nama_Film'),
 			'Deskripsi'=>set_value('Deskripsi'),
 			'Rating'=>set_value('Rating'),
 			'Produksi'=>set_value('Produksi'),
 			'Durasi'=>set_value('Durasi'),
 			'Country'=>set_value('Country'),
 			'Release'=>set_value('Release'),
 			'Poster'=>set_value('Poster'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Film/Tambah_Aksi'),
 		);
 		$this->load->view('Film/Film_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$Poster=$_FILES['Poster']['name'];
 		$data=array(
 			'ID_Film'=>$this->input->post('ID_Film'),
 			'Nama_Film'=>$this->input->post('Nama_Film'),
 			'Deskripsi'=>$this->input->post('Deskripsi'),
 			'Rating'=>$this->input->post('Rating'),
 			'Produksi'=>$this->input->post('Produksi'),
 			'Durasi'=>$this->input->post('Durasi'),
 			'Country'=>$this->input->post('Country'),
 			'Release'=>$this->input->post('Release'),
 			'Poster'=>$Poster,
 			
 		);
 		
 		if ($Poster=''){} else {
 			$config['upload_path']='./Uploads';
 			$config['allowed_types']='jpg|gif|png';

 			$this->load->library('upload', $config);
 			if(!$this->upload->do_upload('Poster')){
 				echo "Donwload Gagal"; die();
  			}else{
  				$Poster=$this->upload->data('file_name');
  			}
 			
 		$this->Film_Model->tambah_data($data);
 		redirect(site_url('Film'));
 		}
 		}
 	
 	function edit($ID)
 	{
 		$mhs=$this->Film_Model->ambil_data_id($ID);
 		$data=array(
 			'ID_Film'=>set_value('ID_Film',$mhs->ID_Film),
 			'Nama_Film'=>set_value('Nama_Film',$mhs->Nama_Film),
 			'Deskripsi'=>set_value('Deskripsi',$mhs->Deskripsi),
 			'Rating'=>set_value('Rating',$mhs->Rating),
 			'Produksi'=>set_value('Produksi',$mhs->Produksi),
 			'Durasi'=>set_value('Durasi',$mhs->Durasi),
 			'Country'=>set_value('Country',$mhs->Country),
 			'Release'=>set_value('Release',$mhs->Release),
 			'Poster'=>set_value('Poster',$mhs->Poster),
 			'Button'=>'Edit',
 			'Action'=>site_url('Film/Edit_Aksi'),
 		);
 		$this->load->view('Film/Film_Form',$data);
 	}
 	function edit_aksi()
 	{	
 		$Poster=$_FILES['Poster']['name'];
 		$data=array(
 			'ID_Film'=>$this->input->post('ID_Film'),
 			'Nama_Film'=>$this->input->post('Nama_Film'),
 			'Deskripsi'=>$this->input->post('Deskripsi'),
 			'Rating'=>$this->input->post('Rating'),
 			'Produksi'=>$this->input->post('Produksi'),
 			'Durasi'=>$this->input->post('Durasi'),
 			'Country'=>$this->input->post('Country'),
 			'Release'=>$this->input->post('Release'),
 			'Poster'=>$Poster,
 		);
 		$ID_Film=$this->input->post('ID_Film');
 		if ($Poster=''){} else {
 			$config['upload_path']='./Uploads';
 			$config['allowed_types']='jpg|gif|png';

 			$this->load->library('upload', $config);
 			if(!$this->upload->do_upload('Poster')){
 				echo "Donwload Gagal"; die();
  			}else{
  				$Poster=$this->upload->data('file_name');
  			}
 		$this->Film_Model->edit_data($ID_Film,$data);
 		redirect(site_url('Film'));
 	}
 	}

 } 
 ?>