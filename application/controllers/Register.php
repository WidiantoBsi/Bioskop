<?php 
/**
 * 
 */
 class Register extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Customer_Model');
 		
 	}
 	function index()
 	{
 		$data=array(
 			'Nama_Customer' => set_value('Nama_Customer'),
 			'Username'=>set_value('Username'),
 			'Password'=>set_value('Password'),
 			'No_HP'=>set_value('No_HP'),
 			'Email'=>set_value('Email'),
 			'Alamat'=>set_value('Alamat'),
 			'Jenis_Kelamin'=>set_value('Jenis_Kelamin'),
 			'Button'=>'Daftar',
 			'Action'=>site_url('Register/Tambah_Aksi'),
 		);
 		$this->load->view('Register',$data);
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
 			redirect(site_url('Register'));
 		}
 		else
 		{
 			$this->Customer_Model->tambah_data($data);
 			redirect(site_url('Login'));
 		}
 		
 	}
 }

 ?>