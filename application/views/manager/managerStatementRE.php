<head>
</head>
<div class="container">
    <h3 class="text-center">MBI</h3>
    <h3 class="text-center">Statement Of Retained Earnings</h3>
    <h3 class="text-center">For the year ended December 31st, 2019</h3>
    
    <br>
   
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach($retEarn as $row) {?>
            <tr>
                <td>Beg Retained Earnings</td>
                <td class="text-right">$<?php echo number_format($row->initialBalance, 2); ?></td>
            </tr>
            <?php }?>
            <?php foreach($retEarn as $row) {?>
            <tr>
                <td>Add: Net Income</td>
                <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
            </tr>
            <?php }?>
            <?php foreach($retEarn as $row) {?>
            <tr>
                <td>Less: Dividends </td>
                <td class="text-right"><?php echo number_format($row->initialBalance, 2); ?></td>
            </tr>
            <?php }?>
            <?php foreach($retEarn as $row) {?>
            <tr>
                <td>End Retained Earnings </td>
                <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
            </tr>
            <?php }?>
        </tr>
        </tbody>
    </table>

</div>