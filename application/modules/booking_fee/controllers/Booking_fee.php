<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class booking_fee berisi rincian method atau fungsi logic yang digunakan untuk melakukan olah data master booking_fee, dimana method yang terdaftar mengadopsi dari Parent Controller
*/

class Booking_fee extends Parent_Controller {

  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */
  var $nama_tabel = 't_booking_fee';
  var $daftar_field = array('id','kode_ttbf','id_customer','id_sales','upload_bukti_transfer','priority_code','date_assign');
  var $primary_key = 'id';
 
  //method construct dijalankan pertama kali dan terus berjalan selama class digunakan
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_booking_fee'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url() . "';
				 </script>";
		}
		$this->load->library('MyPHPMailer'); // load library
 	}

  //method untuk memanggil halaman booking_fee pertama kali
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'booking_fee/booking_fee_view';
		$this->load->view('template_view',$data);		
   
	}

  //method untuk memanggil data dari database untuk di buatkan data JSON dan di parse ke view yang akan di sajikan dalam datatable
  	public function fetch_booking_fee(){  
       $getdata = $this->m_booking_fee->fetch_booking_fee();
       echo json_encode($getdata);   
  	}  

  	public function generate_ttbf(){
		$param = 5;
		echo "TBF".generate_ttbf(6);
	}

  	public function generate_priority_code(){
		$param = 5;
		echo "PCD".generate_ttbf(6);
	}

	public function fetch_nama_customer(){  
       $getdata = $this->m_booking_fee->fetch_nama_customer();
       echo json_encode($getdata);   
  	}  


	public function fetch_nama_sales(){  
       $getdata = $this->m_booking_fee->fetch_nama_sales();
       echo json_encode($getdata);   
  	}  

	
  //method yang digunakan untuk menarik id dari data yang dituju untuk diambil datanya dengan query kemudian di parse kedalam form edit data
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->query("SELECT a.*,b.nama as nama_customer,c.nama as nama_sales FROM 
								t_booking_fee a
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

    $sqlhapus = $this->m_booking_fee->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	


  //method atau fungsi yang digunakan untuk menyimpan data dari form,baik saat melakukan simpan maupun ubah data
	public function simpan_data(){
    
    $email_customer = $this->input->post('email');
    $data_form = $this->m_booking_fee->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    //$simpan_data = $this->m_booking_fee->simpan_data_master($data_form,$this->nama_tabel,$this->primary_key,$id);

    $simpan = $this->db->query("insert into t_booking_fee set kode_ttbf = '".$data_form['kode_ttbf']."',priority_code = '".$data_form['priority_code']."',id_sales = '".$data_form['id_sales']."',id_customer = '".$data_form['id_customer']."', date_assign = '".date('Y-m-d H:i:s')."', upload_bukti_transfer = '".$data_form['upload_bukti_transfer']."' ");


    $simpan_foto = $this->upload_foto();

   		$isiEmail = "Berikut adalah kode TTBF anda : ".$data_form['kode_ttbf']."   <br>
        Sekian dan Terima Kasih";

        $mail = new PHPMailer();
        $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        //$mail->Host       = "srv27.niagahoster.com";      // setting GMail as our SMTP server
       
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "sawunggalihapik@gmail.com";  // alamat email kamu
        $mail->Password   = "cahkentir";            // password GMail
        $mail->SetFrom('sawunggalihapik@gmail.com', 'noreply');  //Siapa yg mengirim email
        $mail->Subject    = "Informasi TTBF dan Priority Code";
        $mail->Body       = $isiEmail;
        
        $mail->AddAddress($email_customer);
       
       if($mail->Send()){
        echo "<script language=javascript>
             alert('Priority Code berhasil dikirim, Silahkan buka email anda');
             window.location='" . base_url('booking_fee') . "';
                 </script>";
       }
  	 
  

	}
	

  public function print_ttbf(){
     $id = $this->uri->segment(3);
     echo $id;
     $sql = "select a.*,b.nama as nama_customer,b.kode_pelanggan,b.email,b.alamat,b.no_hp,c.nik,c.nama as nama_sales from t_booking_fee a
INNER JOIN m_customer b on b.id = a.id_customer
INNER JOIN m_sales c on c.id = a.id_sales";
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
              $html = $this->load->view('booking_fee/cetak_ttbf', $data, true);

              $this->pdf->writeHTML($html, true, false, true, false, "");
              ob_end_clean();
              //$this->pdf->Output("Employee Information.pdf", "I");
              $this->pdf->Output('c:/xampp/htdocs/tnd/store_files/filename.pdf', 'I');
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
