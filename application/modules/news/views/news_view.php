 
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
                                News List
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
                                            <th style="width:5%;">Title</th> 
											<th style="width:5%;">Content</th>
											<th style="width:5%;">Tanggal Terbit</th>
											<th style="width:10%;">Opsi</th> 
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
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
									 
                                    <input type="hidden" name="id" id="id"> 
                                      <input type="hidden" name="published_date" id="published_date" value="<?php echo ('Y-m-d H:i:s'); ?>"> 
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Title" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
 
                                            <textarea id="content" name="content"> 
											</textarea>
                                        </div>
                                    </div>
									 
								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>
			
<script type="text/javascript">

function elFinderBrowser(callback, value, meta) {
    tinymce.activeEditor.windowManager.open({
        file: '<?php echo base_url("file_manager/filetes"); ?>', // use an absolute path!
        title: 'Files Manager',
        width: 900,
        height: 450,
        resizable: 'yes'
    }, {
        oninsert: function (file, elf) {
            var url, reg, info;

            // URL normalization
            url = file;

            reg = "\/[^/]+?\/\.\.\/";
            while (url.match(reg)) {
                url = url.replace(reg, '/');
            }

            var split_info = file.split("/");

            var filename = split_info[split_info.length - 1];
            
            var getsize = 0;
            get_filesize(file, function (size) {
                //alert("The size of " + filename + " is: " + size + " bytes.");
                getsize = size;
            });
            
            // Make file info
            info = filename + ' (' + elf.formatSize(getsize) + ')';

            // Provide file and text for the link dialog
            if (meta.filetype == 'file') {
                callback(url, {text: info, title: info});
            }

            // Provide image and alt text for the image dialog
            if (meta.filetype == 'image') {
                callback(url, {alt: info});
            }

            // Provide alternative source and posted for the media dialog
            if (meta.filetype == 'media') {
                callback(url);
            }
        }
    });
    return false;
}

// TinyMCE init
tinymce.init({
    selector: "#content",

    force_p_newlines: false,
    setup: function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave();
            });
        },
    height: 200,
        plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker"
    ],
    relative_urls: false,
    remove_script_host: false,

    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    file_picker_callback: elFinderBrowser
});

 

function get_filesize(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("HEAD", url, true); // Notice "HEAD" instead of "GET",
    //  to get only the header
    xhr.onreadystatechange = function () {
        if (this.readyState == this.DONE) {
            callback(parseInt(xhr.getResponseHeader("Content-Length")));
        }
    };
    xhr.send();
}
 </script>
 
   <script type="text/javascript">
     function stripHTML(dirtyString) {
	  var container = document.createElement('div');
	  var text = document.createTextNode(dirtyString);
	  container.appendChild(text);
	  return container.innerHTML; // innerHTML will be a xss safe string
	}
	
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>news/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){ 
                console.log(result);
				 
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id); 
                 $("#title").val(result.title);
                  //var ngehe = "\n\n\n\n \nde\n \n";
                //tinymce.activeEditor.setContent('');
                 tinymce.get("content").setContent(result.content);
               
				 //$("#content").val($("<div>").html(result.content).text());
				 // tinymce.get("content").setContent(result.content);
                 $("#tanggal_terbit").val(result.tanggal_terbit); 
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
        $("#image1").attr('src','<?php echo base_url('upload/image_prev.jpg'); ?>');
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?')){
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('news/hapus_data')?>/"+id,
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
		 var content = tinymce.get('content').getContent();
         //var content = $('#content').html(tinymce.get('content').getContent() );
         var id = $("#id").val();
		 var title = $("#title").val();
		 var tanggal_terbit = $("#tanggal_terbit").val();
		   
            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>news/simpan_data",
             type:"POST",
             data:{id,title,content},
             dataType:"json",
             success:function(result){ 
			 
			 //console.log(result);
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 tinymce.activeEditor.setContent('');
                 $.notify("Data berhasil disimpan!", {
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
     

	 $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
     });

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

	 
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');

           
			tinymce.get("content").setContent('');
			   
            $("#defaultModalLabel").html("Form Tambah Data");
		});
		
		 
		
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>news/fetch_news" 
		});
	 
	 
		 
	  });
  
		
		 
    </script>