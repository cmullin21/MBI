<div class="container">
    <h2 class="text-center">MBI</h2>
    <h3 class="text-center">Trial Balance</h3>
    <h6 class="text-center">For the year ended December 31st, 2019</h3>
    
    <br>
   
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col" class="text-right">Debit</th>
                <th scope="col" class="text-right">Credit</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($result as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
        <?php foreach($liability as $row2) {?>
            <tr>
                <td><?php echo $row2->accountName; ?></td>
                <td></td>
                <td class="text-right">$<?php echo number_format($row2->balance, 2); ?></td>
            </tr>
        <?php }?>
        <?php foreach($equity as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
            </tr>
        <?php }?>
        <?php foreach($revenue as $row) {?>
            <tr>
                <td><?php echo $row->accountName; ?></td>
                <td></td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
            </tr>
        <?php }?>
        <?php foreach($expenses as $row3) {?>
            <tr>
                <td><?php echo $row3->accountName; ?></td>
                <td class="text-right">$<?php echo number_format($row3->balance, 2); ?></td>
                <td></td>
            </tr>
        <?php }?>
            <tr>
                <td></td>
                <td class="text-right"><ins>$36,195</ins></td>
                <td class="text-right"><ins>$36,195</ins></td>
            </tr>
            <tr></tr>
    

    </tbody>
    </table>

</div>