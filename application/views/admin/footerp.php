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
  var chapter = $('#cpt').val();
  var title = $('#titl').val();
  $(document).ready(function(){
        show_page(); //call function show all page

        // $('#mydata').dataTable();
          
        //function show all page
        function show_page(){
            $.ajax({
                type  : 'post',
                url   : '<?php echo base_url();?>index.php/Admin/getPage',
                data : {id_manga:id_manga,chapter:chapter},
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                         html += '<tr>'+
                            '<td>'+data[i].page+'</td>'+
                            '<td>Page '+data[i].page+'</td>'+
                            '<td><img src="<?=base_url()?>./assets/images/manga/'+title+'/'+title+' '+chapter+'/'+data[i].image+'" height="360" width="200"></td>'+
                            '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id_manga="'+data[i].id_manga+'" data-chapter="'+data[i].chapter+'" data-page="'+data[i].page+'" data-limage="'+data[i].image+'">Edit</a>'+
                            '</td>'+
                            '</tr>';  
                    }
                    $('#show_data').html(html);

                    $(".table").DataTable();
                    
                }
 
            });
        }

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
          var id_manga = $(this).data('id_manga');
          var chapter  = $(this).data('chapter');
          var page     = $(this).data('page');
          var limage     = $(this).data('limage');
             
          $('#Modal_Edit').modal('show');
          $('[name="id_manga_edit"]').val(id_manga);
          $('[name="chapter_edit"]').val(chapter);
          $('[name="title_edit"]').val($('#titl').val());
          $('[name="page_edit"]').val(page);
          $('[name="limage_edit"]').val(limage);
          $('#label_page').text('Page '+page);
        });
        
        //update record to database
        $('#editPage').submit(function(e){
          e.preventDefault();
          $.ajax({
            url:'<?php echo base_url();?>index.php/Admin/edit_page', //URL submit
            type:"post", //method Submit
            data:new FormData(this), //penggunaan FormData
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(data){
              $('#editPage').trigger("reset");
              $('#Modal_Edit').modal('hide');
              $(".table").DataTable().destroy();
              $('tbody').empty(); 
              show_page();
            }
          });
          return false;
        });
 
    });
  </script>
  </body>
</html>
