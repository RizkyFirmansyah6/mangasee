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
	$(document).ready(function(){
        show_user(); //call function show all product

        // $('#mydata').dataTable();
          
        //function show all manga
        function show_user(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/Admin/getUser',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                            '<td>'+data[i].id_user+'</td>'+
                            '<td>'+data[i].username+'</td>'+
                            '<td>'+data[i].email+'</td>';
                            if (data[i].is_admin == 1) {
                            html += '<td>Administrator</td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_dismiss" data-id_user="'+data[i].id_user+'">Dismiss</a>'+
                            '</td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm disabled item_suspend" data-id_user="'+data[i].id_user+'">Suspend</a>'+
                            '</tr>'; 
                            } else {
                        	html += '<td>User</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_promote" data-id_user="'+data[i].id_user+'">Promote</a>'+
                                '</td>'+
                                '<td>';
                                if (data[i].is_suspended == 1) {
                                    html += '<a href="javascript:void(0);" class="btn btn-success btn-sm item_revoke" data-id_user="'+data[i].id_user+'">Revoke</a>';
                                }else{
                                html += '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_suspend" data-id_user="'+data[i].id_user+'">Suspend</a>';
                                }
                                html += '</tr>';
                            }
                    }
                    $('#show_data').html(html);

                    $(".table").DataTable();
                    
                }
 
            });
        }

        //promote this user
        $('#show_data').on('click','.item_promote',function(){
            var id_user = $(this).data('id_user');
             
            $('#Modal_Promote').modal('show');
            $('[name="id_user_promote"]').val(id_user);
        });

        //promote record to database
         $('#btn_promote').on('click',function(){
            var id_user_promote = $('#id_user_promote').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/promote_user",
                dataType : "JSON",
                data : {id_user:id_user_promote},
                success: function(){
                    $('[name="id_user_promote"]').val("");
                    $('#Modal_Promote').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty();	
                    show_user();
                }
            });
            return false;
        });

        //dismiss this user
        $('#show_data').on('click','.item_dismiss',function(){
            var id_user = $(this).data('id_user');
             
            $('#Modal_Dismiss').modal('show');
            $('[name="id_user_dismiss"]').val(id_user);
        });

        //dismiss record to database
         $('#btn_dismiss').on('click',function(){
            var id_user_dismiss = $('#id_user_dismiss').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/dismiss_user",
                dataType : "JSON",
                data : {id_user:id_user_dismiss},
                success: function(){
                    $('[name="id_user_dismiss"]').val("");
                    $('#Modal_Dismiss').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty(); 
                    show_user();
                }
            });
            return false;
        });

        //suspend this user
        $('#show_data').on('click','.item_suspend',function(){
            var id_user = $(this).data('id_user');
             
            $('#Modal_Suspend').modal('show');
            $('[name="id_user_suspend"]').val(id_user);
        });

        //suspend record to database
         $('#btn_suspend').on('click',function(){
            var id_user_suspend = $('#id_user_suspend').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/suspend_user",
                dataType : "JSON",
                data : {id_user:id_user_suspend},
                success: function(){
                    $('[name="id_user_suspend"]').val("");
                    $('#Modal_Suspend').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty(); 
                    show_user();
                }
            });
            return false;
        });

        //revoke this user
        $('#show_data').on('click','.item_revoke',function(){
            var id_user = $(this).data('id_user');
             
            $('#Modal_Revoke').modal('show');
            $('[name="id_user_revoke"]').val(id_user);
        });

        //revoke record to database
         $('#btn_revoke').on('click',function(){
            var id_user_revoke = $('#id_user_revoke').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/Admin/revoke_user",
                dataType : "JSON",
                data : {id_user:id_user_revoke},
                success: function(){
                    $('[name="id_user_revoke"]').val("");
                    $('#Modal_Revoke').modal('hide');
                    $(".table").DataTable().destroy();
                    $('tbody').empty(); 
                    show_user();
                }
            });
            return false;
        });
 
    });
	</script>
	</body>
</html>
