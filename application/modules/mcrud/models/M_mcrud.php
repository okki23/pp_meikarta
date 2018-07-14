<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mcrud extends CI_Model {
 
	public function index()
	{
		$this->load->view('mcrud/m_crud_view');
	}
}
