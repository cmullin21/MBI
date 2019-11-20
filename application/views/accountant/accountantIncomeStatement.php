<head>
    <style>
        .doubleUnderline {
            text-decoration: underline;
            border-bottom: 1px solid #000;
        }

        .cell-right {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }
        .no-margin {
            margin: 0;
        }
    </style>
</head>
<div class="container">
    <h3 class="text-center">MBI</h3>
    <h3 class="text-center">Income Statement</h3>
    <h3 class="text-center">For the year ended December 31st, 2019</h3>
    
    <br>
   
    <table class="table">
        <tbody>

            <tr>
                <td class="font-weight-bold">Revenues</td>
                <td><td>
            </tr>

            <?php 
            $revenue_first = TRUE;
            $list_count = count($revenue);
            $i = 0;
            foreach($revenue as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <?php if (++$i == $list_count){
                        if ($revenue_first == TRUE){
                            $revenue_first = false; ?>
                            <td class="text-right"><u>$<?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } else { ?>
                            <td class="text-right"><u><?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } ?>
                    <?php } else { 
                        if ($revenue_first == TRUE){
                            $revenue_first = false; ?>
                            <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                        <?php } else { ?>
                            <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                        <?php } ?>
                    <?php } ?>
                    <td></td>
                </tr>
            <?php }?>

            <tr>
                <td class="font-weight-bold">Total Revenues</td>
                <td></td>
                <td class="cell-right text-right font-weight-bold">
                    <p class="doubleUnderline no-margin">
                        $<?php echo number_format($row->balance, 2); ?>
                    </p>
                </td>
            </tr>

            <tr>
                <td class="font-weight-bold">Expenses</td>
                <td><td>
            </tr>

            <?php 
            $expenses_first = TRUE;
            $list_count = count($expenses);
            $i = 0;
            foreach($expenses as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <?php if (++$i == $list_count){
                        if ($expenses_first == TRUE){
                            $expenses_first = false; ?>
                            <td class="text-right"><u>$<?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } else { ?>
                            <td class="text-right"><u><?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } ?>
                    <?php } else { 
                        if ($expenses_first == TRUE){
                            $expenses_first = false; ?>
                            <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                        <?php } else { ?>
                            <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                        <?php } ?>
                    <?php } ?>
                    <td></td>
                </tr>
            <?php }?>
            
            <tr>
                <td class="font-weight-bold">Total Expenses</td>
                <td></td>
                <td class="cell-right text-right font-weight-bold">
                    <p class="doubleUnderline no-margin">
                        $8,900.00
                    </p>
                </td>
            </tr>

            <tr>
                <td class="font-weight-bold">Net Income (Loss)</td>
                <td></td>
                <td class="cell-right text-right font-weight-bold">
                    <p class="doubleUnderline no-margin">
                        $4,525.00
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>