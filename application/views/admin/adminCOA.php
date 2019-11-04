<div class="container">
  <head>
    <!-- Google jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
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
    .column-clickable {
      color: white;
    }
    .column-clickable:hover {
      color: rgba(255, 255, 255, 0.7);
    }
    </style>
  </head>

  <!-- Button trigger modal -->
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col-6">
        <h3 class="text-center">Charts of Accounts</h3>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
          Add Accounts
        </button>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal3">Add Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="panel-heading">
            <p class="panel-title text-left">Fill in account details to register the account:</p>
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
          <?php echo form_open('admin/AdminCOAController/createNewAccount', array('id' => 'chartsofaccounts-form','method' => 'POST'));?>
          <div class="form-group">
            <label for="accountName">Account Name</label>
            <input type="text" id="accountName" class="form-control" name="accountName"  placeholder="Enter Account name" required>
          </div>
          <div class="form-group">
            <label for="accountNumber">Account Number</label>
            <input type="number" id="accountNumber" class="form-control"  name="accountNumber" minlength="5" maxlength="7"  placeholder="Enter Account Number" >
          </div>
          <div class="form-group">
            <label for="accountDescription">Account Description</label>
            <input type="text" id="accountDescription" class="form-control" name="accountDescription"  placeholder="Enter Description">
          </div>
          <div class="form-group">
            <label for="normalSide">Select Normal Side</label>
            <select id="normalSide" class="form-control" name="normalSide" >
              <option>Left</option>
              <option>Right</option>
            </select>
          </div>
          <div class="form-group">
            <label for="accountCategory">Select Category</label>
            <select id="accountCategory" class="form-control" name="accountCategory" >
              <option>Assets</option>
              <option>Liability</option>
              <option>Equity</option>
              <option>Expenses</option>
              <option>Revenue</option>
            </select>
          </div>
          <div class="form-group">
            <label for="accountSubcategory">Choose Subcategory</label>
            <select id="accountSubcategory" class="form-control" name="accountSubcategory" >
              <?php
              foreach($subcategories as $row){
                echo '<option value="'.$row->subcategoryName.'">'.$row->subcategoryName.'</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="initialBalance">Initial Balance</label>
            <input type="number" id="initialBalance" class="form-control" step="0.01" name="initialBalance"  placeholder="Enter Initial Balance - Defaults to 0.00">
          </div>
          <div class="form-group">
            <label for="debit">Debit</label>
            <input type="number" id="debit" step="0.01" class="form-control" name="debit"  placeholder="Enter Debit">
          </div>
          <div class="form-group">
            <label for="credit">Credit</label>
            <input type="number" id="credit" class="form-control" step="0.01" name="credit"  placeholder="Enter Credit">
          </div>
          <div class="form-group">
            <label for="balance">Balance</label>
            <input type="number" id="balance" class="form-control" step="0.01" name="balance"  placeholder="Enter Balance">
          </div>
          <div class="form-group">
            <label for="addedBy">Added By</label>
            <input type="text" id="addedBy" class="form-control" name="addedBy" readonly value="<?php echo ucwords($_SESSION["username"])?>">
          </div>
          <div class="form-group">
            <label for="accountOrder">Order</label>
            <input type="number" id="accountOrder" class="form-control" name="accountOrder"  placeholder="Enter Order">
          </div>
          <div class="form-group">
            <label for="statement">Select Statement</label>
            <select class="form-control" name="statement" >
              <option>Balance Statement</option>
              <option>Income Statement</option>
              <option>R/E Statement</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comment">Comments</label>
            <input type="text" id="comment" class="form-control" name="comment" placeholder="Enter Comments">
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
    $('#chartsofaccounts-form').validate({
      // set validation rules for input fields
      rules: {
        accountName: { required : true },
        accountNumber: { required : true },
        accountDescription: { required : true },
        initialBalance: {required : true},
        debit: {required : true},
        credit: {required : true},
        balance: {required : true},
        accountOrder: {required : true}
        // statement: {required : true},
        // comment: {}
        // addedBy: {},
        // normalSide: { required : true },
        // accountCategory: { required : true },
        // accountSubcategory: {},

      },
      // set validation messages for the rules are set previously
      messages: {
        accountName: { required : "Account name is required" },
        accountNumber: { required : "Account number is required" },
        initialBalance: { required : "Initial balance is required" },
        balance: { required : "Enter the user's level" },
        accountOrder: { required : "Order type is required" }
        // debit: {              },
        // credit: {              },
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
<!-- Table -->
<div class="container">
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountName">Account Name</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountNumber">Account Number</a></a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountDescription">Account Description</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=normalSide">Normal Side</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountCategory">Account Category</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountSubcategory">Account Subcategory</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=initialBalance">Initial Balance</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=debit">Debit</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=credit">Credit</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=balance">Balance</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=dateTimeAdded">Date Added</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=addedBy">Added By</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountOrder">Account Order</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=statement">Statement</a></th>
        <th class="text-center" scope="col"><a class="column-clickable" href="?sort=comment">Comments</a></th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($result as $row) {?>
        <tr>
          <th scope="row" class="text-center"><?php echo $row->accountName;  ?></th>
          <td class="text-center"><?php echo $row->accountNumber; ?></td>
          <td class="text-center"><?php echo $row->accountDescription; ?></td>
          <td class="text-center"><?php echo $row->normalSide; ?></td>
          <td class="text-center"><?php echo $row->accountCategory; ?></td>
          <td class="text-center"><?php echo $row->accountSubcategory; ?></td>
          <td class="text-right">$<?php echo $row->initialBalance; ?>.00</td>
          <td class="text-right">$<?php echo number_format($row->debit); ?>.00</td>
          <td class="text-right">$<?php echo number_format($row->credit); ?>.00</td>
          <td class="text-right">$<?php echo number_format($row->balance); ?>.00</td>
          <td class="text-center"><?php echo $row->dateTimeAdded; ?></td>
          <td class="text-center"><?php echo $row->addedBy; ?></td>
          <td class="text-center"><?php echo $row->accountOrder; ?></td>
          <td class="text-center"><?php echo $row->statement; ?></td>
          <td class="text-center"><?php echo $row->comment; ?></td>
          <td class="text-center"><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">edit</a></tr>
          <?php }?>
        </tbody>
      </table>

      <!-- Modal1 -->
      <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Modal1">Edit Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="panel-heading">
                <p class="panel-title text-left">Fill in account details to edit the account:</p>
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

              <!-- Modal1 Form -->
              <?php echo form_open('admin/AdminCOAController/editAccount', array('id' => 'editAccount-form','method' => 'POST'));?>
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
                <label for="level">Select Job Level:</label>
                <select id="level" class="form-control" name="level">
                  <option>Accountant</option>
                  <option>Manager</option>
                  <option>Admin</option>
                </select>
              </div>
              <div class="form-group">
                <label for="active">Active:</label>
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
    </div>
    <!-- <a href="<?php echo site_url('admin/AdminCOAController/edit');?>/<?php echo $row->accountNumber;?>">Edit</a> -->

    <!-- validation plugin configuration -->
    <script type="text/javascript">
    // wait untill the page is loaded completely
    $(document).ready(function(){
      // include the validation for the form function comes with this plugin
      $('#editAccount-form').validate({
        // set validation rules for input fields
        rules: {
          accountName: { required : true },
          accountNumber: { required : true },
          accountDescription: { required : true },
          initialBalance: {required : true},
          debit: {required : true},
          credit: {required : true},
          balance: {required : true},
          accountOrder: {required : true}
          // statement: {required : true},
          // comment: {}
          // addedBy: {},
          // normalSide: { required : true },
          // accountCategory: { required : true },
          // accountSubcategory: {},

        },
        // set validation messages for the rules are set previously
        messages: {
          accountName: { required : "Account name is required" },
          accountNumber: { required : "Account number is required" },
          initialBalance: { required : "Initial balance is required" },
          balance: { required : "Enter the user's level" },
          accountOrder: { required : "Order type is required" }
          // debit: {              },
          // credit: {              },
        }
      }
    });
  });
</script>

</div>
