 
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
                                Validasi PPPU
                            </h2>
                            
                        </div>
                        <div class="body"> 
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr>
											<th style="width:1%;">No</th>
											<th style="width:5%;">Nama Customer</th> 
                                            <th style="width:5%;">Blok Tower</th>  
											<th style="width:3%;">Kode BF</th>  
											<th style="width:3%;">Kode PU</th>  
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
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Validasi PPPU</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
                                
                                    <input type="hidden" name="id" id="id"> 
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="blok_tower" id="blok_tower" class="form-control" placeholder="Blok Tower" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="tipe" id="tipe" class="form-control" placeholder="Tipe" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lantai" id="lantai"  class="form-control" placeholder="Lantai" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="luas" id="luas"  class="form-control" placeholder="Luas" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="no_validasi_pppu" id="no_validasi_pppu" class="form-control" placeholder="No validasi_pppu" />
                                        </div>
                                    </div> 
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga" />
                                        </div>
                                    </div> 

									<div class="form-group">
                                        <div class="form-line">
											Upload Foto 
											<input type="file" name="user_image" id="user_image" class="form-control" onchange="PreviewGambar(this);" placeholder="Foto" />  
                                        </div>
										   <input type="hidden" name="foto" id="foto">
                                    </div>
                                    <br>
                                    <img onerror="this.onerror=null;this.src='<?php echo base_url('upload/image_prev.jpg'); ?>';" id="image1" src="<?php echo base_url('upload/image_prev.jpg');?>" style="height: 300px;" alt="..." class="img-rounded img-responsive">
                                  <br>
								  

								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>
	
	<!-- detail data customer -->
	<div class="modal fade" id="DetailPPPU" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail PPPU</h4>
                        </div>
                        <div class="modal-body">
						<input type="tex">
						 Ini halaman buat validasi P3U
                         <br>
                         Anda yakin mau print PPPU?
                         <button type="button" class="btn btn-primary" onclick="SubmitValidasi();" > Validasi PPPU </button>
						 </div>
							 <div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
							 </div>
						</table>
                           
					   </div>
                     
                    </div>
                </div>
    </div>
			
 
   <script type="text/javascript">
	
     function PreviewGambar(input) {
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image1').attr('src', e.target.result);
				$("#foto").val($('#user_image').val().replace(/C:\\fakepath\\/i, ''));
            };
            reader.readAsDataURL(input.files[0]);
			
        }
     }
	 

     function Validasi(id){
        if(confirm('Anda yakin ingin memvalidasi PPPP ini?')){
            $.ajax({
            url:"<?php echo base_url('validasi_pppu/validasi'); ?>",
            type:"POST",
            data:{idpos:id},
            success:function(result){
                $('#example').DataTable().ajax.reload(); 
                console.log(result);
                  $.notify("Berhasil validasi PPPU !", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                    }  
                 },{
                    type: 'success'
                    });
                }
            });
        }
        
     }
	 function Show_Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>validasi_pppu/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
			 
                 $("#blok_tower_dtl").html(result.blok_tower);
                 $("#tipe_dtl").html(result.tipe);
                 $("#no_validasi_pppu_dtl").html(result.no_validasi_pppu); 
				 $("#lantai_dtl").html(result.lantai); 
				 $("#harga_dtl").html(result.harga);
				 $("#luas_dtl").html(result.luas);
				 $("#foto_validasi_pppu_dtl").attr("src","upload/"+result.foto);
				 
				 
				 
			 }
		 });
	 }
       
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>validasi_pppu/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){ 
                
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#tipe").val(result.tipe);
                 $("#lantai").val(result.lantai);
                 $("#no_validasi_pppu").val(result.no_validasi_pppu);
				 $("#foto").val(result.foto);
				 $("#blok_tower").val(result.blok_tower);
                 $("#luas").val(result.luas);
				 $("#harga").val(result.harga);
                 $('#image1').attr('src',"upload/"+result.foto);
                  
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
            url : "<?php echo base_url('validasi_pppu/hapus_data')?>/"+id,
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
         
         var foto = $('#foto').val();
		 var extension = $('#foto').val().split('.').pop().toLowerCase();  
 
 
         //validasi form sebelum submit ke controller
         var tipe = $("#tipe").val();
         var lantai = $("#lantai").val();
         var no_validasi_pppu = $("#no_validasi_pppu").val();
		 var blok_tower = $("#blok_tower").val();
         var harga = $("#harga").val();
         var luas = $("#luas").val();
       
         if(blok_tower == ''){
            alert("Blok Tower Belum anda masukkan!");
            $("#blok_tower").parents('.form-line').addClass('focused error');
            $("#blok_tower").focus();
         }else if(tipe == ''){
            alert("Tipe Belum anda masukkan!");
            $("#tipe").parents('.form-line').addClass('focused error');
            $("#tipe").focus();
         }else if(lantai == ''){
            alert("Lantai Belum anda masukkan!");
            $("#lantai").parents('.form-line').addClass('focused error');
            $("#lantai").focus();
		 }else if(luas == ''){
            alert("Luas Belum anda masukkan!");
            $("#luas").parents('.form-line').addClass('focused error');
            $("#luas").focus();
		 }else if(no_validasi_pppu == ''){
            alert("No validasi_pppu Belum anda masukkan!");
            $("#no_validasi_pppu").parents('.form-line').addClass('focused error');
            $("#no_validasi_pppu").focus();
		 }else if(harga == ''){
            alert("Harga Belum anda masukkan!");
            $("#harga").parents('.form-line').addClass('focused error');
            $("#harga").focus();
         }else if(foto == ''){
			alert('Anda Belum Unggah Foto!');
		 }else if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
			alert("Format File yang diizinkan adalah JPEG,GIF,PNG,JPG !");  
            $('#user_image').val('');  
            return false;  
		 }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>validasi_pppu/simpan_data",
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
		});
		
		$("#addmodalx").on("click",function(){
			$("#defaultModalx").modal({backdrop: 'static', keyboard: false,show:true});
            $("#defaultModalLabel").html("Form Tambah Datax");
		});
		
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>validasi_pppu/fetch_validasi_pppu" 
		});
	 
	 
		 
	  });
  
		
		 
    </script>