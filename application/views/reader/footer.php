<!-- Bootstrap core and JavaScript
	====================================================== -->

	<!-- Placed at the end of the document so the  pages load faster -->
		<div class="container containerNav pageDescription">
			<h1 class="heading">
				<span id="fotTitle"></span> 
				Chapter <span class="CurChapter" id="fotChapter"></span>
				<span class="PageHolder">
					Page <span class="CurPage" id="fotPage"></span>			</span>
			</h1>
			<div>
				You are reading <span id="fotTitle1"></span> Chapter <span class="CurChapter" id="fotChapter1"></span> <span class="PageHolder">Page <span class="CurPage" id="fotPage1"></span></span> on MangaSee.
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
			var page = $('#pag').val();
			$('#fotTitle').text(judul);
			$('#fotChapter').text(chapter);
			$('#fotPage').text(page);
			$('#fotTitle1').text(judul);
			$('#fotChapter1').text(chapter);
			$('#fotChapter2').text(chapter);
			$('#fotPage1').text(page);
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
			var hasil;
				var page = $('#pag').val();

				if (page <= 1) {
					if (chapter <= 1) {
						jQuery.noConflict();
						$('#warning').text('this is the first page of this manga');
			        	$('#modalWarning').modal('show');
					}
					else{
						var image = "<?php echo base_url();?>./assets/images/manga/";
						chapter--;
						image += judul+'/'+judul+' '+chapter+'/';

						getSelectPage(id,chapter);
				 	
				     	$.ajax({
				        	url: '<?php echo base_url();?>index.php/Ajax/alterPrev',
				        	method: 'POST',
				        	dataType: 'json',
				        	data: {
				            	chapter: chapter,
				            	id: id
				        	}, success: function (data) {
				        		//var parsed_data = JSON.parse(data);
				            	$('#pag').attr('value',data[0].page);
				            	$('#fotPage').text(data[0].page);
				            	$('#chapte').attr('value',data[0].chapter);
				            	$('#lastPage').attr('value',data[0].page);
				            	$('#chapterSelect').val(data[0].chapter).change();
				            	$('#chapterSelectBot').val(data[0].chapter).change();
				            	$('#curChapter').text(data[0].chapter);
				            	$('#pageSelect').val(data[0].page).change();
				            	$('#pageSelectBot').val(data[0].page).change();
				            	image += data[0].image;
				            	$('#mangaimg').attr('src',image);

				          	}
				        });
					}
				}else{
					
					var image = "<?php echo base_url();?>./assets/images/manga/";
					image += judul+'/'+judul+' '+chapter+'/';
					page--;
			 	
			     	$.ajax({
			        	url: '<?php echo base_url();?>index.php/Ajax/alter',
			        	method: 'POST',
			        	dataType: 'json',
			        	data: {
			            	chapter: chapter,
			            	page: page,
			            	id: id
			        	}, success: function (data) {
			        		//var parsed_data = JSON.parse(data);
			            	$('#pag').attr('value',data[0].page);
			            	$('#fotPage').text(data[0].page);
			            	$('#pageSelect').val(data[0].page).change();
			            	$('#pageSelectBot').val(data[0].page).change();
			            	image += data[0].image;
			            	$('#mangaimg').attr('src',image);

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
		var hasil;
			var page = $('#pag').val();
			var lastChapter = $('#lastChapter').val();
			var lastPage = $('#lastPage').val();

			if (page == lastPage) {
				if (chapter >= lastChapter) {
					jQuery.noConflict();
					$('#warning').text('this is the last page of this manga');
		        	$('#modalWarning').modal('show');
				}
				else{
					var image = "<?php echo base_url();?>./assets/images/manga/";
					chapter++;
					var newPage = 1;
					image += judul+'/'+judul+' '+chapter+'/';

					getSelectPage(id,chapter);

					$.ajax({
			        	url: '<?php echo base_url();?>index.php/Ajax/alterPrev',
			        	method: 'POST',
			        	dataType: 'json',
			        	data: {
			            	chapter: chapter,
			            	id: id
			        	}, success: function (data) {
			            	$('#lastPage').attr('value',data[0].page);
			          	}
			        });
			 	
			     	$.ajax({
			        	url: '<?php echo base_url();?>index.php/Ajax/alter',
			        	method: 'POST',
			        	dataType: 'json',
			        	data: {
			            	chapter: chapter,
			            	page: newPage,
			            	id: id
			        	}, success: function (data) {
			        		//var parsed_data = JSON.parse(data);
			            	$('#pag').attr('value',data[0].page);
			            	$('#fotPage').text(data[0].page);
			            	$('#chapte').attr('value',data[0].chapter);
			            	$('#chapterSelect').val(data[0].chapter).change();
			            	$('#chapterSelectBot').val(data[0].chapter).change();
			            	$('#curChapter').text(data[0].chapter);
			            	$('#pageSelect').val(data[0].page).change();
			            	$('#pageSelectBot').val(data[0].page).change();
			            	image += data[0].image;
			            	$('#mangaimg').attr('src',image);

			          	}
			        });
				}
			}else{
				
				var image = "<?php echo base_url();?>./assets/images/manga/";
				image += judul+'/'+judul+' '+chapter+'/';
				page++;
		 	
		     	$.ajax({
		        	url: '<?php echo base_url();?>index.php/Ajax/alter',
		        	method: 'POST',
		        	dataType: 'json',
		        	data: {
		            	chapter: chapter,
		            	page: page,
		            	id: id
		        	}, success: function (data) {
		        		//var parsed_data = JSON.parse(data);
		            	$('#pag').attr('value',data[0].page);
		            	$('#fotPage').text(data[0].page);
		            	$('#pageSelect').val(data[0].page).change();
		            	$('#pageSelectBot').val(data[0].page).change();
		            	image += data[0].image;
		            	$('#mangaimg').attr('src',image);

		          	}
		        });

		    }
		}
	</script>

	<script type="text/javascript">
		function pageTop() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapte').val();
			var page = $('#pageSelect').val();
			var flag = 'top';
		 	selectPage(id,judul,chapter,page,flag);
		}
	</script>

	<script type="text/javascript">
		function pageBot() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapte').val();
			var page = $('#pageSelectBot').val();
			var flag = 'bot';
			selectPage(id,judul,chapter,page,flag);
		}
	</script>

	<script type="text/javascript">
		function chapterTop() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapterSelect').val();
			var page = 1;
			$('#chapterSelectBot').val(chapter).change();
		 	selectChapter(id,judul,chapter,page);
		}
	</script>

	<script type="text/javascript">
		function chapterBot() {
			var id = $('#mangaid').val();
			var judul = $('#judul').val();
			var chapter = $('#chapterSelectBot').val();
			var page = 1;
			// $('#chapterSelect').val(chapter).change();
		 	selectChapter(id,judul,chapter,page);
		}
	</script>

	<script type="text/javascript">
		function selectPage(id,judul,chapter,page,flag) {
			$('#fotPage').text(page);
			$('#fotPage1').text(page);
			$('#pag').attr('value',page);
				var image = "<?php echo base_url();?>./assets/images/manga/";
				image += judul+'/'+judul+' '+chapter+'/';
		 	
		     	$.ajax({
		        	url: '<?php echo base_url();?>index.php/Ajax/alter',
		        	method: 'POST',
		        	dataType: 'json',
		        	data: {
		            	chapter: chapter,
		            	page: page,
		            	id: id
		        	}, success: function (data) {
		        		if (flag == 'top') {
		        			$('#pageSelectBot').val(data[0].page).change();
		        		} else {
		        			// $('#pageSelect').val(data[0].page).change();
		        		}
		            	image += data[0].image;
		            	$('#mangaimg').attr('src',image);

		          	}
		        });
		}
	</script>

	<script type="text/javascript">
		function selectChapter(id,judul,chapter,page) {
			$('#curChapter').text(chapter);
			$('#chapte').attr('value',chapter);
			$('#fotChapter').text(chapter);
			$('#fotChapter1').text(chapter);
			$('#fotChapter2').text(chapter);
			$('#fotPage').text(page);
			$('#fotPage1').text(page);
			$('#pag').attr('value',page);

			getSelectPage(id,chapter);

				var image = "<?php echo base_url();?>./assets/images/manga/";
				image += judul+'/'+judul+' '+chapter+'/';
		 	
		     	$.ajax({
		        	url: '<?php echo base_url();?>index.php/Ajax/alter',
		        	method: 'POST',
		        	dataType: 'json',
		        	data: {
		            	chapter: chapter,
		            	page: page,
		            	id: id
		        	}, success: function (data) {
		            	image += data[0].image;
		            	$('#mangaimg').attr('src',image);

		          	}
		        });
		}
	</script>

	<script type="text/javascript">
		function getSelectPage(id,chapter) {
			$.ajax({
				url: '<?php echo base_url();?>index.php/Ajax/getPage',
				method: 'POST',
				dataType: 'json',
				data: {
				    chapter: chapter,
				    id: id
				}, success: function (data) {
				    var html = '';
	                var i;
				    for(i=0; i<data.length; i++){
			            html += '<option value="'+data[i].page+'">Page '+data[i].page+'</option>';
			            }
			            $('#pageSelect').html(html);
			            $('#pageSelectBot').html(html);
				}
			});
		}
	</script>

	<script type="text/javascript">
		function changeMode() {
			var id = $('#mangaid').val();
			var chapter = $('#chapte').val();
			var laman = '<?=site_url()?>/Manga/readOnIine/'+id+'/'+chapter;
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
