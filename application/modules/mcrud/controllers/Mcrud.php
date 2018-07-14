<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcrud extends CI_Controller {

 
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_mcrud');
 	}
	public function index()
	{
		$this->load->view('mcrud/mcrud_view');
	}
}
