<?php $this->load->view('admin/header'); ?>

  <div class="container-fluid">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
    <div class="panel panel-default">
      <div class="panel-heading"> Daftar Manga</div>
      <div class="panel-body">
        <div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New Manga</a></div>
        <table class="table table-striped" id="mydata">
          <thead>
            <tr>
              <th>Title</th>
              <th>Alternate Name</th>
              <th>Author</th>
              <th>Year</th>
              <th>Status</th>
              <th>Description</th>
              <th>Cover</th>
              <th>Chapter</th>
              <th>Recomend</th>
              <th>Edit</th>
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
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add New Manga</h4>
          </div>
          <div class="modal-body">
          <input type="hidden" name="idM" id="idM" value="">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Title</label>
                <div class="col-md-10">
                  <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                </div>
            </div>
            <div id="responseDiv" class="alert text-center col-md-offset-2 col-md-10" style="display:none;padding: 5px;">
              <span id="message"></span>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Alternate Name</label>
              <div class="col-md-10">
                <input type="text" name="alt_name" id="alt_name" class="form-control" placeholder="Alternate Name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Author</label>
              <div class="col-md-10">
                <input type="text" name="author" id="author" class="form-control" placeholder="Author" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Year</label>
              <div class="col-md-10">
                <input type="text" name="year" id="year" class="form-control" placeholder="Year" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Genre</label>
              <div class="col-md-10">
                <?php foreach ($genre as $gen) { ?>
                <div class="col-md-4">
                  <input type="checkbox" name="genre_check[]" value="<?php echo $gen->id_genre ?>">
                  <label>
                    <?php echo $gen->genre ?>
                  </label>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Status</label>
              <div class="col-md-10">
                <input type="text" name="status" id="status" class="form-control" placeholder="Status" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Description</label>
              <div class="col-md-10">
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Cover</label>
              <div class="col-md-10">
                <input type="file" name="file" id="file" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL ADD--> 

  <!-- MODAL EDIT -->
  <form class="form-horizontal" id="editManga">
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Manga</h4>
          </div>
          <div class="modal-body">
          <input type="hidden" name="id_manga_edit" id="id_manga_edit">
          <input type="hidden" name="lcover" id="lcover">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Title</label>
                <div class="col-md-10">
                  <input type="text" name="title_edit" id="title_edit" class="form-control" placeholder="Title" readonly>
                </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Alternate Name</label>
              <div class="col-md-10">
                <input type="text" name="alt_name_edit" id="alt_name_edit" class="form-control" placeholder="Alternate Name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Author</label>
              <div class="col-md-10">
                <input type="text" name="author_edit" id="author_edit" class="form-control" placeholder="Author" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Year</label>
              <div class="col-md-10">
                <input type="text" name="year_edit" id="year_edit" class="form-control" placeholder="Year" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Genre</label>
              <div class="col-md-10">
                <?php foreach ($genre as $gen) { ?>
                <div class="col-md-4">
                  <input type="checkbox" name="genre_check[]" value="<?php echo $gen->id_genre ?>" id="checkbox_edit">
                  <label>
                    <?php echo $gen->genre ?>
                  </label>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Status</label>
              <div class="col-md-10">
                <input type="text" name="status_edit" id="status_edit" class="form-control" placeholder="Status" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Description</label>
              <div class="col-md-10">
                <textarea name="description_edit" id="description_edit" class="form-control" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Cover</label>
              <div class="col-md-10">
                <input type="file" name="file" id="file">
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

  <!--MODAL RECOMEND-->
    <form>
      <div class="modal fade" id="Modal_Recomend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Recomend Manga</h4>
            </div>
            <div class="modal-body">
              <strong>Are you sure to recomend this record?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_manga_recomend" id="id_manga_recomend" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_recomend" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL RECOMEND-->

  <!--MODAL DELETE-->
    <form>
      <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Delete Manga</h4>
            </div>
            <div class="modal-body">
              <strong>Are you sure to delete this record?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_manga_delete" id="id_manga_delete" class="form-control">
              <input type="hidden" name="title_delete" id="title_delete" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL DELETE-->

<?php $this->load->view('admin/footer'); ?>