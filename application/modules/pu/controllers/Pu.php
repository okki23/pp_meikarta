<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class pu berisi rincian method atau fungsi logic yang digunakan untuk melakukan olah data master pu, dimana method yang terdaftar mengadopsi dari Parent Controller
*/

class Pu extends Parent_Controller {

  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */
  var $nama_tabel = 't_pu';
  var $daftar_field = array('id', 'id_customer', 'id_sales', 'id_bank', 'id_bf', 'id_unit', 'cicilan', 'date_assign', 'user_assign');
  var $primary_key = 'id';
 
  //method construct dijalankan pertama kali dan terus berjalan selama class digunakan
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_pu'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url() . "';
				 </script>";
		}
 	}

  //method untuk memanggil halaman pu pertama kali
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'pu/pu_view';
		$this->load->view('template_view',$data);		
   
	}

  //method untuk memanggil data dari database untuk di buatkan data JSON dan di parse ke view yang akan di sajikan dalam datatable
  	public function fetch_pu(){  
       $getdata = $this->m_pu->fetch_pu();
       echo json_encode($getdata);   
  	}  

  	public function generate_ttbf(){
		 
		echo "TBF".generate_ttbf(6);
	}
	
	public function generate_no_pu(){
	 
		echo "LK".generate_no_pu(6);
	}
	
	public function get_priority_code_assign(){
	   $getdata = $this->m_pu->get_priority_code_assign();
       echo json_encode($getdata); 
	}

  	public function generate_priority_code(){
		 
		echo "PCD".generate_ttbf(6);
	}

	public function fetch_nama_customer(){  
       $getdata = $this->m_pu->fetch_nama_customer();
       echo json_encode($getdata);   
  	}  


	public function fetch_nama_sales(){  
       $getdata = $this->m_pu->fetch_nama_sales();
       echo json_encode($getdata);   
  	}  

	
  //method yang digunakan untuk menarik id dari data yang dituju untuk diambil datanya dengan query kemudian di parse kedalam form edit data
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->query("SELECT a.*,b.nama as nama_customer,c.nama as nama_sales FROM 
								t_pu a
								INNER JOIN m_customer b on b.id = a.id_customer
								INNER JOIN m_sales c on c.id = a.id_sales where a.id = '".$id."' ")->row();
		echo json_encode($get,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menghapus data 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
    //cek apakah foto/gambar tersedia
		$cek_foto = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row(); 
   
		if($cek_foto->upload_bukti_transfer != '' || $cek_foto->upload_bukti_transfer != NULL){
          //apabila foto ada maka dihapus,apabila sebaliknya maka tidak dihapus
          unlink("upload/".str_replace(" ","_",$cek_foto->upload_bukti_transfer));
		}   

    $sqlhapus = $this->m_pu->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menyimpan data dari form,baik saat melakukan simpan maupun ubah data
	public function simpan_data(){
    
    
    $data_form = $this->m_pu->array_from_post($this->daftar_field);

    //$id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    //$simpan_data = $this->m_pu->simpan_data_master($data_form,$this->nama_tabel,$this->primary_key,$id);

    $simpan = $this->db->query("insert into t_pu set kode_ttbf = '".$data_form['kode_ttbf']."',priority_code = '".$data_form['priority_code']."',id_sales = '".$data_form['id_sales']."',id_customer = '".$data_form['id_customer']."', date_assign = '".date('Y-m-d H:i:s')."', upload_bukti_transfer = '".$data_form['upload_bukti_transfer']."' ");


    $simpan_foto = $this->upload_foto();
  	var_dump($simpan);
  	exit();
 
	
		// if($simpan_data && $simpan_foto){
		// 	$result = array("response"=>array('message'=>'success'));
		// }else{
		// 	$result = array("response"=>array('message'=>'failed'));
		// }
		
		// echo json_encode($result,TRUE);

	}
	
  //method atau fungsi yang digunakan untuk menyimpan foto/gambar dari form dan me return nama file yang baru di upload untuk digunakan saat penyimpanan atau perubahan data foto/gambar
  function upload_foto(){  
    if(isset($_FILES["user_bukti"])){  
        $extension = explode('.', $_FILES['user_bukti']['name']);   
        $destination = './upload/' . $_FILES['user_bukti']['name'];  
        return move_uploaded_file($_FILES['user_bukti']['tmp_name'], $destination);  
         
    }  
  }  
       


}
