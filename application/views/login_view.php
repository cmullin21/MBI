<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-md-4 col-md-offset-4">
                <form action="<?php echo site_url('Login/auth'); ?>" method="POST">
                  <div class="text-center">
                    <img src="<?php echo base_url(); ?>/assets/images/MBILogo2.png">
                  </div>
                    <h2>Login</h2>
                    <div class='form-group'>
                        <label for="inputUsername">Username</label>
                        <input type="username" class="form-control" id="inputEmail" name="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class='form-group'>
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a class="btn btn-secondary" href='Register' role="button">Create Account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
