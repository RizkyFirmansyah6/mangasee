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
	$(document).ready(function(){
        show_manga(); //call function show all product

        // $('#mydata').dataTable();
        var flag = false;
          
        //function show all manga
        function show_manga(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/Admin/getManga',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                    	if (data[i].is_recomended == 1) {
                         html += '<tr>'+
                                '<td>'+data[i].title+'</td>'+
                                '<td>'+data[i].alt_name+'</td>'+
                                '<td>'+data[i].author+'</td>'+
                                '<td>'+data[i].year+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td>'+data[i].description+'</td>'+
                                '<td><img src="<?=base_url()?>./assets/images/cover/'+data[i].cover+'" height="160" width="100"></td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_detail" data-id_manga="'+data[i].id_manga+'">Chapter</a>'+
                                '</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-success btn-sm disabled item_recomend" data-id_manga="'+data[i].id_manga+'">Recomended</a>'+
                                '</td>'+
                                '<td>'+
                                    '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id_manga="'+data[i].id_manga+'" data-title="'+data[i].title+'" data-alt_name="'+data[i].alt_name+'" data-author="'+data[i].author+'" data-year="'+data[i].year+'" data-status="'+data[i].status+'" data-description="'+data[i].description+'" data-lcover="'+data[i].cover+'">Edit</a>'+
                                '</td>'+
                                '<td>'+
                                	'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_manga="'+data[i].id_manga+'" data-title="'+data[i].title+'">Delete</a>'+
                                '</td>'+
                                '</tr>'; 	
                        } else {
                        	html += '<tr>'+
                                '<td>'+data[i].title+'</td>'+
                                '<td>'+data[i].alt_name+'</td>'+
                                '<td>'+data[i].author+'</td>'+
                                '<td>'+data[i].year+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td>'+data[i].description+'</td>'+
                                '<td><img src="<?=base_url()?>./assets/images/cover/'+data[i].cover+'" height="160" width="100"></td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_detail" data-id_manga="'+data[i].id_manga+'">Chapter</a>'+
                                '</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-success btn-sm item_recomend" data-id_manga="'+data[i].id_manga+'">Recomend</a>'+
                                '</td>'+
                                '<td>'+
                                    '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id_manga="'+data[i].id_manga+'" data-title="'+data[i].title+'" data-alt_name="'+data[i].alt_name+'" data-author="'+data[i].author+'" data-year="'+data[i].year+'" data-status="'+data[i].status+'" data-description="'+data[i].description+'" data-lcover="'+data[i].cover+'">Edit</a>'+
                                '</td>'+
                                '<td>'+
                                	'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_manga="'+data[i].id_manga+'" data-title="'+data[i].title+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                        }
                    }
                    $('#show_data').html(html);

                    $(".table").DataTable();
                    
                }
 
            });
        }

        $('#title').on('change',function(){
            var title = $('#title').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Admin/checkTitle') ?>",
                dataType : "JSON",
                data : {title:title},
                success: function(response){
                    if(response.error){
                        $('#message').html(response.message);
                        $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
                        // flag = true;
                    }else{
                        $('#responseDiv').hide();
                        // flag = false;
                    }
                }
            });
            return false;
        });

        //Save manga
        $('#addManga').submit(function(e){
	        e.preventDefault();
			var title = $('#title').val();
            if(flag){
            
            }
            else{
                $.ajax({
                   url:'<?php echo base_url();?>index.php/Admin/upload_manga', //URL submit
                   type:"post", //method Submit
                   data:new FormData(this), //penggunaan FormData
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                   success: function(data){

                   }
                });
                $.ajax({
                    url: '<?php echo base_url();?>index.php/Admin/getMangaId',
                    method: 'POST',
                    dataType: 'json',
                    async:false,
                    data: {
                        title: title
                    }, success: function (data) {
                        $('#idM').attr('value',data[0].id_manga);
                    }
                });
                $.ajax({
                    url:'<?php echo base_url();?>index.php/Admin/check', //URL submit
                    type:"post", //method Submit
                    data:new FormData(this), //penggunaan FormData
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#addManga').trigger("reset");
                    //  $("#addManga").find('input:text, input:password, input:file, select, textarea').val('');
                    //  $("#addManga").find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
                    //  jQuery.noConflict();
                        $('#Modal_Add').modal('hide');
                        $(".table").DataTable().destroy();
                        $('tbody').empty(); 
                        show_manga();
                    }
                });
            }
            return false;
        });

        //get data for link detail
        $('#show_data').on('click','.item_detail',function(){
            var id_manga = $(this).data('id_manga');
             
            setTimeout(' window.location.href = "<?php echo site_url(); ?>/Admin/chapter/'+id_manga+'" ',500);
        });

        //recomend this manga
        $('#show_data').on('click','.item_recomend',function(){
            var id_manga = $(this).data('id_manga');
             
            $('#Modal_Recomend').modal('show');
            $('[name="id_manga_recomend"]').val(id_manga);
        });

        //recomend record to database
         $('#btn_recomend').on('click',function(){
            var id_manga_recomend = $('#id_manga_recomend').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/recomend_manga",
                dataType : "JSON",
                data : {id_manga:id_manga_recomend},
                success: function(){
                    $('[name="id_manga_recomend"]').val("");
                    $('#Modal_Recomend').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty();	
                    show_manga();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
          var id_manga        = $(this).data('id_manga');
          var title           = $(this).data('title');
          var alt_name        = $(this).data('alt_name');
          var author          = $(this).data('author');
          var year            = $(this).data('year');
          var status          = $(this).data('status');
          var description     = $(this).data('description');
          var lcover          = $(this).data('lcover');
             
          $('#Modal_Edit').modal('show');
          $('[name="id_manga_edit"]').val(id_manga);
          $('[name="title_edit"]').val(title);
          $('[name="alt_name_edit"]').val(alt_name);
          $('[name="author_edit"]').val(author);
          $('[name="year_edit"]').val(year);
          $('[name="status_edit"]').val(status);
          $('#description_edit').text(description);
          $('[name="lcover"]').val(lcover);
          $(":checkbox[id=checkbox_edit]").prop("checked",false);
          $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/getGenre",
                dataType : "JSON",
                data : {id_manga:id_manga},
                success: function(data){
                    var i;
                    for(i=0; i<data.length; i++){
                        $(":checkbox[id=checkbox_edit][value="+data[i].id_genre+"]").prop("checked",true);
                    }
                }
            });
        });
        
        //update record to database
        $('#editManga').submit(function(e){
          e.preventDefault();
          $.ajax({
            url:'<?php echo base_url();?>index.php/Admin/edit_manga', //URL submit
            type:"post", //method Submit
            data:new FormData(this), //penggunaan FormData
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(data){
              $('#editManga').trigger("reset");
              $('#Modal_Edit').modal('hide');
              $(".table").DataTable().destroy();
              $('tbody').empty(); 
              show_manga();
            }
          });
          return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id_manga = $(this).data('id_manga');
            var title = $(this).data('title');
             
            $('#Modal_Delete').modal('show');
            $('[name="id_manga_delete"]').val(id_manga);
            $('[name="title_delete"]').val(title);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var id_manga_delete = $('#id_manga_delete').val();
            var title_delete = $('#title_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/delete_manga",
                dataType : "JSON",
                data : {id_manga:id_manga_delete,title:title_delete},
                success: function(){
                    $('[name="id_manga_delete"]').val("");
                    $('[name="title_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty();	
                    show_manga();
                }
            });
            return false;
        });
 
    });
	</script>
	</body>
</html>
