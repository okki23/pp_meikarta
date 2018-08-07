 
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
                                Pilih Unit
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
                                            <th style="width:5%;">Kode PU</th>  
											<th style="width:5%;">Customer</th>  
											<th style="width:5%;">Blok Tower</th> 
											<th style="width:5%;">Lantai</th> 
											<th style="width:5%;">No Unit</th> 
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
                <div class="modal-dialog modal-lg modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                             <h4 class="modal-title" id="defaultModalLabel">Form PU</h4>
							 <div align="right">
							 <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>
							 </div>
                        </div>
                        <div class="modal-body">
						
						
						<form id="wizard_with_validation" method="POST" >
                                <h3>Periksa Priority Code</h3>
                                <fieldset>
                                    <div class="form-group">
                                        
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="priority_code" id="priority_code" class="form-control" required readonly="readonly" >
                                                    <input type="hidden" name="id_bf" id="id_bf" required>
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="CariPriorityCode();" class="btn btn-primary"> Cari Priority Code... </button>
                                                </span>
                                            </div>
                                        
                                    </div>
									<div id="ceklis">
										<div class="col-md-12">
										
											<div class="col-md-2">
												<img src="<?php echo base_url('ceklis.gif'); ?>" width="75">
											</div>
											
											<div class="col-md-10">
												<div class="alert bg-green">
												Priority Code Berhasil Di Input dan Dapat digunakan untuk proses PU !
												</div>
											</div>
										
										</div> 
									</div>
                                </fieldset>

                                <h3>Pilih Unit</h3>
                                <fieldset>
                                    <div class="form-group">
                                        <div class="form-line">
											<b>Kode Konfirmasi Pesanan</b>
                                            <input type="text" name="no_pu" id="no_pu" class="form-control" readonly="readonly" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
											<b>Nama Customer</b>
      
                                                    <input type="text" name="nama_customer" id="nama_customer" class="form-control" required readonly="readonly" >
                                                    <input type="text" name="id_customer" id="id_customer" required>
													<button type="button" onclick="CariCustomer();" class="btn btn-primary"> Cari Customer... </button>
                                            </div>
                                           
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
											<b>Nama Sales</b>
      
                                                    <input type="text" name="nama_sales" id="nama_sales" class="form-control" required readonly="readonly" >
                                                    <input type="text" name="id_sales" id="id_sales" required>
													<button type="button" onclick="CariSales();" class="btn btn-primary"> Cari Customer... </button>
                                            </div>
                                           
                                    </div>
                                 
                                    <div class="form-group form-float">
											<div class="form-line">
                                                    <input type="text" name="priority_code" id="priority_code" class="form-control" required readonly="readonly" >
                                                    <input type="hidden" name="id_bf" id="id_bf" required>
                                            </div>
                                            <span class="input-group-addon">
                                                    <button type="button" onclick="CariCustomer();" class="btn btn-primary"> Cari Customer... </button>
                                            </span>
                                    </div>
                                    <div class="form-group form-float">
											<div class="form-line">
                                                    <input type="text" name="priority_code" id="priority_code" class="form-control" required readonly="readonly" >
                                                    <input type="hidden" name="id_bf" id="id_bf" required>
                                            </div>
                                            <span class="input-group-addon">
                                                    <button type="button" onclick="CariSales();" class="btn btn-primary"> Cari Sales ... </button>
                                            </span>
                                    </div>
                                    <div class="form-group form-float">
											<div class="form-line">
                                                    <input type="text" name="priority_code" id="priority_code" class="form-control" required readonly="readonly" >
                                                    <input type="hidden" name="id_bf" id="id_bf" required>
                                            </div>
                                            <span class="input-group-addon">
                                                    <button type="button" onclick="CariUnit();" class="btn btn-primary"> Cari Sales ... </button>
                                            </span>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input min="18" type="number" name="age" class="form-control" required>
                                            <label class="form-label">Cicilan</label>
                                        </div> 
                                    </div>
									<div class="form-group form-float">
										<div class="form-line">
                                            <input type="text" name="priority_code" id="priority_code" class="form-control" required readonly="readonly" >
                                            <input type="hidden" name="id_bf" id="id_bf" required>
                                        </div>
										<span class="input-group-addon">
                                            <button type="button" onclick="CariBank();" class="btn btn-primary"> Cari Bank ... </button>
                                        </span>	
									  
									  
                                    </div>
                                </fieldset>

                                <h3>Syarat dan Ketentuan - Selesai </h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">Dengan ini saya telah menyepakati proses PU dan Sistem akan mencetak bukti Konfirmasi Pesanan.</label>
                                </fieldset>
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

    <!-- modal cari priority code -->
    <div class="modal fade" id="CariPriorityCodeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" >Pilih Priority Code</h4>
							 <div align="right">
							 <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>
							 </div>
						</div>
                        <div class="modal-body">
 

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_prioritycode" >
   
                                    <thead>
                                        <tr> 
                                            <th style="width:5%;"></th>
                                            <th style="width:5%;">Kode TTBF</th>
                                            <th style="width:5%;">Priority Code</th> 
                                            <th style="width:5%;">Nama Customer</th> 
                                            <th style="width:5%;">Nama Sales</th> 
											<th style="width:5%;">Tanggal Booking Fee</th> 
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_prioritycodex">

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
                                <img src="" width="100%" class="img responsive" id="upload_bukti_transfer_dtl">
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
	
	function CariPriorityCode(){
        $("#CariPriorityCodeModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function CariSales(){
        $("#CariSalesModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

	function Show_Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>pu/get_data_edit/"+id,
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
			 url:"<?php echo base_url(); ?>pu/get_data_edit/"+id,
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
        
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('pu/hapus_data')?>/"+id,
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
         var upload_bukti_transfer = $("#no_pu").val();
		 
         if(id_customer == ''){
            alert("Blok Tower Belum anda masukkan!");
            $("#blok_tower").parents('.form-line').addClass('focused error');
            $("#blok_tower").focus();
         }else if(id_sales == ''){
            alert("Tipe Belum anda masukkan!");
            $("#tipe").parents('.form-line').addClass('focused error');
            $("#tipe").focus();
         	alert('Anda Belum Unggah Foto!');
		 }else if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
			alert("Format File yang diizinkan adalah JPEG,GIF,PNG,JPG !");  
            $('#user_image').val('');  
            return false;  
		 }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>pu/simpan_data",
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
		$("#ceklis").hide();
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', overflow:'auto', keyboard: false,show:true});
            $("#method").val('Add');
			Bersihkan_Form();
			$("#ceklis").hide();
			$("#kode_ttbf").prop("readonly",true);
            $.get("<?php echo base_url('pu/generate_no_pu');?>",function(data){
            $("#no_pu").val(data);
            });
           /*  $("#kode_ttbf").prop("readonly",true);
            $.get("<?php echo base_url('pu/generate_ttbf');?>",function(data){
               $("#kode_ttbf").val(data);
            });

            $.get("<?php echo base_url('pu/generate_priority_code');?>",function(datax){
               $("#priority_code").val(datax);
            }); */
		});
		
	 
		
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>pu/fetch_pu" 
		});

        $('#daftar_customer').DataTable( {
            "ajax": "<?php echo base_url(); ?>pu/fetch_nama_customer" 
        });

        $('#daftar_sales').DataTable( {
            "ajax": "<?php echo base_url(); ?>pu/fetch_nama_sales" 
        });
		
		$('#daftar_prioritycode').DataTable( {
            "ajax": "<?php echo base_url(); ?>pu/get_priority_code_assign" 
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

            $("#nama_sales").val(content[0]);
            $("#id_sales").val(content[2]);
            $("#CariSalesModal").modal('hide');
        } );
		
		var daftar_prioritycode = $('#daftar_prioritycode').DataTable();
     
        $('#daftar_prioritycode tbody').on('click', 'tr', function () {
            
            var content = daftar_prioritycode.row(this).data()
            console.log(content);

            $("#id_bf").val(content[0]);
            $("#priority_code").val(content[2]);
			$("#ceklis").show();
            $("#CariPriorityCodeModal").modal('hide');
			
        } );
     
	 
	 
		 
	  });
  
		
		 
    </script>