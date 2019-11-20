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
      </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row) {?>
          <tr>
            <td><?php echo $row->date; ?></td>
            <td><?php echo $row->accountName; ?></td>
            <td><?php echo $row->debitOrCredit; ?></td>
            <td class="text-right">$<?php echo number_format($row->amounts, 2); ?></td>
          </tr>
    <?php }?>
    </tbody>
</table>
</div>
