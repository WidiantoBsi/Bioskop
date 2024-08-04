<?php 
/**
 * 
 */
 class Kursi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Kursi_Model');
 		$this->load->model('Studio_Model');
 		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
 	function index()
 	{
 		$data['Kursi']=$this->Kursi_Model->Select_Kursi();
 		$this->load->view('Kursi/Kursi_List',$data);
 	}
 	function hapus($Release)
 	{
 		$this->Kursi_Model->hapus_data($Release);
 		redirect(site_url('Kursi'));
 	}
 	function tambah()
 	{
 		$data=array(
 			'ID_Kursi'=>set_value('ID_Kursi'),
 			'Nama_Kursi'=>set_value('Nama_Kursi'),
 			'ID_Studio'=>$this->Studio_Model->Select_Studio(),
 			'Button'=>'Tambah',
 			'Action'=>site_url('Kursi/Tambah_Aksi'),
 		);
 		$this->load->view('Kursi/Kursi_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'ID_Kursi'=>$this->input->post('ID_Kursi'),
 			'Nama_Kursi'=>$this->input->post('Nama_Kursi'),
 			'ID_Studio'=>$this->input->post('ID_Studio'),
 		);
 		$this->Kursi_Model->tambah_data($data);
 		redirect(site_url('Kursi'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->Kursi_Model->ambil_data_id($ID);
 		

 		$Studio=($this->Studio_Model->ambil_data_id($mhs->ID_Studio));
		$arrStudio = $this->Studio_Model->Select_Studio();
		$indexStudio=0; 
		foreach ($arrStudio as $key => $value) {
			if($value->Nama_Studio == $Studio->Nama_Studio){
				break;
			}
			else{
				$indexStudio++;
			}
		}
		$data=array(
 			'ID_Kursi'=>set_value('ID_Kursi',$mhs->ID_Kursi),
 			'Nama_Kursi'=>set_value('Nama_Kursi',$mhs->Nama_Kursi),
 			'ID_Studio'=>$this->Studio_Model->Select_Studio(),
 			'Button'=>'Edit',
 			'Action'=>site_url('Kursi/Edit_Aksi'),
 		);
 		$this->load->view('Kursi/Kursi_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'ID_Kursi'=>$this->input->post('ID_Kursi'),
 			'Tanggal_Dan_Jam'=>$this->input->post('Tanggal_Dan_Jam'),
 			'ID_Studio'=>$this->input->post('ID_Studio'),
 		);
 		$ID_Kursi=$this->input->post('ID_Kursi');
 		$this->Kursi_Model->edit_data($ID_Kursi,$data);
 		redirect(site_url('Kursi'));
 	}


 } 
 ?>