 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Booking Fee
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
 
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr>
											<th style="width:5%;">No</th>
                                            <th style="width:5%;">Kode TTBF </th>  
											<th style="width:5%;">Customer</th>  
											<th style="width:5%;">Sales</th> 
											<th style="width:5%;">Priority Code</th> 
											<th style="width:15%;">Opsi</th> 
										</tr>
									</thead> 
								</table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         


        </div>
    </section>

   
	<!-- form tambah dan ubah data -->
	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
                                
                                    <input type="hidden" name="id" id="id"> 
                                    <input type="hidden" name="priority_code" id="priority_code" class="form-control" readonly="readonly"/>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kode_ttbf" id="kode_ttbf" class="form-control" readonly="readonly" />
                                        </div>
                                    </div>
 
									<div class="form-group">
                                        
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <b> Nama Customer </b>
                                                    <input type="text" name="nama_customer" id="nama_customer" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_customer" id="id_customer">
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="CariCustomer();" class="btn btn-primary"> Cari Customer... </button>
                                                </span>
                                            </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <b> Nama Sales </b>
                                                    <input type="text" name="nama_sales" id="nama_sales" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_sales" id="id_sales">
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="CariSales();" class="btn btn-primary"> Cari Sales... </button>
                                                </span>
                                            </div>
                                        
                                    </div>
								 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Upload Bukti Transfer</b>
                                            <input type="file" name="user_bukti" id="user_bukti" class="form-control" onchange="ShowFileName(this);" />  
                                        </div>
                                           <input type="hidden" name="upload_bukti_transfer" id="upload_bukti_transfer">
                                           <br>
                                    <img onerror="this.onerror=null;this.src='<?php echo base_url('upload/image_prev.jpg'); ?>';" id="image1" src="<?php echo base_url('upload/image_prev.jpg');?>" style="height: 100px;" alt="..." class="img-rounded img-responsive">
                                    </div>
                                 

								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>
	
 
    <!-- modal cari customer -->
    <div class="modal fade" id="CariCustomerModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" >Cari Customer</h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_customer" >
  
                                    <thead>
                                        <tr> 
                                            <th style="width:5%;"></th>
                                            <th style="width:5%;">Kode Pelanggan</th>
                                            <th style="width:5%;">Nama</th> 
                                            <th style="width:5%;">Email</th> 
                                            <th style="width:10%;">Alamat</th> 
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_customerx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal cari sales -->
    <div class="modal fade" id="CariSalesModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" >Cari Sales</h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_sales" >
  
                                    <thead>
                                        <tr> 
                                            <th style="width:5%;"></th>
                                            <th style="width:5%;">NIK</th>
                                            <th style="width:5%;">Nama</th> 
                                            <th style="width:5%;">No Telp</th> 
                                            <th style="width:10%;">Email</th> 
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_salesx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- detail data customer -->
    <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Booking Fee</h4>
                        </div>
                        <div class="modal-body">
                        
                        <table class="table table-responsive">
                            <tr>
                                <td style="font-weight:bold;"> Kode TTBF</td>
                                <td> : </td>
                                <td> <p id="kode_ttbf_dtl"> </p> </td>
                                
                                <td style="font-weight:bold;"> Priority Code</td>
                                <td> : </td>
                                <td> <p id="priority_code_dtl"> </p> </td> 
                            </tr>
                            <tr>
                                <td style="font-weight:bold;"> Nama Customer</td>
                                <td> : </td>
                                <td> <p id="nama_customer_dtl"> </p> </td>
                                
                                <td style="font-weight:bold;"> Nama Sales</td>
                                <td> : </td>
                                <td> <p id="nama_sales_dtl"> </p> </td> 
                            </tr>
                            
                            <tr>
                                <td style="font-weight:bold;"> Upload Booking Fee  </td> 
                                <td colspan="4">  : </td> 
                            </tr> 
                            <tr>
                                <td colspan="6" align="center">  
                                <img src="" width="50%" class="img responsive" id="upload_bukti_transfer_dtl">
                                </td>
                            </tr>
                         
                             <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
                             </div>
                        </table>
                           
                       </div>
                     
                    </div>
                </div>
    </div>
			
 
   <script type="text/javascript">
	
     function ShowFileName(input) {
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
               $('#image1').attr('src', e.target.result);
				$("#upload_bukti_transfer").val($('#user_bukti').val().replace(/C:\\fakepath\\/i, ''));
            };
            reader.readAsDataURL(input.files[0]);
			
        }
     }
	 
    function CariCustomer(){
        $("#CariCustomerModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function CariSales(){
        $("#CariSalesModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

	function Show_Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>booking_fee/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
			 
                 $("#kode_ttbf_dtl").html(result.kode_ttbf);
                 $("#priority_code_dtl").html(result.priority_code);
                 $("#nama_sales_dtl").html(result.nama_sales); 
				 $("#nama_customer_dtl").html(result.nama_customer); 
				  
				 
				 $("#upload_bukti_transfer_dtl").attr("src","upload/"+result.upload_bukti_transfer);
				 
				 
				 
			 }
		 });
	 }
       
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>booking_fee/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){ 
                
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#kode_ttbf").val(result.kode_ttbf);
                 $("#priority_code").val(result.priority_code);
                 $("#nama_sales").val(result.nama_sales);
				 $("#nama_customer").val(result.nama_customer);
				 $("#id_sales").val(result.id_sales);
                 $("#id_customer").val(result.id_customer);
				 
                 $("#upload_bukti_transfer").val(result.upload_bukti_transfer);
                 $('#image1').attr('src',"upload/"+result.upload_bukti_transfer);
                  
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
        $("#image1").attr('src','<?php echo base_url('upload/image_prev.jpg'); ?>');
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('booking_fee/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
			   
               $('#example').DataTable().ajax.reload(); 
			   
			    $.notify("Data berhasil dihapus!", {
					animate: {
						enter: 'animated fadeInRight',
						exit: 'animated fadeOutRight'
					}  
				 },{
					type: 'success'
					});
				 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
   
    }
	}
     
    $('.thumbnail').on('click',function(){
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#Prev').modal({show:true});
    });
  
	function Simpan_Data(){
		//setting semua data dalam form dijadikan 1 variabel 
		 var formData = new FormData($('#user_form')[0]); 

         //validasi tipe file anda sebelum submit ke controller
         
         var upload_bukti_transfer = $('#upload_bukti_transfer').val();
		 var extension = $('#upload_bukti_transfer').val().split('.').pop().toLowerCase();  
 
 
         //validasi form sebelum submit ke controller
         var id_customer = $("#tipe").val();
         var id_sales = $("#lantai").val();
         var upload_bukti_transfer = $("#no_booking_fee").val();
		 
         if(id_customer == ''){
            alert("Blok Tower Belum anda masukkan!");
            $("#blok_tower").parents('.form-line').addClass('focused error');
            $("#blok_tower").focus();
         }else if(id_sales == ''){
            alert("Tipe Belum anda masukkan!");
            $("#tipe").parents('.form-line').addClass('focused error');
            $("#tipe").focus();
         	alert('Anda Belum Unggah Foto!');
		 }else if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','pdf','doc','docx']) == -1){
			alert("Format File yang diizinkan adalah JPEG,GIF,PNG,JPG,'PDF','DOC','DOCX' !");  
            $('#user_image').val('');  
            return false;  
		 }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>booking_fee/simpan_data",
             type:"POST",
             data:formData,
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 $("#image1").attr("src","<?php echo base_url(); ?>/upload/image_prev.jpg");
                 $.notify("Data berhasil disimpan!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                 } 
                 } );
             }
            }); 

         }

	}
     

	 $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
     });

	 
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
            $("#kode_ttbf").prop("readonly",true);
            $.get("<?php echo base_url('booking_fee/generate_ttbf');?>",function(data){
               $("#kode_ttbf").val(data);
            });

            $.get("<?php echo base_url('booking_fee/generate_priority_code');?>",function(datax){
               $("#priority_code").val(datax);
            });
		});
		
		$("#addmodalx").on("click",function(){
			$("#defaultModalx").modal({backdrop: 'static', keyboard: false,show:true});
            $("#defaultModalLabel").html("Form Tambah Datax");
		});
		
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>booking_fee/fetch_booking_fee" 
		});

        $('#daftar_customer').DataTable( {
            "ajax": "<?php echo base_url(); ?>booking_fee/fetch_nama_customer" 
        });

        $('#daftar_sales').DataTable( {
            "ajax": "<?php echo base_url(); ?>booking_fee/fetch_nama_sales" 
        });

        var daftar_customer = $('#daftar_customer').DataTable();
     
        $('#daftar_customer tbody').on('click', 'tr', function () {
            
            var content = daftar_customer.row(this).data()
            console.log(content);

            $("#nama_customer").val(content[2]);
            $("#id_customer").val(content[0]);
            $("#CariCustomerModal").modal('hide');
        } );

         var daftar_sales = $('#daftar_sales').DataTable();
     
        $('#daftar_sales tbody').on('click', 'tr', function () {
            
            var content = daftar_sales.row(this).data()
            console.log(content);

            $("#nama_sales").val(content[2]);
            $("#id_sales").val(content[0]);
            $("#CariSalesModal").modal('hide');
        } );
     
	 
	 
		 
	  });
  
		
		 
    </script>