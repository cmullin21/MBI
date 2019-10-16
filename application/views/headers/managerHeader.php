<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>MBI Accounting</title>
  </head>

  <body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-center">
      <a href="<?php echo site_url('manager/Manager');?>" class="navbar-brand d-flex w-50 mr-auto">MBI<img src="<?php echo base_url(); ?>/assets/images/MBILogo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
          <ul class="navbar-nav w-100 justify-content-center">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('manager/ManagerUserController/');?>">Users</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('manager/ManagerCOAController/');?>">Accounts</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('manager/ManagerJournalController/');?>">Ledger</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Reports
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Balance Sheet</a>
                  <a class="dropdown-item" href="#">Income Statement</a>
                  <a class="dropdown-item" href="#">Retained Earning Statement</a>
                  <a class="dropdown-item" href="#">Trial Balance</a>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Event Logs</a>
              </li>
          </ul>
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link"><?php echoucwords($_SESSION["username"])?></a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Login/logout');?>">Logout</a>
              </li>
          </ul>
      </div>
  </nav>
  <br>
