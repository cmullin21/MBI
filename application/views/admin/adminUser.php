  <!-- Google jQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Custom CSS -->
  <style type="text/css">
  body {  font-family: 'Roboto', sans-serif; }
  label { font-size: 16px; }
  .error {
    color: #a94442;
    border-color: #a94442;
    margin-top: 10px;
  }
  .panel {
    border: 1px solid;
    border-color: black;
  }
</style>

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
        <div class="panel-heading">
          <p class="panel-title text-left">Fill in registration details add a new User:</p>
        </div>

        <!-- success message to be displayed after adding a user to the database successfully -->
        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success');?>
          </div>
        <?php endif; ?>

        <!-- Form -->
        <?php echo form_open('admin/AdminUserController/updateUser', array('id' => 'signup-form','method' => 'POST'));?>
        <div class="form-group">
          <label>First Name:</label>
          <input type="text" id="firstname" class="form-control" name="firstname"  placeholder="Enter First Name">
        </div>
        <div class="form-group">
          <label>Last Name:</label>
          <input type="text" id="lastname" class="form-control"  name="lastname"  placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label>Date of birth:</label>
          <input type="date" id="birthday" class="form-control" name="birthday"  placeholder="Year-Month-Day">
        </div>
        <div class="form-group">
          <label>Address:</label>
          <input type="text" id="address" class="form-control" name="address"  placeholder="Enter Address">
        </div>
        <div class="form-group">
          <label>Username:</label>
          <input type="text" id="username" class="form-control"  name="username"  placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" id="email" class="form-control" name="email"  placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" id="password" class="form-control" name="password"  placeholder="Enter Password">
        </div>
        <div class="form-group">
          <label>Confirm Password:</label>
          <input type="password" id="cpassword" class="form-control" name="cpassword"  placeholder="Confirm Password">
        </div>
        <div class="form-group">
          <label for="level">Select Job Level</label>
          <select id="level" class="form-control" name="level" >
            <option>Accountant</option>
            <option>Manager</option>
            <option>Admin</option>
          </select>
        </div>
        <div class="form-group">
          <label for="active">Active</label>
          <select class="form-control" name="active" value="<?php echo $row->active; ?>" >
            <option>Yes</option>
            <option>No</option>
          </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
<!-- validation plugin configuration -->
<script type="text/javascript">
// wait untill the page is loaded completely
$(document).ready(function(){
  // include the validation for the form function comes with this plugin
  $('#signup-form').validate({
    // set validation rules for input fields
    rules: {
      firstname: { required : true },
      lastname: { required : true },
      birthday: { required : true },
      address: { required : true },
      level: { required : true },
      username: {
        required : true,
        minlength: 5
      },
      email: {
        required : true,
        email: true
      },
      password: {
        required : true,
        minlength: 5
      },
      cpassword: {
        required : true,
        equalTo: "#password"
      }

    },
    // set validation messages for the rules are set previously
    messages: {
      firstname: { required : "First name is required" },
      lastname: {
        required : "Last name is required",
      },
      birthday: { required : "Birthday is required" },
      email: {
        required : "Email is required",
        email: "Enter a valid email. Ex: example@gmail.com"
      },
      address: {
        required : "Address is required",
        address: "Enter a valid address"
      },
      level: { required : "Enter the user's level" },
      password: {
        required : "Password is required",
        minlength: "Password must contain at least 5 characters"
      },
      cpassword: {
        required : "Confirm Password is required",
        equalTo: "Confirm Password must be matched with Password"
      }
    }
  });
});
</script>
<!-- Bootstrap JS file -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Validation JS file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

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
        <td class="text-center"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#Modal2" value="<?php echo $row->id;?>">Edit</a></td>
        </tr>
        <tr>
        <?php }?>
      </tbody>
    </table>
    <!-- <a href="<?php echo site_url('admin/AdminUserController/edit');?>/<?php echo $row->id;?>"> Edit</a> -->

    <!-- Modal2 for New User -->
    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal2label">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="panel-heading">
              <p class="panel-title text-left">Fill in details to edit user:</p>
            </div>

            <!-- success message to be displayed after adding a user to the database successfully -->
            <?php if($this->session->flashdata('success')): ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $this->session->flashdata('success');?>
              </div>
            <?php endif; ?>

            <!-- Modal2 Form -->
            <?php echo form_open('admin/AdminUserController/updateUser', array('id' => 'editUser-form','method' => 'POST'));?>
            <div class="form-group">
              <label>First Name:</label>
              <input type="text" id="firstname" class="form-control" name="firstname" placeholder="Edit First Name">
            </div>
            <div class="form-group">
              <label>Last Name:</label>
              <input type="text" id="lastname" class="form-control"  name="lastname" placeholder="Edit Last Name">
            </div>
            <div class="form-group">
              <label>Date of birth:</label>
              <input type="date" id="birthday" class="form-control" name="birthday" placeholder="Year-Month-Day">
            </div>
            <div class="form-group">
              <label>Address:</label>
              <input type="text" id="address" class="form-control" name="address" placeholder="Edit Address">
            </div>
            <div class="form-group">
              <label>Username:</label>
              <input type="text" id="username" class="form-control"  name="username" placeholder="Edit Username">
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" id="email" class="form-control" name="email" placeholder="Edit Email">
            </div>
            <div class="form-group">
              <label for="level">Select Job Level</label>
              <select id="level" class="form-control" name="level">
                <option>Accountant</option>
                <option>Manager</option>
                <option>Admin</option>
              </select>
            </div>
            <div class="form-group">
              <label for="active">Active</label>
              <select class="form-control" name="active" value="<?php echo $row->active; ?>" >
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
    <!-- validation plugin configuration -->
    <script type="text/javascript">
    // wait untill the page is loaded completely
    $(document).ready(function(){
      // include the validation for the form function comes with this plugin
      $('#editUser-form').validate({
        // set validation rules for input fields
        rules: {
          // firstname: { required : true },
          // lastname: { required : true },
          // birthday: { required : true },
          // address: { required : true },
          // level: { required : true },
          username: {
            minlength: 5
          },
          email: {
            email: true
          }
        },
        // set validation messages for the rules are set previously
        messages: {
          email: { email: "Enter a valid email. Ex: example@gmail.com" },
          address: { address: "Enter a valid address" }
          }
        }
      });
    });
    </script>
