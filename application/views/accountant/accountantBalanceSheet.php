<div class="container">
    <h2 class="text-center">MBI</h2>
    <h3 class="text-center">Balance Sheet</h3>
    <h6 class="text-center">At November 11th, 2019</h3>
    
    <br>
   
    <table class="table">

    <tbody>
        <tr><td class="h4 font-weight-bold">Assets</td><td><td></tr>
        <?php foreach($assets as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
        <tr><td class="font-weight-bold">Total Expenses</td><td></td><td class="text-right font-weight-bold">$27,295.00</td></tr>

        
        <tr><td class="h4 font-weight-bold">Liabilities & Stockholder's Equity</td><td><td></tr>
        <tr><td class="h4 font-weight-bold">Liabilities </td><td><td></tr>
        <?php foreach($liability as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
        <tr><td class="font-weight-bold">Total Liability</td><td></td><td class="text-right font-weight-bold">$2,520.00</td></tr>

        <tr><td class="h4 font-weight-bold">Equity </td><td><td></tr>
        <?php foreach($equity as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
        <tr><td class="font-weight-bold">Total Equity</td><td></td><td class="text-right font-weight-bold">$24,775.00</td></tr>
        <tr><td class="font-weight-bold"></td><td class="text-right font-weight-bold">$27,295.00</td><td class="text-right font-weight-bold">$27,295.00</td></tr>

    </tbody>
    </table>

</div>