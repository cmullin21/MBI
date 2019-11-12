<div class="container">
    <h2 class="text-center">MBI</h2>
    <h3 class="text-center">Income Statement</h3>
    <h6 class="text-center">For the year ended December 31st, 2019</h3>
    
    <br>
   
    <table class="table">

    <tbody>
        <tr><td class="h4 font-weight-bold">Revenues</td><td><td></tr>
        <?php foreach($revenue as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
        <td class="font-weight-bold">Total Revenues</td><td></td><td class="text-right font-weight-bold">$<?php echo number_format($row->balance, 2); ?></td>
        

        <tr><td class="h4 font-weight-bold">Expenses</td><td><td></tr>
        <?php foreach($expenses as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
        <tr><td class="font-weight-bold">Total Expenses</td><td></td><td class="text-right font-weight-bold">$8,900.00</td></tr>

        <tr><td class="font-weight-bold">Net Income (Loss)</td><td></td><td class="text-right font-weight-bold">$4,525.00</td></tr>
    </tbody>
    </table>

</div>