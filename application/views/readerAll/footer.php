<!-- Bootstrap core and JavaScript
	====================================================== -->

	<!-- Placed at the end of the document so the  pages load faster -->
		<div class="container containerNav pageDescription">
			<h1 class="heading">
				<span id="fotTitle"></span> 
				Chapter <span class="CurChapter" id="fotChapter"></span>
			</h1>
			<div>
				You are reading <span id="fotTitle1"></span> Chapter <span class="CurChapter" id="fotChapter1"></span> <span class="PageHolder"></span></span> on MangaSee.
				To see more information about this Manga, please visit the <a href="<?=site_url()?>/Manga/manga/<?php echo $detail[0]->id_manga ?>">Chapter List</a>.
				<span id="fotTitle2"></span> is a Manga that was published in <span id="fotYear"></span> by <a href="/search/?author=TOTSUKA+Masahiro"><span id="fotAuth"></span></a>.
				<span id="fotTitle3"></span> Manga is <a href="/search/?pstatus=Complete"><span id="fotStatus"></span></a>.
				<span id="fotTitle4"></span> Chapter <span class="CurChapter" id="fotChapter2"></span> was added on <time class="footerTime" datetime="2018-05-10T17:47:01+00:00"><span id="fotDate"></span></time>.
				<span style="color:gray;">Genres: <span id="fotGenre"></span></span>
			</div>
			<hr>
			<div style="color:gray;">2018 MangaSee Copyrights and trademarks for the manga, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law. <a href="/privacy/">Privacy Policy</a></div>
		
			<hr>
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

			foter();

	    })
	     
	</script>

	<script type="text/javascript">
		function foter() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapte').val();
			$('#fotTitle').text(judul);
			$('#fotChapter').text(chapter);
			$('#fotTitle1').text(judul);
			$('#fotChapter1').text(chapter);
			$('#fotChapter2').text(chapter);
			$('#fotTitle2').text(judul);
			$('#fotTitle3').text(judul);
			$('#fotTitle4').text(judul);

			$.ajax({
			    	url: '<?php echo base_url();?>index.php/Ajax/mangaDetail',
			    	method: 'POST',
			    	dataType: 'json',
			    	data: {
			        	id: id
			    }, success: function (data) {
			    	$('#fotYear').text(data[0].year);
			    	$('#fotAuth').text(data[0].author);
			    	$('#fotStatus').text(data[0].status);
			    }
			});

			$.ajax({
			    	url: '<?php echo base_url();?>index.php/Ajax/mangaDate',
			    	method: 'POST',
			    	dataType: 'json',
			    	data: {
			        	id: id,
			        	chapter : chapter
			    }, success: function (data) {
			    	$('#fotDate').text(data[0].date_posted);
			    }
			});

			$.ajax({
			    	url: '<?php echo base_url();?>index.php/Ajax/mangaGenre',
			    	method: 'POST',
			    	dataType: 'json',
			    	data: {
			        	id: id,
			        	chapter : chapter
			    }, success: function (data) {
			    	var hasil = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        hasil += '<a href="/search/?genre='+data[i].genre+'">'+data[i].genre+'</a>, ';
                    }
                    $('#fotGenre').html(hasil);
			    }
			});
		}
	</script>

	<script type="text/javascript">
		function prev() {
		var id = $('#mangaid').val();
		var judul = $('#judul').val();
		var chapter = $('#chapte').val();
		var hasil ='';
			var lastChapter = $('#lastChapter').val();

			if (chapter <= 1) {
				jQuery.noConflict();
				$('#warning').text('this is the first chapter of this manga');
		       	$('#modalWarning').modal('show');
			}else{
				
				chapter--;
		 	
		     	$.ajax({
		        	url: '<?php echo base_url();?>index.php/Ajax/alterChapter',
		        	method: 'POST',
		        	dataType: 'json',
		        	data: {
		            	chapter: chapter,
		            	id: id
		        	}, success: function (data) {
		            	var i;
	                    for(i=0; i<data.length; i++){
	                    	var image = "<?php echo base_url();?>./assets/images/manga/";
	                    	image += judul+'/'+judul+' '+chapter+'/';
	                    	image += data[i].image;
	                        hasil += '<img id="mangaimg" class="CurImage nextBtn" src="'+image+'">'+
	                                '<br>'+
	                                '<br>';
	                    }

	                    $('#imageContainer').html(hasil);
	                    $('#chapte').attr('value',chapter);
	                    $('#chapterSelect').val(chapter).change();

		          	}
		        });

		    }
		}
	</script>

	<script type="text/javascript">
		function next() {
		var id = $('#mangaid').val();
		var judul = $('#judul').val();
		var chapter = $('#chapte').val();
		var hasil ='';
			var lastChapter = $('#lastChapter').val();

			if (chapter >= lastChapter) {
				jQuery.noConflict();
				$('#warning').text('this is the last chapter of this manga');
		       	$('#modalWarning').modal('show');
			}else{
				
				chapter++;
		 	
		     	$.ajax({
		        	url: '<?php echo base_url();?>index.php/Ajax/alterChapter',
		        	method: 'POST',
		        	dataType: 'json',
		        	data: {
		            	chapter: chapter,
		            	id: id
		        	}, success: function (data) {
		            	var i;
	                    for(i=0; i<data.length; i++){
	                    	var image = "<?php echo base_url();?>./assets/images/manga/";
	                    	image += judul+'/'+judul+' '+chapter+'/';
	                    	image += data[i].image;
	                        hasil += '<img id="mangaimg" class="CurImage nextBtn" src="'+image+'">'+
	                                '<br>'+
	                                '<br>';
	                    }

	                    $('#imageContainer').html(hasil);
	                    $('#chapte').attr('value',chapter);
	                    $('#chapterSelect').val(chapter).change();

		          	}
		        });

		    }
		}
	</script>

	<script type="text/javascript">
		function chapterTop() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapterSelect').val();
			$('#chapterSelectBot').val(chapter).change();
		 	selectChapter(id,judul,chapter);
		}
	</script>

	<script type="text/javascript">
		function chapterBot() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapterSelectBot').val();
			// $('#chapterSelect').val(chapter).change();
		 	selectChapter(id,judul,chapter);
		}
	</script>

	<script type="text/javascript">
		function selectChapter(id,judul,chapter) {
			$('#curChapter').text(chapter);
			$('#chapte').attr('value',chapter);
			$('#fotChapter').text(chapter);
			$('#fotChapter1').text(chapter);
			$('#fotChapter2').text(chapter);
			var hasil ='';

				$.ajax({
		        	url: '<?php echo base_url();?>index.php/Ajax/alterChapter',
		        	method: 'POST',
		        	dataType: 'json',
		        	data: {
		            	chapter: chapter,
		            	id: id
		        	}, success: function (data) {
		            	var i;
	                    for(i=0; i<data.length; i++){
	                    	var image = "<?php echo base_url();?>./assets/images/manga/";
	                    	image += judul+'/'+judul+' '+chapter+'/';
	                    	image += data[i].image;
	                        hasil += '<img id="mangaimg" class="CurImage nextBtn" src="'+image+'">'+
	                                '<br>'+
	                                '<br>';
	                    }

	                    $('#imageContainer').html(hasil);

		          	}
		        });
		}
	</script>

	<script type="text/javascript">
		function changeMode() {
			var id = $('#mangaid').val();
			var chapter = $('#chapte').val();
			var laman = '<?=site_url()?>/Manga/readOnline/'+id+'/'+chapter;
			setTimeout(' window.location.href = "'+laman+'" ',500);
		}
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
