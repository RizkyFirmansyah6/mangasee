<!-- Bootstrap core and JavaScript
	====================================================== -->

	<!-- Placed at the end of the document so the  pages load faster -->
<div class="modal fade" id="modal_Login">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal Login</h4>
			</div>
			<div class="modal-body">
				<div class="form-group row">
            		<label class="col-md-2 col-form-label">Username</label>
                	<div class="col-md-10">
                		<input type="text" name="user_login" id="user_login" class="form-control" placeholder="Username" required>
                	</div>
            	</div>
            	<div class="form-group row">
            		<label class="col-md-2 col-form-label">Password</label>
            		<div class="col-md-10">
                		<input type="password" name="pass_login" id="pass_login" class="form-control" placeholder="Password" required>
            		</div>
            	</div>
            	<div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
					<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
					<span id="message"></span>
				</div>
			</div>
			<div class="modal-footer">
				<center>New to site? <a id="sign_up" href="#">Create Account</a> </center> <br>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="btn_login"><span id="logText"></span></button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_SignUp">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal Sign Up</h4>
			</div>
			<div class="modal-body">
				<div class="form-group row">
            		<label class="col-md-3 col-form-label">Username</label>
                	<div class="col-md-9">
                		<input type="text" name="user_sign" id="user_sign" class="form-control" placeholder="Username" required>
                	</div>
            	</div>
            	<div class="form-group row">
            		<label class="col-md-3 col-form-label">Email</label>
                	<div class="col-md-9">
                		<input type="text" name="email_sign" id="email_sign" class="form-control" placeholder="Email" required>
                	</div>
            	</div>
            	<div class="form-group row">
            		<label class="col-md-3 col-form-label">Password</label>
            		<div class="col-md-9">
                		<input type="password" name="pass_sign" id="pass_sign" class="form-control" placeholder="Password" required>
            		</div>
            	</div>
            	<div class="form-group row">
            		<label class="col-md-3 col-form-label">Confirm Password</label>
            		<div class="col-md-9">
                		<input type="password" name="con_pass_sign" id="con_pass_sign" class="form-control" placeholder="Confirm Password">
            		</div>
            	</div>
            	<div id="responseDivS" class="alert text-center" style="margin-top:20px; display:none;">
					<button type="button" class="close" id="clearMsgS"><span aria-hidden="true">&times;</span></button>
					<span id="messageS"></span>
				</div>
			</div>
			<div class="modal-footer">
				<center>Already a member ? <a id="log_in" href="#">Log in</a> </center> <br>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="btn_sign"><span id="sigText"></span></button>
			</div>
		</div>
	</div>
</div>

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
		$('#logText').html('Login');
		$('#sigText').html('Sign Up');
	 
	        $('#btn_login').on('click',function(){
				$('#logText').html('Checking...');
	            var username = $('#user_login').val();
	            var password = $('#pass_login').val();
	            $.ajax({
	                type : "POST",
	                url  : "<?php echo site_url('Login/login') ?>",
	                dataType : "JSON",
	                data : {username:username,password:password},
	                success: function(response){
	                	$('#message').html(response.message);
						$('#logText').html('Login');
						if(response.error){
							$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
						}
						else{
							$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
							$('#user_login').val("");
							$('#pass_login').val("");
							if (response.level == "Administrator") {
								setTimeout(' window.location.href = "<?php echo site_url('Admin'); ?>" ',3000);
							}
						}
	                }
	            });

	            $(document).on('click', '#clearMsg', function(){
					$('#responseDiv').hide();
				});

	            return false;
	        });

			$('#btn_login').on('click',function(){
				$('#logText').html('Checking...');
	            var username = $('#user_login').val();
	            var password = $('#pass_login').val();
	            $.ajax({
	                type : "POST",
	                url  : "<?php echo site_url('Login/login') ?>",
	                dataType : "JSON",
	                data : {username:username,password:password},
	                success: function(response){
	                	$('#message').html(response.message);
						$('#logText').html('Login');
						if(response.error){
							$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
						}
						else{
							$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
							$('#user_login').val("");
							$('#pass_login').val("");
							if (response.level == "Administrator") {
								setTimeout(' window.location.href = "<?php echo site_url('Admin'); ?>" ',3000);
							}
						}
	                }
	            });

	            $(document).on('click', '#clearMsg', function(){
					$('#responseDiv').hide();
				});

	            return false;
	        });

	        $('#btn_sign').on('click',function(){
				$('#sigText').html('Checking...');
	            var username = $('#user_sign').val();
	            var email = $('#email_sign').val();
	            var password = $('#pass_sign').val();
	            var confirm_password = $('#con_pass_sign').val();
	            if (confirm_password != password) {
	            	$('#messageS').html('Your Passwords Must Match');
	            	$('#responseDivS').removeClass('alert-success').addClass('alert-danger').show();
	            	$('#sigText').html('Sign Up');
	            }
	            else{
	            	$.ajax({
		                type : "POST",
		                url  : "<?php echo site_url('Login/sign_up') ?>",
		                dataType : "JSON",
		                data : {username:username,email:email,password:password},
		                success: function(response){
		                	$('#messageS').html(response.message);
							$('#sigText').html('Sign Up');
							if(response.error){
								$('#responseDivS').removeClass('alert-success').addClass('alert-danger').show();
							}
							else{
								$('#responseDivS').removeClass('alert-danger').addClass('alert-success').show();
								$('#user_sign').val("");
								$('#email_sign').val("");
								$('#pass_sign').val("");
								$('#con_pass_sign').val("");
								// if (response.level == "Administrator") {
								// 	setTimeout(' window.location.href = "<?php echo site_url('Admin'); ?>" ',3000);
								// }
							}
		                }
		            });
	            }

	            $(document).on('click', '#clearMsgS', function(){
					$('#responseDivS').hide();
				});

	            return false;
	        });

			$('#sign_up').on('click', function(){
				jQuery.noConflict();
				$('#modal_Login').modal('hide');
				$('#modal_SignUp').modal('show');
			});

			$('#log_in').on('click', function(){
				jQuery.noConflict();
				$('#modal_SignUp').modal('hide');
				$('#modal_Login').modal('show');
			});
	 
	    });
	     
	</script>
	</body>
</html>
