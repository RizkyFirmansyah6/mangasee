<?php $this->load->view('custom/header'); ?>
    <div class="container">
        <!-- <div class="col-sm-4 col-md-offset-4"> -->
        <h4>Tambah Wisata</h4>
		<form class="form-horizontal" id="submit">
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="judul">Judul:</label>
		    <div class="col-sm-10">
		      <input type="text" name="judul" class="form-control" placeholder="Judul" id="judul">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="tempat">Tempat:</label>
		    <div class="col-sm-10"> 
		      <input type="text" name="tempat" class="form-control" placeholder="Tempat" id="tempat">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="provinsi">Provinsi:</label>
		    <div class="col-sm-10"> 
		      <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" id="provinsi">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="foto">Foto:</label>
		    <div class="col-sm-10"> 
		      <input type="file" name="file" id="foto">
		    </div>
		  </div>
		  <div class="form-group">
		 		<input type="hidden" name="key" class="form-control" id="key" value="tambah"><br>
		 </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="deskripsi">Deskripsi:</label>
		    <div class="col-sm-10"> 
		      <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
		    </div>
		  </div>
		  <div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      <button class="btn btn-success" id="btn_upload" type="submit">Tambah</button>
		    </div>
		  </div>
		</form>
        <!-- </div> -->
    </div>
<?php $this->load->view('custom/footer'); ?>