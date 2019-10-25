<div class="container">
            <!-- Button trigger modal -->
            <div class="container">
              <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                  <h3 class="text-center">Users</h3>
                </div>
                <div class="col">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Users
                  </button>
                </div>
              </div>
            </div>

            <!-- Modal for New User -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?php echo site_url('admin/AdminUserController/create')?>">
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input type="text" class="form-control" name="firstname" required placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                          <label for="lastname">Last Name</label>
                          <input type="text" class="form-control"  name="lastname" required placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control"  name="username" required placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                          <label for="birthday">Birthday</label>
                          <input type="date" class="form-control" name="birthday" required placeholder="Enter Birthday">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" required placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address" required placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="level">Select Job Level</label>
                            <select class="form-control" name="level" required>
                              <option>Accountant</option>
                              <option>Manager</option>
                              <option>Admin</option>
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>

            <br>

              <table class="table">
        <thead class="thead-dark">
          <tr>
            <th class="text-center" scope="col">Last Name</th>
            <th class="text-center"scope="col">First Name</th>
            <th class="text-center" scope="col">Username</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Address</th>
            <th class="text-center" scope="col">Birthday</th>
            <th class="text-center" scope="col">Job Level</th>
            <th class="text-center" scope="col">Active</th>
            <th class="text-center" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $row) {?>
          <tr>
            <td class="text-center"><?php echo $row->lastname; ?></td>
            <td class="text-center"><?php echo $row->firstname; ?></td>
            <td class="text-center"><?php echo $row->username; ?></td>
            <td class="text-center"><?php echo $row->email; ?></td>
            <td class="text-center"><?php echo $row->address; ?></td>
            <td class="text-center"><?php echo $row->birthday; ?></td>
            <td class="text-center"><?php echo $row->level; ?></td>
            <td class="text-center"><?php echo $row->active; ?></td>
            <td class="text-center"><a href="<?php echo site_url('admin/AdminUserController/edit');?>/<?php echo $row->id;?>"> Edit</a>
          </tr>
          <tr>
          <?php }?>
        </tbody>
      </table>
    </div>
