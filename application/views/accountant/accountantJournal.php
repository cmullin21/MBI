<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
      <h3 class="text-center">Journal</h3>
    </div>
    <div class="col">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">New Entry</button>
    </div>
  </div>
</div>

<br>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Journal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('accountant/AccountantJournalController/create')?>">
        <div class="container">
          <div class="row">
            <!-- Debit -->
            <div class="col-sm">
              <div class="form-group">
                  <label for="accountTitleDebit">Choose Debit Account</label>
                  <select class="form-control" name="accountTitleDebit" required>
                    <?php
                    foreach($accounts as $row){
                      echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';
                    }
                    ?>
                  </select>
                </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="debit">Debit Amount</label>
                <input type="number" class="form-control" name="debit" required placeholder="Enter Debit Amount">
              </div>
            </div>
            <div class="col-sm">
              <label for="newDebits">Add More Debits</label>
              <button type="button" class="btn btn-light" value="save">New Debit</button>
            </div>
          </div>
          <!-- Credit -->
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                  <label for="accountTitleCredit">Choose Credit Account</label>
                  <select class="form-control" name="accountTitleCredit" required>
                    <?php
                    foreach($accounts as $row){
                      echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';
                    }
                    ?>
                  </select>
                </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="credit">Credit Amount</label>
                <input type="number" class="form-control" name="credit" required placeholder="Enter Credit Amount">
              </div>
            </div>
            <div class="col-sm">
              <label for="newCredit">Add More Credits</label>
              <button type="button" class="btn btn-light" value="save">New Credit</button>
            </div>
          </div>
          <br>
          <br>

          <!-- Description -->
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Enter Description">
          </div>

          <!-- Extra -->
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="addedBy">Added By</label>
                <input type="text" class="form-control" name="addedBy" readonly value="<?php echo ($_SESSION["username"])?>">
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status" required>
                    <option>Pending</option>
                  </select>
                </div>
            </div>
            <div class="col-sm">

            </div>
          </div>
          <br>
        <!-- Submit/ChooseFile -->
        </div>
          <div class="row">
            <div class="col-sm">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Documentation</label>
              </div>
            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-primary" value="save">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Table -->
  <div class="container">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th class="text-center" scope="col">Date</th>
          <th class="text-center" scope="col">Account Title</th>
          <th class="text-center" scope="col">PR</th>
          <th class="text-center" scope="col">Debit</th>
          <th class="text-center" scope="col">Credit</th>
          <th class="text-center" scope="col">Status</th>
          <th class="text-center" scope="col">Added By</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $row){ ?>
          <tr>
            <td class="text-center"><?php echo $row->date; ?></td>
            <td><?php echo $row->accountTitleDebit; ?></td>
            <td class="text-center"><a href="<?php echo site_url('accountant/AccountantJournalController/checkAccounts');?>/<?php echo $row->id;?>">GJ<?php echo $row->id; ?></td>
            <td class="text-right">$<?php echo $row->debit; ?>.00</td>
            <td></td>
            <td class="text-center"><?php echo $row->status; ?></td>
            <td class="text-center"><?php echo $row->addedBy; ?></td>
          </tr>
          <tr>
            <td></td>
            <td class="text-center"><?php echo $row->accountTitleCredit; ?></td>
            <td></td>
            <td></td>
            <td class="text-right">$<?php echo $row->credit; ?>.00</td>
          </tr>
          <tr>
            <td colspan="7"><?php echo $row->description; ?></td>
          </tr>
          <tr>
            <td colspan="7"><strong><?php echo $row->statusDesc; ?></strong></td>
          </tr>
          <tr>
            <td colspan="7"></td>
          </tr>
        <?php }?>
      </tbody>
  </div>

  </table>
