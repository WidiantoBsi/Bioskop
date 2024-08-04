<?php 
/**
 * 
 */
 class Petugas extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Petugas_Model');
 		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
 	function index()
 	{
 		$data['Petugas']=$this->Petugas_Model->Select_Petugas();
 		$this->load->view('Petugas/Petugas_List',$data);
 	}
 	function hapus($ID_Petugas)
 	{
 		$this->Petugas_Model->hapus_data($ID_Petugas);
 		redirect(site_url('Petugas'));
 	}
 	function tambah()
 	{
 		$data=array(
 			'Nama_Petugas'=>set_value('Nama_Petugas'),
 			'Username_Petugas'=>set_value('Username_Petugas'),
 			'Password'=>set_value('Password'),
 			'No_HP'=>set_value('No_HP'),
 			'Email'=>set_value('Email'),
 			'Alamat'=>set_value('Alamat'),
 			'Jenis_Kelamin'=>set_value('Jenis_Kelamin'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Petugas/Tambah_Aksi'),
 		);
 		$this->load->view('Petugas/Petugas_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'Nama_Petugas'=>$this->input->post('Nama_Petugas'),
 			'Username_Petugas'=>$this->input->post('Username_Petugas'),
 			'Password'=>$this->input->post('Password'),
 			'No_HP'=>$this->input->post('No_HP'),
 			'Email'=>$this->input->post('Email'),
 			'Alamat'=>$this->input->post('Alamat'),
 			'Jenis_Kelamin'=>$this->input->post('Jenis_Kelamin'),
 		);
 		$this->load->helper(array('form','url'));
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules(
 			'Username','username',
 			'is_unique[customer.Username]|is_unique[petugas.Username_Petugas]',
 			array(
 				'is_unique' => 'This %s alredy exists.'
 			)
 		);
 		if ($this->form_validation->run() == FALSE)
 		{
 			$this->session->set_flashdata('Username', '<div class="alert alert-danger text-center">Username Sudah Ada</div>');
 			redirect(site_url('Petugas/Tambah'));
 		}
 		else
 		{
 			$this->Petugas_Model->tambah_data($data);
 			redirect(site_url('Petugas'));
 		}
 		
 	}
 	function edit($ID)
 	{
 		$mhs=$this->Petugas_Model->ambil_data_id($ID);
 		$data=array(
 			'Nama_Petugas'=>set_value('Nama_Petugas',$mhs->Nama_Petugas),
 			'Username_Petugas'=>set_value('Username_Petugas',$mhs->Username_Petugas),
 			'Password'=>set_value('Password',$mhs->Password),
 			'No_HP'=>set_value('No_HP',$mhs->No_HP),
 			'Email'=>set_value('Email',$mhs->Email),
 			'Alamat'=>set_value('Alamat',$mhs->Alamat),
 			'Jenis_Kelamin'=>set_value('Jenis_Kelamin',$mhs->Jenis_Kelamin),
 			'Button'=>'Edit',
 			'Action'=>site_url('Petugas/Edit_Aksi'),
 		);
 		$this->load->view('Petugas/Petugas_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'Nama_Petugas'=>$this->input->post('Nama_Petugas'),
 			'Username_Petugas'=>$this->input->post('Username_Petugas'),
 			'Password'=>$this->input->post('Password'),
 			'No_HP'=>$this->input->post('No_HP'),
 			'Email'=>$this->input->post('Email'),
 			'Alamat'=>$this->input->post('Alamat'),
 			'Jenis_Kelamin'=>$this->input->post('Jenis_Kelamin'),
 		);
 		$Username_Petugas=$this->input->post('Username_Petugas');
 		$this->Petugas_Model->edit_data($Username_Petugas,$data);
 		redirect(site_url('Petugas'));
 	}

 } 
 ?>