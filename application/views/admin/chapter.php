<?php $this->load->view('admin/header'); ?>

  <div class="container-fluid">
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo site_url('Admin') ?>">Home</a>
    </li>
    <li class="active"><?php echo $detail[0]->title ?></li>
  </ol>
    <div class="panel panel-default">
      <div class="panel-heading"> Daftar Chapter Manga</div>
      <div class="panel-body">
        <input type="hidden" name="idM" id="idM" value="<?php echo $this->uri->segment(3) ?>">
        <input type="hidden" name="titl" id="titl" value="<?php echo $detail[0]->title ?>">
        <div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New Chapter</a></div>
        <table class="table table-striped" id="mydata">
          <thead>
            <tr>
              <th>No</th>
              <th>Chapter</th>
              <th>Detail</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody id="show_data">

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- MODAL ADD -->
  <form class="form-horizontal" id="addManga">
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Chapter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Chapter</label>
                <div class="col-md-10">
                  <input type="text" name="chapter" id="chapter" class="form-control" placeholder="Chapter">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Page</label>
              <div class="col-md-10">
                <input type="text" name="page" id="page" class="form-control" placeholder="Page">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-12 col-form-label" id="errorLabel"></label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="btn_save" class="btn btn-primary">Next</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL ADD--> 

  <!-- MODAL ADD -->
  <form class="form-horizontal" id="addMangaPage">
    <div class="modal fade" id="Modal_Add_Page" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Chapter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <input type="hidden" name="idManga" id="idManga">
          <input type="hidden" name="cpt" id="cpt">
          <input type="hidden" name="tite" id="tite">
          <input type="hidden" name="loop" id="loop">
            <div id="dynamic_form">
              
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="btn_save_page" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL ADD-->

  <!--MODAL DELETE-->
    <form>
      <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Chapter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <strong>Are you sure to delete this record?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_manga_delete" id="id_manga_delete" class="form-control">
              <input type="hidden" name="chapter_delete" id="chapter_delete" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL DELETE-->

<?php $this->load->view('admin/footerc'); ?>