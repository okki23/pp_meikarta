<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class M_validasi_pppu berisi rincian method atau fungsi logic yang digunakan untuk melakukan transaksi data master validasi_pppu, dimana method yang terdaftar mengadopsi dari Parent Model
*/
class M_validasi_pppu extends Parent_Model { 
  
  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */

  var $nama_tabel = 'm_validasi_pppu';
  var $daftar_field = array('id', 'blok_tower', 'lantai', 'no_validasi_pppu', 'luas', 'tipe', 'foto', 'harga', 'user_insert', 'date_insert', 'user_update', 'date_update');
  var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_validasi_pppu(){   
		   $getdata = $this->db->query("select a.*,c.nama as nama_sales,d.nama as nama_customer,b.kode_ttbf,b.priority_code, e.nama_bank,f.blok_tower,f.lantai,f.no_unit,f.tipe,g.status
from t_pu a
inner join t_booking_fee b on b.id = a.id_bf
inner join m_sales c on c.id = b.id_sales
inner join m_customer d on d.id = b.id_customer
inner join m_bank e on e.id = a.id_bank
inner join m_unit f on f.id = a.id_unit
left join t_pppu g on g.id_pu = a.id")->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->nama_customer;   
			          $sub_array[] = $row->blok_tower;   
                $sub_array[] = $row->kode_ttbf;  
			          $sub_array[] = $row->no_pu; 
                if($row->status == '' || empty($row->status)){
                     $sub_array[] = '&nbsp; <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" id="detail" onclick="Show_Detail('.$row->id.');" > <i class="material-icons">aspect_ratio</i> Detail </a>
                  &nbsp; <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Validasi('.$row->id.');" > <i class="material-icons">create</i> Validasi </a>';  
                }else{
                   $sub_array[] = '&nbsp; <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" id="detail" onclick="Show_Detail('.$row->id.');" > <i class="material-icons">aspect_ratio</i> Detail </a>
                  &nbsp;
                  <a href="javascript:void(0)" class="btn btn-success btn-xs waves-effect" ><i class="material-icons">check_circle</i> Tervalidasi </a>
                  <a href="'.base_url('validasi_pppu/print_pppu').'" class="btn btn-success btn-xs waves-effect" ><i class="material-icons">print</i> Cetak PPPU </a> ';  
                }
			          
               
                $data[] = $sub_array;  
                $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }

  
  
	 
 
}
