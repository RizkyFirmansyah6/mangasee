<?php $this->load->view('admin/header'); ?>

  <div class="container-fluid">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
    <div class="panel panel-default">
      <div class="panel-heading"> Daftar User</div>
      <div class="panel-body">
        <table class="table table-striped" id="mydata">
          <thead>
            <tr>
              <th>ID User</th>
              <th>Username</th>
              <th>Email</th>
              <th>Level</th>
              <th>Action</th>
              <th>Suspend</th>
            </tr>
          </thead>
          <tbody id="show_data">

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!--MODAL PROMOTE-->
    <form>
      <div class="modal fade" id="Modal_Promote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Promote User</h4>
            </div>
            <div class="modal-body">
              <strong>Are you sure to promote this user?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_user_promote" id="id_user_promote" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_promote" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL PROMOTE-->

  <!--MODAL DISMISS-->
    <form>
      <div class="modal fade" id="Modal_Dismiss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Dismiss User</h4>
            </div>
            <div class="modal-body">
              <strong>Are you sure to dismiss this user?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_user_dismiss" id="id_user_dismiss" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_dismiss" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL DISMISS-->

  <!--MODAL SUSPEND-->
    <form>
      <div class="modal fade" id="Modal_Suspend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Suspend User</h4>
            </div>
            <div class="modal-body">
              <strong>Are you sure to suspend this user?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_user_suspend" id="id_user_suspend" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_suspend" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL SUSPEND-->

  <!--MODAL REVOKE-->
    <form>
      <div class="modal fade" id="Modal_Revoke" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Revoke User</h4>
            </div>
            <div class="modal-body">
              <strong>Are you sure to revoke this user?</strong>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_user_revoke" id="id_user_revoke" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_revoke" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--END MODAL REVOKE-->

<?php $this->load->view('admin/footeru'); ?>