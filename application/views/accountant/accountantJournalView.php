<div class="container">
  <div class="row">
    <!-- Debit -->
    <div class="col-sm">
      <div class="form-group">
          <label for="accountTitleDebit">Choose Debit Account</label>
          <input type="text" class="form-control" name="accountTitleDebit" required readonly value="<?php echo $row->accountTitleDebit; ?>">
        </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
        <label for="debit">Debit Amount</label>
        <input type="number" class="form-control" name="debit" required readonly value="<?php echo $row->debit; ?>" >
      </div>
    </div>
    <div class="col-sm">

    </div>
  </div>
  <!-- Credit -->
  <div class="row">
    <div class="col-sm">
      <div class="form-group">
          <label for="accountTitleCredit">Choose Credit Account</label>
          <input type="text" class="form-control" name="accountTitleCredit" required readonly value="<?php echo $row->accountTitleCredit; ?>">
        </div>
    </div>
    <div class="col-sm">

    </div>
    <div class="col-sm">
      <div class="form-group">
        <label for="credit">Credit Amount</label>
        <input type="number" class="form-control" name="credit" required readonly value="<?php echo $row->credit; ?>">
      </div>
    </div>
  </div>
  <br>
  <br>

  <!-- Description -->
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" readonly value="<?php echo $row->description; ?>">
  </div>

  <!-- Extra -->
  <div class="row">
    <div class="col-sm">
      <div class="form-group">
          <label for="PR">Reference Number</label>
          <input type="number" class="form-control" name="PR" required readonly value="<?php echo $row->PR; ?>">
        </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
        <label for="addedBy">Added By</label>
        <input type="text" class="form-control" name="addedBy" required readonly value="<?php echo $row->addedBy; ?>">
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" name="status" required readonly value="<?php echo $row->status; ?>">
        </div>
    </div>
  </div>

    <!-- Status Description -->
    <div class="form-group">
      <label for="description">Status Description</label>
      <input type="text" class="form-control" name="description" readonly value="<?php echo $row->statusDesc; ?>">
    </div>
