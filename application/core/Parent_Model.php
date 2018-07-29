<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class ini digunakan untuk menampung fungsi dasar yang mana fungsi tersebut akan di adopsi oleh class turunan nya
*/
class Parent_Model extends CI_Model {

	/*variabel global yang digunakan untuk instance di masing masing method agar dapat
    digunakan sewaktu waktu tanpa harus menulis ulang
    */

    protected $nama_tabel = '';
    protected $daftar_field = '';
    protected $primary_key = 'id';
  
	public function __construct(){
		parent::__construct();
	}

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

	public function fetch_user(){  
 
		   $getdata = $this->db->get($this->nama_tabel)->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->tipe;  
                $sub_array[] = $row->lantai;  
			    $sub_array[] = $row->unit;  
        
				if($row->foto == '' || $row->foto == NULL){
					$sub_array[] = '<a title="Preview" onclick="Preview_Foto();"  href="javascript:void(0)"><img class="thumbnail img-responsive" src="'.base_url().'upload/photo_na.jpg"></a>';
				}else{
					$sub_array[] = '<a title="Preview" onclick="Preview_Foto();" href="javascript:void(0)"><img class="thumbnail img-responsive" src="'.base_url().'upload/'.$row->foto.'"></a>';
				}
				 
			    $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a>  &nbsp; <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>';  
               
                $data[] = $sub_array;  
           }  
           $no++;
		   return $output = array("data"=>$data);
		    
    }
    
    public function hapus_data($id){
    	$hapus = $this->db->where('id',$id)->delete($this->nama_tabel);
    	return $hapus;
 	}

 	public function simpan_data($parsing){
 	
 		
	 	
 	}
}
