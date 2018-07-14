<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
 
	public function index()
	{
		$this->load->view('login/m_crud_view');
	}
}
