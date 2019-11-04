<head>
  <style>
    .column-clickable {
        color: white;
    }
    .column-clickable:hover {
        color: rgba(255, 255, 255, 0.7);
    }
  </style>
</head>
<h3 class="text-center">Charts of Accounts</h3>
  <br>
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountName">Account Name</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountNumber">Account Number</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountDescription">Account Description</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=normalSide">Normal Side</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountCategory">Account Category</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountSubcategory">Account Subcategory</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=initialBalance">Initial Balance</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=debit">Debit</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=credit">Credit</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=balance">Balance</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=dateTimeAdded">Date Added</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=addedBy">Added By</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=accountOrder">Account Order</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=statement">Statement</th>
          <th class="text-center" scope="col"><a class="column-clickable" href="?sort=comment">Comments</th>
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
        <td class="text-right">$<?php echo number_format($row->initialBalance); ?>.00</td>
        <td class="text-right">$<?php echo number_format($row->debit); ?>.00</td>
        <td class="text-right">$<?php echo number_format($row->credit); ?>.00</td>
        <td class="text-right">$<?php echo number_format($row->balance); ?>.00</td>
        <td class="text-center"><?php echo $row->dateTimeAdded; ?></td>
        <td class="text-center"><?php echo $row->addedBy; ?></td>
        <td class="text-center">0<?php echo $row->accountOrder; ?></td>
        <td class="text-center"><?php echo $row->statement; ?></td>
        <td class="text-center"><?php echo $row->comment; ?></td>
      <tr>
  <?php }?>
  </tbody>
  </table>
