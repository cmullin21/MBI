<h3 class="text-center">Ledger</h3>
<br>
<div class="container">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col">Date</th>
        <th class="text-center" scope="col">Account Title</th>
        <th class="text-center" scope="col">Debit or Credit</th>
        <th class="text-center" scope="col">Amount</th>
        <th class="text-center" scope="col">Type of Journal By</th>
        <th class="text-center" scope="col">Added By</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row) {?>
          <tr>
            <td><?php echo $row->dateDebit; ?></td>
            <td><?php echo $row->accountNameDebit; ?></td>
            <td class="text-right">$<?php echo number_format($row->amountDebit, 2); ?></td>
            <td><?php echo $row->typeOfJournal; ?></td>
            <td><?php echo $row->addedBy; ?></td>
          </tr>
    <?php }?>
    </tbody>
</table>
</div>
