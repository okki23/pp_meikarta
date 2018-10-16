<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class validasi_pppu berisi rincian method atau fungsi logic yang digunakan untuk melakukan olah data master validasi_pppu, dimana method yang terdaftar mengadopsi dari Parent Controller
*/

class Validasi_pppu extends Parent_Controller {

  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */
  var $nama_tabel = 'm_validasi_pppu';
  var $daftar_field = array('id', 'blok_tower', 'lantai', 'no_validasi_pppu', 'luas', 'tipe', 'foto', 'harga', 'user_insert', 'date_insert', 'user_update', 'date_update');
  var $primary_key = 'id';
 
  //method construct dijalankan pertama kali dan terus berjalan selama class digunakan
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_validasi_pppu'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	}

  //method untuk memanggil halaman validasi_pppu pertama kali
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'validasi_pppu/validasi_pppu_view';
		$this->load->view('template_view',$data);		
   
	}

  //method untuk memanggil data dari database untuk di buatkan data JSON dan di parse ke view yang akan di sajikan dalam datatable
  public function fetch_validasi_pppu(){  
       $getdata = $this->m_validasi_pppu->fetch_validasi_pppu();
       echo json_encode($getdata);   
  }  

public function print_pppu(){
    $id = $this->uri->segment(3);
    $sql = "select a.*,b.nama as nama_customer,b.no_hp,b.kode_pelanggan,b.alamat,b.email,c.nik,c.nama as nama_sales,d.nama_bank,d.jumlah_kpa,d.no_rekening,d.kode_bank,e.blok_tower,e.harga,e.lantai,e.luas,e.no_unit,e.tipe from t_pu a
INNER JOIN m_customer b on b.id = a.id_customer
INNER JOIN m_sales c on c.id = a.id_sales
INNER JOIN m_bank d on d.id = a.id_bank
INNER JOIN m_unit e on e.id = a.id_unit";
$trans = $this->db->query($sql)->row();
        $data['trans'] = $trans;

        $this->load->library("pdf");
              $this->pdf->setPrintHeader(false);
              $this->pdf->setPrintFooter(true, 'aku', 'kau');
              $this->pdf->SetHeaderData("", "", 'Judul Header', "codedb.co");
              $this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
              // set auto page breaks
              $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
              // add a page
              $this->pdf->AddPage("P", "A4");
              // set font
              $this->pdf->SetFont("helvetica", "", 9);
              $html = $this->load->view('validasi_pppu/cetak_pppu', $data, true);

              $this->pdf->writeHTML($html, true, false, true, false, "");
              ob_end_clean();
              //$this->pdf->Output("Employee Information.pdf", "I");
              $this->pdf->Output('c:/xampp/htdocs/pp_meikarta/upload/filename.pdf', 'I');
   
  }

  public function validasi(){
  	$idpos = $this->input->post('idpos');
  	echo json_encode($idpos,TRUE);

  	$submit = $this->db->query("insert into t_pppu (id_pu,status,date_assign,user_assign) values ('".$idpos."','Y','".date('Y-m-d H:i:s')."','".$this->session->userdata('username')."')");

  	if($submit){
  		echo json_encode(array("response"=>array('message'=>'success')));
  	}
  }
	
  //method yang digunakan untuk menarik id dari data yang dituju untuk diambil datanya dengan query kemudian di parse kedalam form edit data
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row();
		echo json_encode($get,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menghapus data 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
    //cek apakah foto/gambar tersedia
		$cek_foto = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row(); 
   
		if($cek_foto->foto != '' || $cek_foto->foto != NULL){
          //apabila foto ada maka dihapus,apabila sebaliknya maka tidak dihapus
          unlink("upload/".str_replace(" ","_",$cek_foto->foto));
		}   

    $sqlhapus = $this->m_validasi_pppu->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menyimpan data dari form,baik saat melakukan simpan maupun ubah data
	public function simpan_data(){
    
    
    $data_form = $this->m_validasi_pppu->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_validasi_pppu->simpan_data_master($data_form,$this->nama_tabel,$this->primary_key,$id);
    $simpan_foto = $this->upload_foto();
  
 
	
		if($simpan_data && $simpan_foto){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
	
  //method atau fungsi yang digunakan untuk menyimpan foto/gambar dari form dan me return nama file yang baru di upload untuk digunakan saat penyimpanan atau perubahan data foto/gambar
  function upload_foto(){  
    if(isset($_FILES["user_image"])){  
        $extension = explode('.', $_FILES['user_image']['name']);   
        $destination = './upload/' . $_FILES['user_image']['name'];  
        return move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
         
    }  
  }  
 
       


}
