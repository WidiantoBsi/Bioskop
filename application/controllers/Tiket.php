<?php 
/**
 * 
 */
 class Tiket extends CI_Controller
 {
 	
 	
 	function __construct()
 	{
 		parent::__construct();

 		$this->load->model('Tiket_Model');
 		$this->load->model('Customer_Model');
 		$this->load->model('Jadwal_Model');
 		$this->load->model('Film_Model');
		$this->load->model('Kursi_Model');
 		$this->load->model('Studio_Model');
 		$this->load->model('Petugas_Model');
  		if(!$this->session->userdata('logined')||$this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}
 	}
	function index()
 	{
 		$data['Tiket']=$this->Tiket_Model->Select_Tiket();
 		$this->load->view('Tiket/Tiket_List',$data);
 	}
 	function hapus($Release)
 	{
 		$this->Tiket_Model->hapus_data($Release);
 		redirect(site_url('Tiket'));
 	}
 	function Update($ID)
 	{
 		$mhs=$this->Tiket_Model->ambil_data_id($ID);
 		
 		$Customer=($this->Customer_Model->ambil_data_id($mhs->Username));
		$arrCustomer = $this->Customer_Model->Select_Customer();
		$indexCustomer=0; 
		foreach ($arrCustomer as $key => $value) {
			if($value->Nama_Customer == $Customer->Nama_Customer){
				break;
			}
			else{
				$indexCustomer++;
			}
		}

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

		$Jadwal=($this->Jadwal_Model->ambil_data_id($mhs->ID_Jadwal));
		$arrJadwal = $this->Jadwal_Model->Select_Jadwal();
		$indexJadwal=0; 
		foreach ($arrJadwal as $key => $value) {
			if($value->Tanggal_Dan_Jam == $Jadwal->Tanggal_Dan_Jam){
				break;
			}
			else{
				$indexJadwal++;
			}
		}

		$Kursi=($this->Kursi_Model->ambil_data_id($mhs->ID_Kursi));
		$arrKursi = $this->Kursi_Model->Select_Kursi();
		$indexKursi=0; 
		foreach ($arrKursi as $key => $value) {
			if($value->Nama_Kursi == $Kursi->Nama_Kursi){
				break;
			}
			else{
				$indexKursi++;
			}
		}

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

		$Petugas=($this->Petugas_Model->ambil_data_id($mhs->Username_Petugas));
		$arrPetugas = $this->Petugas_Model->Select_Petugas();
		$indexPetugas=0; 
		foreach ($arrPetugas as $key => $value) {
			if($value->Nama_Petugas == $Petugas->Nama_Petugas){
				break;
			}
			else{
				$indexPetugas++;
			}
		}
		
		$data=array(
 			'ID_Tiket'=>set_value('ID_Tiket',$mhs->ID_Tiket),
 			'Status'=>set_value('Status',$mhs->Status),
 			'Username'=>$this->Customer_Model->Select_Customer(),
 			'ID_Film'=>$this->Film_Model->Select_Film(),
 			'ID_Jadwal'=>$this->Jadwal_Model->Select_Jadwal(),
 			'ID_Kursi'=>$this->Kursi_Model->Select_Kursi(),
 			'ID_Studio'=>$this->Studio_Model->Select_Studio(),
 			'Username_Petugas'=>$this->Petugas_Model->Select_Petugas(),
 			'Button'=>'Update',
 			'Action'=>site_url('Tiket/Update_Aksi'),
 		);
 		$this->load->view('Tiket/Tiket_Form',$data);
 	}
 	function Update_aksi()
 	{
 		$data=array(
 			'ID_Tiket'=>$this->input->post('ID_Tiket'),
 			'Status'=>$this->input->post('Status'),
 			'Username'=>$this->input->post('Username'),
 			'ID_Film'=>$this->input->post('ID_Film'),
 			'ID_Jadwal'=>$this->input->post('ID_Jadwal'),
 			'ID_Kursi'=>$this->input->post('ID_Kursi'),
 			'ID_Studio'=>$this->input->post('ID_Studio'),
 			'Username_Petugas'=>$this->input->post('Username_Petugas'),
 		);
 		$ID_Tiket=$this->input->post('ID_Tiket');
 		$this->Tiket_Model->edit_data($ID_Tiket,$data);
 		redirect(site_url('Tiket'));
 	}
 } ?>