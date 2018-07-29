<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class M_login berisi rincian method atau fungsi logic yang digunakan untuk melakukan transaksi data master login, dimana method yang terdaftar mengadopsi dari Parent Model
*/
class M_login extends Parent_Model { 
  
  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */

  var $nama_tabel = 'm_user';
  var $daftar_field = array('id','id_user','username','password','user_insert','date_insert','user_update','date_update');
  var $primary_key = 'id';

	  
	public function __construct(){
        parent::__construct();
        $this->load->database();
	}

	public function autentikasi($username,$password){
        $sql = $this->db->get_where($this->nama_tabel,array('username'=>$username,'password'=>$password));
		return $sql;
	}
 
 
}
