  <body>
    <div class="container">
      <form method="post" action="<?php echo site_url('admin/AdminUserController/update')?>/<?php echo $row->id; ?>">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $row->firstname; ?>" placeholder="Enter First Name">
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control"  name="lastname" value="<?php echo $row->lastname; ?>" placeholder="Enter Last Name">
          </div>
          <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" name="birthday" value="<?php echo $row->birthday; ?>" placeholder="Enter Birthday">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="joblevel">Select Job Level</label>
            <select class="form-control" name="level" value="<?php echo $row->level; ?>" >
              <option>Admin</option>
              <option>Manager</option>
              <option>Accountant</option>
            </select>
          </div>
          <div class="form-group">
            <label for="active">Active</label>
            <select class="form-control" name="active" value="<?php echo $row->active; ?>" >
              <option>Yes</option>
              <option>No</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" value="save">Submit</button>
        </form>
    </div>
  </body>
