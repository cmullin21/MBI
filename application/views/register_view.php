<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

</head>
<body>
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-md-4 col-md-offset-4">
                  <div class="text-center">
                    <a href="<?php echo site_url('admin/Admin');?>" class="text-center"><img src="<?php echo base_url(); ?>/assets/images/MBILogo2.png"></a>

                    <!-- success message to be displayed after adding a user to the database successfully -->
                    <?php if($this->session->flashdata('success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $this->session->flashdata('success');?>
                      </div>
                    <?php endif; ?>

                    <div style="text-align: left">
                    <!-- Form -->
                    <?php echo form_open('Register/signUp', array('id' => 'signup-form','method' => 'POST'));?>
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

</body>
</html>
