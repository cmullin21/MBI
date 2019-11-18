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
    <?php foreach($ledger as $row) {?>
      <td class="text-center"><?php echo $row->dateTime; ?></td>
      <td class="text-center"><?php echo $row->accountNameDebit; ?></td>

    <?php }?>
    </tbody>
</table>
</div>
