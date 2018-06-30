<!-- Bootstrap core and JavaScript
	====================================================== -->

	<!-- Placed at the end of the document so the  pages load faster -->
	<div class="footer">
		<div class="container">
			<p class="footerLinks">
				<a href="/" target="_BLANK" title="MangaSee Home Page">Home</a>
				<a href="/contact/" target="_BLANK" title="Contact MangaSee">Contact</a>
			</p>
			<p class="footerCopyright">
				Copyright © MangaSee 2018
			</p>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.min.js'?>"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
	<script type="text/javascript">
	// $.noConflict();
    var id_manga = $('#idM').val();
    var title = $('#titl').val();
	$(document).ready(function(){
        show_chapter(); //call function show all product

        // $('#mydata').dataTable();
          
        //function show all chapter
        function show_chapter(){
            $.ajax({
                type  : 'post',
                url   : '<?php echo base_url();?>index.php/Admin/getChapter',
                data : {id_manga:id_manga},
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                         html += '<tr>'+
                            '<td>'+data[i].chapter+'</td>'+
                            '<td width="70%">Chapter '+data[i].chapter+'</td>'+
                            '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_detail" data-id_manga="'+data[i].id_manga+'" data-chapter="'+data[i].chapter+'">Detail</a>'+
                            '</td>'+
                            '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_manga="'+data[i].id_manga+'" data-chapter="'+data[i].chapter+'">Delete</a>'+
                            '</td>'+
                            '</tr>'; 	
                    }
                    $('#show_data').html(html);

                    $(".table").DataTable();
                    
                }
 
            });
        }

        // $('#addManga').validate({ // initialize the plugin
        //     rules: {
        //         field1: {
        //             required: true,
        //             email: true
        //         },
        //         field2: {
        //             required: true,
        //             minlength: 5
        //         }
        //     }
        // });

        $("#btn_save").click(function(){
            var page = $('#page').val();
            var numberReg =  /^[0-9]+$/;
            var allReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

            var chp = $('#chapter').val();
            $('.error').hide();
            if(chp == ""){
                $('#errorLabel').after('<span class="error"> Please enter chapter</span>');
            }
            else if(!numberReg.test(page)){
                $('#errorLabel').after('<span class="error"> Numbers only</span>');
            }
            else{
                $('#idManga').attr('value',$('#idM').val());
                $('#cpt').attr('value',$('#chapter').val());
                $('#tite').attr('value',$('#titl').val());
                $('#loop').attr('value',page);
                var isi = '';
                $('#addManga').trigger("reset");
                $('#Modal_Add').modal('hide');
                for (var i = 1; i <= page; i++) {
                    isi += '<div class="form-group row">'+
                            '<label class="col-md-2 col-form-label">Page '+i+'</label>'+
                            '<div class="col-md-10">'+
                            '<input type="file" name="file'+i+'" required>'+
                            '</div>'+
                            '</div>';
                }
                $('#dynamic_form').html(isi);
                $('#Modal_Add_Page').modal('show');
            }
        });

        //Save manga
        $('#addMangaPage').submit(function(e){
	        e.preventDefault();
			$.ajax({
	           url:'<?php echo base_url();?>index.php/Admin/upload_page', //URL submit
	           type:"post", //method Submit
	           data:new FormData(this), //penggunaan FormData
	           processData:false,
	           contentType:false,
	           cache:false,
	           async:false,
	           success: function(data){
                    $('#Modal_Add_Page').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty();	
                    show_chapter();
	            }
	        });
            return false;
        });

        //get data for link detail
        $('#show_data').on('click','.item_detail',function(){
            var id_manga = $(this).data('id_manga');
            var chapter = $(this).data('chapter');
             
            setTimeout(' window.location.href = "<?php echo site_url(); ?>/Admin/page/'+id_manga+'/'+chapter+'" ',500);
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id_manga = $(this).data('id_manga');
            var chapter = $(this).data('chapter');
             
            $('#Modal_Delete').modal('show');
            $('[name="id_manga_delete"]').val(id_manga);
            $('[name="chapter_delete"]').val(chapter);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var id_manga_delete = $('#id_manga_delete').val();
            var chapter_delete = $('#chapter_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/delete_chapter",
                dataType : "JSON",
                data : {id_manga:id_manga_delete,chapter:chapter_delete,title:title},
                success: function(){
                    $('[name="id_manga_delete"]').val("");
                    $('[name="chapter_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty();	
                    show_chapter();
                }
            });
            return false;
        });
 
    });
	</script>
	</body>
</html>
