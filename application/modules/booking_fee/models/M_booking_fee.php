<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class M_booking_fee berisi rincian method atau fungsi logic yang digunakan untuk melakukan transaksi data master booking_fee, dimana method yang terdaftar mengadopsi dari Parent Model
*/
class M_booking_fee extends Parent_Model { 
  
  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */

  var $nama_tabel = 't_booking_fee';
  var $daftar_field = array('id','kode_ttbf','id_customer','id_sales','upload_bukti_transfer','priority_code','date_assign');
  var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_booking_fee(){   
		   $getdata = $this->db->query("SELECT a.*,b.nama as nama_customer,c.nama as nama_sales FROM
                                    t_booking_fee a
                                    LEFT JOIN m_customer b on b.id = a.id_customer
                                    LEFT JOIN m_sales c on c.id = a.id_sales 
                                  ")->result();
		   $data = array();  
		   $no = 1;
          foreach($getdata as $row){  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->kode_ttbf;   
			          $sub_array[] = $row->nama_customer;   
                $sub_array[] = $row->nama_sales;  
      			    $sub_array[] = $row->priority_code;   
               
      			    $sub_array[] = '<a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" id="detail" onclick="Show_Detail('.$row->id.');" > <i class="material-icons">aspect_ratio</i> Detail </a>
                  &nbsp;   <a target="_blank" href="'.base_url('booking_fee/print_ttbf/'.$row->id).'" class="btn btn-primary btn-xs waves-effect"   > <i class="material-icons">print</i> Print </a>
      								&nbsp; <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }


   public function fetch_nama_customer(){   
       $getdata = $this->db->get('m_customer')->result();
       $data = array();  
        
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                
                $sub_array[] = $row->id;  
                $sub_array[] = $row->kode_pelanggan;  
                $sub_array[] = $row->nama;  
                $sub_array[] = $row->email;  
                $sub_array[] = $row->alamat;   
                $data[] = $sub_array;  
                  
           }  
          
       return $output = array("data"=>$data);
        
    }

    public function fetch_nama_sales(){   
       $getdata = $this->db->get('m_sales')->result();
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
