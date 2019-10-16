<h3 class="text-center">Charts of Accounts</h3>
  <br>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th class="text-center" scope="col">Account Name</th>
          <th class="text-center" scope="col">Account Number</th>
          <th class="text-center" scope="col">Account Description</th>
          <th class="text-center" scope="col">Normal Side</th>
          <th class="text-center" scope="col">Account Category</th>
          <th class="text-center" scope="col">Account Subcategory</th>
          <th class="text-center" scope="col">Initial Balance</th>
          <th class="text-center" scope="col">Debit</th>
          <th class="text-center" scope="col">Credit</th>
          <th class="text-center" scope="col">Balance</th>
          <th class="text-center" scope="col">Date Added</th>
          <th class="text-center" scope="col">Added By</th>
          <th class="text-center" scope="col">Account Order</th>
          <th class="text-center" scope="col">Statement</th>
          <th class="text-center" scope="col">Comments</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $row) {?>
        <tr>
        <th scope="row" class="text-center"><?php echo $row->accountName;  ?></th>
        <td class="text-center"><?php echo $row->accountNumber; ?></td>
        <td class="text-center"><?php echo $row->accountDescription; ?></td>
        <td class="text-center"><?php echo $row->normalSide; ?></td>
        <td class="text-center"><?php echo $row->accountCategory; ?></td>
        <td class="text-center"><?php echo $row->accountSubcategory; ?></td>
        <td class="text-right">$<?php echo $row->initialBalance; ?>.00</td>
        <td class="text-right">$<?php echo $row->debit; ?>.00</td>
        <td class="text-right">$<?php echo $row->credit; ?>.00</td>
        <td class="text-right">$<?php echo $row->balance; ?>.00</td>
        <td class="text-center"><?php echo $row->dateTimeAdded; ?></td>
        <td class="text-center"><?php echo $row->addedBy; ?></td>
        <td class="text-center">0<?php echo $row->accountOrder; ?></td>
        <td class="text-center"><?php echo $row->statement; ?></td>
        <td class="text-center"><?php echo $row->comment; ?></td>
      <tr>
  <?php }?>
  </tbody>
  </table>
