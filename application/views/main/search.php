<?php $this->load->view('main/header'); ?>

<div class="container mainContainer">
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
					
						<div class="searchResults" id="result">		
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
					<div class="col-sm-4 col-xs-12 navRight">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading" data-toggle="collapse" href="#sortCollapse" aria-expanded="true">
									<div class="panel-title">
										Sort By
									</div>
								</div>
								<div id="sortCollapse" class="panel-collapse collapse in" aria-expanded="true" style="">
									<div class="list-group list-group-radio sortBy">
										<a class="list-group-item selected" value="" sortorder="">
											Alphabetical A-Z
											<i class="fa fa-check pull-right"></i>
										</a>
										<a class="list-group-item" value="" sortorder="descending">
											Alphabetical Z-A 
										</a>
										<a class="list-group-item" value="dateUpdated" sortorder="descending">
											Newest
										</a>
										<a class="list-group-item" value="dateUpdated" sortorder="">
											Oldest
										</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel-group" style="margin-bottom:0px;">
							<div class="panel panel-default">
								<div class="panel-heading collapsed" data-toggle="collapse" href="#genreCollapse" aria-expanded="false">
									<div class="panel-title">
										Genres
									</div>
								</div>
								<div id="genreCollapse" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="list-group list-group-checkbox genres">
										<a class="list-group-item" value="Action">Action</a>
										<a class="list-group-item" value="Adult">Adult</a>
										<a class="list-group-item" value="Adventure">Adventure</a>
										<a class="list-group-item" value="Comedy">Comedy</a>
										<a class="list-group-item" value="Doujinshi">Doujinshi</a>
										<a class="list-group-item" value="Drama">Drama</a>
										<a class="list-group-item" value="Ecchi">Ecchi</a>
										<a class="list-group-item" value="Fantasy">Fantasy</a>
										<a class="list-group-item" value="Gender Bender">Gender Bender</a>
										<a class="list-group-item" value="Harem">Harem</a>
										<a class="list-group-item" value="Hentai">Hentai</a>
										<a class="list-group-item" value="Historical">Historical</a>
										<a class="list-group-item" value="Horror">Horror</a>
										<a class="list-group-item" value="Isekai">Isekai</a>
										<a class="list-group-item" value="Josei">Josei</a>
										<a class="list-group-item" value="Lolicon">Lolicon</a>
										<a class="list-group-item" value="Martial Arts">Martial Arts</a>
										<a class="list-group-item" value="Mature">Mature</a>
										<a class="list-group-item" value="Mecha">Mecha</a>
										<a class="list-group-item" value="Mystery">Mystery</a>
										<a class="list-group-item" value="Psychological">Psychological</a>
										<a class="list-group-item" value="Romance">Romance</a>
										<a class="list-group-item" value="School Life">School Life</a>
										<a class="list-group-item" value="Sci-fi">Sci-fi</a>
										<a class="list-group-item" value="Seinen">Seinen</a>
										<a class="list-group-item" value="Seinen  Supernatural">Seinen  Supernatural</a>
										<a class="list-group-item" value="Shotacon">Shotacon</a>
										<a class="list-group-item" value="Shoujo">Shoujo</a>
										<a class="list-group-item" value="Shoujo Ai">Shoujo Ai</a>
										<a class="list-group-item" value="Shounen">Shounen</a>
										<a class="list-group-item" value="Shounen Ai">Shounen Ai</a>
										<a class="list-group-item" value="Slice of Life">Slice of Life</a>
										<a class="list-group-item" value="Smut">Smut</a>
										<a class="list-group-item" value="Sport">Sport</a>
										<a class="list-group-item" value="Sports">Sports</a>
										<a class="list-group-item" value="Supernatural">Supernatural</a>
										<a class="list-group-item" value="Tragedy">Tragedy</a>
										<a class="list-group-item" value="Yaoi">Yaoi</a>
										<a class="list-group-item" value="Yuri">Yuri</a> 
									</div>
								</div>
								<div class="checkBank" style="display:none;">
									<i class="fa fa-check pull-right"></i>
									<i class="fa fa-remove pull-right"></i>
								</div>
							</div>
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</div>
</div>

<?php $this->load->view('main/footer'); ?>