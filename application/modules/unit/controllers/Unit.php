<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class unit berisi rincian method atau fungsi logic yang digunakan untuk melakukan olah data master Unit, dimana method yang terdaftar mengadopsi dari Parent Controller
*/

class Unit extends Parent_Controller {

  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */
  var $nama_tabel = 'm_unit';
  var $daftar_field = array('id','tipe','lantai','unit','foto','user_insert','date_insert','user_update','date_update');
  var $primary_key = 'id';

  //method construct dijalankan pertama kali dan terus berjalan selama class digunakan
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_unit'); 
    if(!$this->session->userdata('username')){
       echo "<script language=javascript>
             alert('Anda tidak berhak mengakses halaman ini!');
             window.location='" . base_url('login') . "';
             </script>";
    }
 	}

  //method untuk memanggil halaman unit pertama kali
	public function index(){ 
    $data['judul'] =$this->data['judul']; 
		$this->load->view('unit/unit_view',$data);
	}

  //method untuk memanggil data dari database untuk di buatkan data JSON dan di parse ke view yang akan di sajikan dalam datatable
  public function fetch_user(){  
       $getdata = $this->m_unit->fetch_user();
       echo json_encode($getdata);   
  }  
	
  //method yang digunakan untuk menarik id dari data yang dituju untuk diambil datanya dengan query kemudian di parse kedalam form edit data
	public function get_data_edit(){
		$urut = $this->uri->segment(3); 
		$get = $this->db->where('urut',$urut)->get($this->nama_tabel)->row();
		echo json_encode($get,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menghapus data 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
    //cek apakah foto/gambar tersedia
		$cek_foto = $this->db->where('id',$id)->get($this->nama_tabel)->row(); 

		if($cek_foto->foto != '' || $cek_foto->foto != NULL){
          //apabila foto ada maka dihapus,apabila sebaliknya maka tidak dihapus
          unlink("upload/".str_replace(" ","_",$getfoto->foto));
		}   

    $sqlhapus = $this->m_unit->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menyimpan data dari form,baik saat melakukan simpan maupun ubah data
	public function simpan_data(){
     
      if($_FILES["user_image"]['name'] == '' || empty($_FILES["user_image"]['name'])){
        $foto = array("foto"=>'photo_na.jpg');
      }else{
        $foto = array("foto"=>$this->upload_image());
      }
    
    $data = $this->m_unit->array_from_post($this->daftar_field);
    
    $id = isset($data['id']) ? $data['id'] : NULL;
     
    $simpan_data = $this->m_unit->simpan_data($data,$this->nama_tabel,$this->primary_key,$id,$picture);
    $simpan_foto = $this->upload_image();
     
		if($simpan_data && $simpan_foto){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
	
  //method atau fungsi yang digunakan untuk menyimpan foto/gambar dari form dan me return nama file yang baru di upload untuk digunakan saat penyimpanan atau perubahan data foto/gambar
  function upload_image(){  
    if(isset($_FILES["user_image"])){  
        $extension = explode('.', $_FILES['user_image']['name']);  
        $new_name = rand() . '.' . $extension[1];  
        $destination = './upload/' . $new_name;  
        move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
        return $new_name;  
    }  
  }  
       


}
