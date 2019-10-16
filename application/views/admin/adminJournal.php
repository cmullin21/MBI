<div class="container">
  <h3 class="text-center">Ledger</h3>
</div>

<br>

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
            <td class="text-center"><a href="<?php echo site_url('admin/AdminJournalController/view');?>/<?php echo $row->id;?>">GJ<?php echo $row->PR; ?></td>
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
            <td></td>
            <td></td>
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
