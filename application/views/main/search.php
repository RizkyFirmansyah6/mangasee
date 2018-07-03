<?php $this->load->view('main/header'); ?>

<div class="container">
	<div class="col-sm-12 col-md-12">
	<div class="panel search">
		<div class="panel-heading">
			<b><h3 class="panel-title"><i class="fa fa-search-plus"></i> Find Manga</h3></b>
		</div>
		<div class="panel-body">
			<div class="well mainWell">
				<div class="row">
					<div class="col-sm-8 col-xs-12 resultCol">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-book"></i>
							</span>
							<input class="form-control keyword" placeholder="Manga Name" value="">
						</div>
						<p class="inputHelper">Keywords for Series Name or Altenate Name</p>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
							<input class="form-control year" placeholder="Year (Leave Blank if Any)" value="">
						</div>
						<p class="inputHelper">Multiple years separated by comma (Ex: 1999,2000,2002)</p>
					
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input class="form-control author" placeholder="Author's Name (Leave Blank if Any)" value="">
						</div>

						<button id="search" class="btn btn-success btn-lg searchSubmit">
							List All Search Results
						</button>
					
						<div class="searchResults">		
							<div class="requested">
								<div class="row">
									<div class="col-xs-4">
										<img src="http://static.mangaboss.net/cover/Myuun-I.jpg">
									</div>
									
									<div class="col-xs-8">
										<a class="resultLink" href="/manga/Myuun-I">μ &amp; I</a>
										<p>Author: <a href="/search/?author=KITADA Ryouma">KITADA Ryouma</a></p>
										<p>Status: <a href="/search/?status=Ongoing">Ongoing (Scan)</a>, <a href="/search/?pstatus=Ongoing">Ongoing (Publish)</a></p>
										<p>Latest: <a href="/read-online/Myuun-I-chapter-10-index-1-page-1.html">Chapter 10</a></p>
										<p>Genre: <a href="/search/?genre=Action">Action</a>, <a href="/search/?genre=Mystery">Mystery</a>, <a href="/search/?genre=Sci-fi">Sci-fi</a>, <a href="/search/?genre=Shounen">Shounen</a>, <a href="/search/?genre=Supernatural">Supernatural</a></p>
									</div>
								</div>
							</div>
							<div class="requested">
								<div class="row">
									<div class="col-xs-4">
										<img src="http://static.mangaboss.net/cover/G-Edition.jpg">
									</div>
									
									<div class="col-xs-8">
										<a class="resultLink" href="/manga/G-Edition">(G) Edition</a>
										<p>Author: <a href="/search/?author=KAWASHITA Mizuki">KAWASHITA Mizuki</a></p>
										<p>Status: <a href="/search/?status=Complete">Complete (Scan)</a>, <a href="/search/?pstatus=Complete">Complete (Publish)</a></p>
										<p>Latest: <a href="/read-online/G-Edition-chapter-13-index-1-page-1.html">Chapter 13</a></p>
										<p>Genre: <a href="/search/?genre=Comedy">Comedy</a>, <a href="/search/?genre=Ecchi">Ecchi</a>, <a href="/search/?genre=Sci-fi">Sci-fi</a>, <a href="/search/?genre=Shounen">Shounen</a></p>
									</div>
								</div>
							</div>
			
							<button class="btn btn-default form-control requestMore" page="2">
								Show More
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</div>
</div>

<?php $this->load->view('main/footer'); ?>