<?php 
/**
 * 
 */
 class Customer extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Customer_Model');
 		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
 	function index()
 	{
 		$data['Customer']=$this->Customer_Model->Select_Customer();
 		$this->load->view('Customer/Customer_List',$data);
 	}
 	function hapus($ID_Customer)
 	{
 		$this->Customer_Model->hapus_data($ID_Customer);
 		redirect(site_url('Customer'));
 	}
 	function tambah()
 	{
 		$data=array(
 			'Nama_Customer' => set_value('Nama_Customer'),
 			'Username'=>set_value('Username'),
 			'Password'=>set_value('Password'),
 			'No_HP'=>set_value('No_HP'),
 			'Email'=>set_value('Email'),
 			'Alamat'=>set_value('Alamat'),
 			'Jenis_Kelamin'=>set_value('Jenis_Kelamin'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Customer/Tambah_Aksi'),
 		);
 		$this->load->view('Customer/Customer_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'Nama_Customer' => $this->input->post('Nama_Customer'),
 			'Username'=>$this->input->post('Username'),
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
 			redirect(site_url('Customer/Tambah'));
 		}
 		else
 		{
 		$this->Customer_Model->tambah_data($data);
 		redirect(site_url('Customer'));
 		}
 	}
 	function edit($ID)
 	{
 		$mhs=$this->Customer_Model->ambil_data_id($ID);
 		$data=array(
 			'Nama_Customer'=>set_value('Nama_Customer',$mhs->Nama_Customer),
 			'Username'=>set_value('Username',$mhs->Username),
 			'Password'=>set_value('Password',$mhs->Password),
 			'No_HP'=>set_value('No_HP',$mhs->No_HP),
 			'Email'=>set_value('Email',$mhs->Email),
 			'Alamat'=>set_value('Alamat',$mhs->Alamat),
 			'Jenis_Kelamin'=>set_value('Jenis_Kelamin',$mhs->Jenis_Kelamin),
 			'Button'=>'Edit',
 			'Action'=>site_url('Customer/Edit_Aksi'),
 		);
 		$this->load->view('Customer/Customer_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'Nama_Customer'=>$this->input->post('Nama_Customer'),
 			'Username'=>$this->input->post('Username'),
 			'Password'=>$this->input->post('Password'),
 			'No_HP'=>$this->input->post('No_HP'),
 			'Email'=>$this->input->post('Email'),
 			'Alamat'=>$this->input->post('Alamat'),
 			'Jenis_Kelamin'=>$this->input->post('Jenis_Kelamin'),
 		);
 		$Username=$this->input->post('Username');
 		$this->Customer_Model->edit_data($Username,$data);
 		redirect(site_url('Customer'));
 	}

 } 
 ?>