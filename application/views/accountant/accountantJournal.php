<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
      <h3 class="text-center">Journal</h3>
    </div>
    <div class="col">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">New Entry</button>
    </div>
  </div>
</div>

<br>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Journal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('accountant/AccountantJournalController/createData')?>">
          <div class="container">
            <div class="form-group">
              <form name="add_name" method="POST" action="<?php echo site_url('accountant/AccountantJournalController')?>">
                <div class="row">
                  <input type="hidden" value="6437" name="count[]">
                  <input type="hidden" class="form-control" name="id" readonly value="test">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="addedBy">Added By</label>
                      <input type="text" class="form-control" name="addedBy" readonly value="<?php echo ucwords($_SESSION["username"])?>">
                    </div>
                  </div>
                </div>
                <br>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dynamic_field">
                    <th colspan="4" class="text-center">
                      Entries
                    </th>
                    <tr>
                      <td>
                        <select class="form-control" name="accountName[]" required>
                          <option>Please Select an Account</option>
                          <?php
                          foreach($accounts as $row){
                            echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';
                          }
                          ?>
                        </td>
                        <td><select class="form-control" name="debitOrCredit[]" required>
                          <option>Debit</option>
                          <option>Credit</option>
                        </select></td>
                        <td>
                          <input type="number" name="amount[]" placeholder="Amount" class="form-control name_list" required="" />
                        </td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                      </tr>
                    </table>
                    <br>
                    <div class="row">
                      <div class="col-8">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <input type="text" class="form-control" name="description" placeholder="Enter Description">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <input type="text" class="form-control" name="status" readonly value="Pending">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="files">Files</label>
                          <input type="file" class="form-control" name="file">
                        </div>
                      </div>
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit" />
                  </div>
                </div>
              </form>
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
        <td><?php echo $row->lastname; ?></td>
        <td>Test</td>
        <td>Test</td>
        <td>Test</td>
        <td>Test</td>
        <td>Test</td>
        <td>Test</td>
      </tbody>
  </div>
  </table>

  <script type="text/javascript">
      $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
          var maxAllowed = 8;
          if(i<maxAllowed){
             i++;
             $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><input type="hidden" value="6437" name="count[]"><td><select class="form-control" name="accountName[]" required><option>Please select an account</option><?php foreach($accounts as $row){echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';}?>/></td><td><select class="form-control" name="debitOrCredit[]" required><option>Debit</option><option>Credit</option></td><td><input type="number" name="amount[]" placeholder="Amount" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        }});
        $(document).on('click', '.btn_remove', function(){
          i--;
             var button_id = $(this).attr("id");
             $('#row'+button_id+'').remove();
        });
      });
  </script>
