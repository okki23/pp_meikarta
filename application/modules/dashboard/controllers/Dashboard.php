<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class dashboard berisi rincian method atau fungsi logic yang digunakan untuk melakukan autentikasi dashboard serta logout, dimana method yang terdaftar mengadopsi dari Parent Controller
*/

class Dashboard extends Parent_Controller {
 

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_dashboard');
 	}
	public function index(){
		$data['judul'] =$this->data['judul']; 
		$this->load->view('dashboard/dashboard_view',$data);
	}
	 
}