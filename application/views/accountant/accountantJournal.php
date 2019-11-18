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
                  <input type="hidden" value="6437" name="countDebit[]">
                  <input type="hidden" value="6437" name="countCredit[]">
                  <input type="hidden" class="form-control" name="id" readonly value="test">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="addedBy">Added By</label>
                      <input type="text" class="form-control" name="addedBy" readonly value="<?php echo ucwords($_SESSION["username"])?>">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <td>
                        <label for="typeOfJournal">Journal Type</label>
                        <select class="form-control" name="typeOfJournal" required>
                          <option>Normal</option>
                          <option>Adjusting</option>
                        </select>
                      </td>
                    </div>
                  </div>
                </div>
                <br>

                <!-- Debits -->
                <div class="table-responsive">
                  <table class="table table-bordered" id="dynamic_Debitfield">
                    <th colspan="4" class="text-center">
                      Debits
                    </th>
                    <tr>
                    <td>
                        <select class="form-control" id="accSelect" name="accountNameDebit[]" required>
                          <option>Please Select an Account</option>
                          <?php
                          foreach($accounts as $row){
                            echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';
                          }
                          ?>
                        </td>
                        <td>
                          <input type="number" name="amountDebit[]" placeholder="Amount" class="form-control name_list debitAmount" required="" />
                        </td>
                        <td><button type="button" name="addDebit" id="addDebit" class="btn btn-success">+</button></td>
                      </tr>
                    </table>

                     <!-- Credits -->
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_Creditfield">
                      <th colspan="4" class="text-center">
                        Credits
                      </th>
                      <tr>
                      <td>
                          <select class="form-control" id="accSelect" name="accountNameCredit[]" required>
                            <option>Please Select an Account</option>
                            <?php
                            foreach($accounts as $row){
                              echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';
                            }
                            ?>
                          </td>

                          <td>
                            <input type="number" name="amountCredit[]" placeholder="Amount" class="form-control name_list creditAmount" required="" />
                          </td>
                          <td><button type="button" name="addCredit" id="addCredit" class="btn btn-success">+</button></td>
                        </tr>
                    </table>

                    <br>

                    <!-- Descrioption and Status -->
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
                      <div class="col-4">
                        <div class="form-group">
                          <div>Sum: <span id="debitSum"></span></div>
                        </div>
                      </div>
                    </div>

                    <!-- Submit Button -->
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<!-- Table -->
  <div class="container">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th class="text-center" scope="col">Date</th>
          <th class="text-center" scope="col">Account Title</th>
          <th class="text-center" scope="col">Amount</th>
          <th class="text-center" scope="col">Status</th>
          <th class="text-center" scope="col">Added By</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($jDates as $row) {?>
          <tr>
            <td><?php echo $row->dateTime; ?></td>
            <td><?php foreach($jDebits as $row2){?>
                <?php if($row->dateTime == $row2->dateDebit){?>
                  <?php echo $row2->accountNameDebit; ?>
                  <br></br>
                  <?php }?>
                <?php }?>
              <?php foreach($jCredits as $row3){?>
                <?php if($row->dateTime == $row3->dateCredit){?>
                <?php echo "&nbsp &nbsp &nbsp $row3->accountNameCredit" ?>
                <br></br>
              <?php }?>
              <?php }?>
            </td>
            <td class="text-right"><?php foreach($jDebits as $row2){?>
              <?php if($row->dateTime == $row2->dateDebit){?>
                <?php echo $row2->amountDebit;?>
                  <br></br>
                <?php }?>
                <?php }?>
              <?php foreach($jCredits as $row3){?>
                <?php if($row->dateTime == $row3->dateCredit){?>
                <?php echo $row3->amountCredit; ?>
                <br></br>
              <?php }?>
              <?php }?>
            </td>            
            <td class="text-center"><?php echo $row->status; ?></td>
            <td class="text-center"><?php echo $row->addedBy; ?></td>
          </tr>
      <?php }?>
      </tbody>
  </div>
  </table>

  <script type="text/javascript">
    //  Add more Debits
      $(document).ready(function(){
        var i=1;
        $('#addDebit').click(function(){
          var maxDebit = 10;
          if(i<maxDebit){
             i++;
             $('#dynamic_Debitfield').append('<tr id="rowDebit'+i+'" class="dynamic-added"><input type="hidden" value="6437" name="countDebit[]"><td><select class="form-control" name="accountNameDebit[]" required><option>Please select an account</option><?php foreach($accounts as $row){echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';}?>/></td><td><input type="number" name="amountDebit[]" placeholder="Amount" class="form-control name_list debitAmount" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeDebit">X</button></td></tr>');
        }});

        $(document).on('click', '.btn_removeDebit', function(){
          i--;
             var button_id = $(this).attr("id");
             $('#rowDebit'+button_id+'').remove();
        });
      });

      // Add more Credits
      $(document).ready(function(){
        var j=1;
        $('#addCredit').click(function(){
          var maxCredit = 10;
          if(j<maxCredit){
             j++;
             $('#dynamic_Creditfield').append('<tr id="rowCredit'+j+'" class="dynamic-added"><input type="hidden" value="6437" name="countCredit[]"><td><select class="form-control" name="accountNameCredit[]" required><option>Please select an account</option><?php foreach($accounts as $row){echo '<option value="'.$row->accountName.'">'.$row->accountName.'</option>';}?>/></td><td><input type="number" name="amountCredit[]" placeholder="Amount" class="form-control name_list creditAmount" required /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_removeCredit">X</button></td></tr>');
        }});

        $(document).on('click', '.btn_removeCredit', function(){
          j--;
             var button_id = $(this).attr("id");
             $('#rowCredit'+button_id+'').remove();
        });
      });

      function calculateDebitSum() {
        var debitSum = 0;
        //iterate through each textboxes and add the values
        $(".debitAmount").each(function () {

            //add only if the value is number
            if (!isNaN(this.value) && this.value.length != 0) {
                debitSum += parseFloat(this.value);
            }

        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#debitSum").html(sum.toFixed(2));
    }
        $("table").on("keyup", ".debitAmount", function () {
            calculateDebitSum();
        });
  </script>
