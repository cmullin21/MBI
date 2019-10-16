<body>
  <div class="container">
    <form method="post" action="<?php echo site_url('admin/AdminCOAController/update')?>/<<?php echo $row->accountNumber ?>">
      <div class="form-group">
        <div class="form-group">
          <label for="accountName">Account Name</label>
          <input type="text" class="form-control" name="accountName" value="<?php echo $row->accountName; ?>" required placeholder="Enter Account Name">
        </div>
        <div class="form-group">
          <label for="accountNumber">Account Number</label>
          <input type="number" class="form-control" name="accountNumber" value="<?php echo $row->accountNumber; ?>" required placeholder="Enter Account Number">
        </div>
        <button type="submit" class="btn btn-primary" value="save">Submit</button>
      </div>
    </form>
  </div>
</body>
