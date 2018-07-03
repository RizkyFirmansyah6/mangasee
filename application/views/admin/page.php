<?php $this->load->view('admin/header'); ?>

  <div class="container-fluid">
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo site_url('Admin') ?>">Home</a>
    </li>
    <li>
      <a href="<?php echo site_url('Admin/chapter/').$this->uri->segment(3) ?>"><?php echo $detail[0]->title ?></a>
    </li>
    <li class="active">Chapter <?php echo $this->uri->segment(4) ?></li>
  </ol>
    <div class="panel panel-default">
      <div class="panel-heading"> Daftar Chapter Manga</div>
      <div class="panel-body">
        <input type="hidden" name="idM" id="idM" value="<?php echo $this->uri->segment(3) ?>">
        <input type="hidden" name="cpt" id="cpt" value="<?php echo $this->uri->segment(4) ?>">
        <input type="hidden" name="titl" id="titl" value="<?php echo $detail[0]->title ?>">
        <table class="table table-striped" id="mydata">
          <thead>
            <tr>
              <th>No</th>
              <th>Page</th>
              <th>Image</th>
              <th>Update</th>
            </tr>
          </thead>
          <tbody id="show_data">

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- MODAL EDIT -->
    <form id="editPage">
      <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Edit Page</h4>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id_manga_edit" id="id_manga_edit">
            <input type="hidden" name="chapter_edit" id="chapter_edit">
            <input type="hidden" name="title_edit" id="title_edit">
            <input type="hidden" name="page_edit" id="page_edit">
            <input type="hidden" name="limage_edit" id="limage_edit">
              <div class="form-group row">
                <label class="col-md-2 col-form-label" id="label_page"></label>
                <div class="col-md-10">
                  <input type="file" name="file" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="btn_update" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL EDIT-->

<?php $this->load->view('admin/footerp'); ?>