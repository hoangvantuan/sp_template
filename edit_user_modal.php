<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="updateLable" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- Form submit for update -->
      <form role="form" action="#" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <!-- Title -->
          <h4 class="modal-title" id="updateLable">Edit User Profile</h4>
        </div>
        <!-- Content update here -->
        <div class="modal-body">
            <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input type="file" name="uploadAvatar" value="uuploadAvatar" placeholder="">
                  </div>
                  <div class="form-group">
                  <label for="birthday">Birthday</label>
                  <input type="text" class="form-control" id="birthday" value="Value here" name="birthday" required="required"/>
                  </div>
        </div>
        <div class="modal-footer">
          <div class="form-group">
          <!-- Close and submit button -->
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
       </form>
    </div>
  </div>
</div>