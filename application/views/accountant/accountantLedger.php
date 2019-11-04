<h3 class="text-center">Ledger</h3>
<br>
<div class="container">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col">Date</th>
        <th class="text-center" scope="col">Account Title</th>
        <th class="text-center" scope="col">Debit or Credit</th>
        <th class="text-center" scope="col">PR</th>
        <th class="text-center" scope="col">Amount</th>
        <th class="text-center" scope="col">Status</th>
        <th class="text-center" scope="col">Added By</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($jentry as $row) {?>
        <tr>
          <td><?php echo $row->date; ?></td>
          <td><?php echo $row->accountName; ?></td>
          <td><?php echo $row->debitOrCredit; ?></td>
          <td class="text-center"><a href="<?php echo site_url('accountant/accountantLedgerController')?>">L<?php echo $row->id; ?></a></td>
          <td class="text-right">$<?php echo number_format($row->amount); ?>.00</td>
          <td class="text-center"><?php echo $row->status; ?></td>
          <td class="text-center"><?php echo $row->addedBy; ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>
</div>
