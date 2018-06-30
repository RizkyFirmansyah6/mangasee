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
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.min.js'?>"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
	 
			var zero = 0;	
			$(window).on('scroll',function(){
				$('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
				zero = $(window).scrollTop();
			})

	    })
	     
	</script>
	<script type="text/javascript">
	    $(document).ready(function(){
	 
	        $('#update').submit(function(e){
	            e.preventDefault(); 
	                 $.ajax({
	                     url:'<?php echo base_url();?>index.php/custom/do_upload', //URL submit
	                     type:"post", //method Submit
	                     data:new FormData(this), //penggunaan FormData
	                     processData:false,
	                     contentType:false,
	                     cache:false,
	                     async:false,
	                      success: function(data){
	                        //alert("Upload Image Berhasil."); //alert jika upload berhasil
							setTimeout(' window.location.href = "<?php echo site_url(); ?>/custom/read"; ',500);
	                   }
	                 });
	            });
	         
	 
	    });
	     
	</script>
	</body>
</html>
