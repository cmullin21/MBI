<body>
  <div class="container">
    <form method="post" action="<?php echo site_url('admin/AdminCOAController/updateData')?>/<?php echo $row->accountNumber ?>">
      <div class="form-group">
        <label for="accountName">Account Name</label>
        <input type="text" class="form-control" name="accountName" value="<?php echo $row->accountName; ?>" required placeholder="Enter Account name">
      </div>
      <div class="form-group">
        <label for="accountNumber">Account Number</label>
        <input type="number" class="form-control"  name="accountNumber" minlength="5" maxlength="7" value="<?php echo $row->accountNumber; ?>" required placeholder="Enter Account Number">
      </div>
      <div class="form-group">
        <label for="accountDescription">Account Description</label>
        <input type="text" class="form-control" name="accountDescription" required value="<?php echo $row->accountDescription; ?>" placeholder="Enter Description">
      </div>
      <div class="form-group">
        <label for="normalSide">Select Normal Side</label>
        <select class="form-control" name="normalSide" value="<?php echo $row->normalSide; ?>" required>
          <option>Left</option>
          <option>Right</option>
        </select>
      </div>
      <div class="form-group">
        <label for="accountCategory">Select Category</label>
        <select class="form-control" name="accountCategory" required>
          <option><?php echo $row->accountCategory; ?></option>
          <option>Assets</option>
          <option>Liability</option>
          <option>Equity</option>
          <option>Expenses</option>
          <option>Revenue</option>
        </select>
      </div>
      <div class="form-group">
        <label for="accountSubcategory">Subcategory</label>
        <input type="text" class="form-control" name="accountSubcategory" value="<?php echo $row->accountSubcategory; ?>" required placeholder="Enter Subcategory">
      </div>
      <div class="form-group">
        <label for="statement">Select Statement</label>
        <select class="form-control" name="statement" value="<?php echo $row->statement; ?>" required>
          <option>Balance Statement</option>
          <option>Income Statement</option>
          <option>R/E Statement</option>
        </select>
      </div>
      <div class="form-group">
        <label for="comment">Comments</label>
        <input type="text" class="form-control" name="comment" value="<?php echo $row->comment; ?>" placeholder="Enter Comments">
      </div>
      <button type="submit" class="btn btn-primary" value="save">Submit</button>
    </form>
    </div>
    </div>
    </form>
  </div>

  </body>
