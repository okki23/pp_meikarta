<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class M_akun_admin_pppu berisi rincian method atau fungsi logic yang digunakan untuk melakukan transaksi data master akun_admin_pppu, dimana method yang terdaftar mengadopsi dari Parent Model
*/
class M_akun_admin_pppu extends Parent_Model { 
  
  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */

  var $nama_tabel = 'm_akun_admin_pppu';
  var $nama_tabel_adminpppu = 'm_admin_pppu';
  var $daftar_field = array('id', 'nik', 'nama', 'no_telp', 'email', 'user_insert', 'date_insert', 'user_update', 'date_update');
  var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_akun_admin_pppu(){   
		   $getdata = $this->db->query("SELECT a.*,b.nama from m_akun_admin_pppu a
                                    INNER JOIN m_admin_pppu b on b.id = a.id_admin_pppu")->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->username;  
                $sub_array[] = $row->nama;  
			         
				 
			    $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a>  &nbsp; <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }

    public function fetch_nama_adminpppu(){   
       $getdata = $this->db->get($this->nama_tabel_adminpppu)->result();
       $data = array();  
        
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                
                $sub_array[] = $row->id;  
                $sub_array[] = $row->nik;  
                $sub_array[] = $row->nama;  
                $sub_array[] = $row->no_telp;  
                $sub_array[] = $row->email;   
                $data[] = $sub_array;  
                  
           }  
          
       return $output = array("data"=>$data);
        
    }

  
  
	 
 
}
