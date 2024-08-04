<?php 
/**
 * 
 */
 class Home_Movies extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Film_Model');
 	}
 	function index()
 	{
 		$data['Film']=$this->Film_Model->Select_Film();
 		$this->load->view('Home',$data);
 		
 	}
 	
 } 
 ?>