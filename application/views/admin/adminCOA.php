
<!-- Button trigger modal -->
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
      <h3 class="text-center">Charts of Accounts</h3>
    </div>
    <div class="col">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Accounts
      </button>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo site_url('admin/AdminCOAController/create')?>">
            <div class="form-group">
              <label for="accountName">Account Name</label>
              <input type="text" class="form-control" name="accountName" required placeholder="Enter Account name">
            </div>
            <div class="form-group">
              <label for="accountNumber">Account Number</label>
              <input type="number" class="form-control"  name="accountNumber" minlength="5" maxlength="7" required placeholder="Enter Account Number">
            </div>
            <div class="form-group">
              <label for="accountDescription">Account Description</label>
              <input type="text" class="form-control" name="accountDescription" required placeholder="Enter Description">
            </div>
            <div class="form-group">
              <label for="normalSide">Select Normal Side</label>
              <select class="form-control" name="normalSide" required>
                <option>Left</option>
                <option>Right</option>
              </select>
            </div>
            <div class="form-group">
              <label for="accountCategory">Select Category</label>
              <select class="form-control" name="accountCategory" required>
                <option>Assets</option>
                <option>Liability</option>
                <option>Equity</option>
                <option>Expenses</option>
                <option>Revenue</option>
              </select>
            </div>
            <div class="form-group">
              <label for="accountSubcategory">Subcategory</label>
              <input type="text" class="form-control" name="accountSubcategory" required placeholder="Enter Subcategory">
            </div>
            <div class="form-group">
              <label for="initialBalance">Initial Balance</label>
              <input type="number" class="form-control" step="0.01" name="initialBalance" required placeholder="Enter Initial Balance - Defaults to 0.00">
            </div>
            <div class="form-group">
              <label for="debit">Debit</label>
              <input type="number" step="0.01" class="form-control" name="debit" required placeholder="Enter Debit">
            </div>
            <div class="form-group">
              <label for="credit">Credit</label>
              <input type="number" class="form-control" step="0.01" name="credit" required placeholder="Enter Credit">
            </div>
            <div class="form-group">
              <label for="balance">Balance</label>
              <input type="number" class="form-control" step="0.01" name="balance" required placeholder="Enter Balance">
            </div>
            <div class="form-group">
              <label for="addedBy">Added By</label>
              <input type="text" class="form-control" name="addedBy" readonly value="<?php echo ucwords($_SESSION["username"])?>">
            </div>
            <div class="form-group">
              <label for="accountOrder">Order</label>
              <input type="number" class="form-control" name="accountOrder" required placeholder="Enter Order">
            </div>
            <div class="form-group">
              <label for="statement">Select Statement</label>
              <select class="form-control" name="statement" required>
                <option>Balance Statement</option>
                <option>Income Statement</option>
                <option>R/E Statement</option>
              </select>
            </div>
            <div class="form-group">
              <label for="comment">Comments</label>
              <input type="text" class="form-control" name="comment" placeholder="Enter Comments">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th class="text-center" scope="col">Account Name</th>
          <th class="text-center" scope="col">Account Number</th>
          <th class="text-center" scope="col">Account Description</th>
          <th class="text-center" scope="col">Normal Side</th>
          <th class="text-center" scope="col">Account Category</th>
          <th class="text-center" scope="col">Account Subcategory</th>
          <th class="text-center" scope="col">Initial Balance</th>
          <th class="text-center" scope="col">Debit</th>
          <th class="text-center" scope="col">Credit</th>
          <th class="text-center" scope="col">Balance</th>
          <th class="text-center" scope="col">Date Added</th>
          <th class="text-center" scope="col">Added By</th>
          <th class="text-center" scope="col">Account Order</th>
          <th class="text-center" scope="col">Statement</th>
          <th class="text-center" scope="col">Comments</th>
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
        <td class="text-right">$<?php echo $row->debit; ?>.00</td>
        <td class="text-right">$<?php echo $row->credit; ?>.00</td>
        <td class="text-right">$<?php echo $row->balance; ?>.00</td>
        <td class="text-center"><?php echo $row->dateTimeAdded; ?></td>
        <td class="text-center"><?php echo $row->addedBy; ?></td>
        <td class="text-center">0<?php echo $row->accountOrder; ?></td>
        <td class="text-center"><?php echo $row->statement; ?></td>
        <td class="text-center"><?php echo $row->comment; ?></td>
        <td class="text-center"><a href="<?php echo site_url('admin/AdminCOAController/edit');?>/<?php echo $row->accountNumber;?>"> Edit</a></tr>
      <tr>
  <?php }?>
  </tbody>
  </table>
