<head>
    <style>
        .doubleUnderline {
            text-decoration: underline;
            border-bottom: 1px solid #000;
            width: fit-content;
        }
        .cell-right {
            display: flex;
            justify-content: flex-end;
        }
        .no-margin {
            margin: 0;
        }
    </style>
</head>
<div class="container">
    <h3 class="text-center">MBI</h3>
    <h3 class="text-center">Balance Sheet</h3>
    <h3 class="text-center">As of November 11th, 2019</h3>
    
    <br>
   
    <table class="table">
        <tbody>

            <tr>
                <td class="h4 font-weight-bold">Assets</td>
                <td><td>
            </tr>

            <?php 
            $assets_first = TRUE;
            $list_count = count($assets);
            $i = 0;
            foreach($assets as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <?php if (++$i == $list_count){
                        if ($assets_first == TRUE){
                            $assets_first = false; ?>
                            <td class="text-right"><u>$<?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } else { ?>
                            <td class="text-right"><u><?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } 
                    } else {
                        if ($assets_first == TRUE){
                            $assets_first = false; ?>
                            <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                        <?php } else { ?>
                            <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                        <?php } 
                    } ?>
                    <td></td>
                </tr>
            <?php }?>

            <tr>
                <td class="font-weight-bold">Total Expenses</td>
                <td></td>
                <td class="cell-right text-right font-weight-bold">
                    <p class="doubleUnderline no-margin">$27,295.00</p>
                </td>
            </tr>
            
            <tr>
                <td class="h4 font-weight-bold">Liabilities & Stockholder's Equity</td>
                <td><td>
            </tr>

            <tr>
                <td class="h4 font-weight-bold">Liabilities </td>
                <td><td>
            </tr>

            <?php 
            $liability_first = TRUE;
            $list_count = count($liability);
            $i = 0;
            foreach($liability as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <?php if (++$i == $list_count){
                        if ($liability_first == TRUE){
                            $liability_first = false; ?>
                            <td class="text-right"><u>$<?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } else { ?>
                            <td class="text-right"><u><?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } 
                    } else {
                        if ($liability_first == TRUE){
                            $liability_first = false; ?>
                            <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                        <?php } else { ?>
                            <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                        <?php } 
                    } ?>
                    <td></td>
                </tr>
            <?php }?>

            <tr>
                <td class="font-weight-bold">Total Liability</td>
                <td></td>
                <td class="cell-right text-right font-weight-bold">
                    <p class="doubleUnderline no-margin">$2,520.00</p>
                </td>
            </tr>

            <tr>
                <td class="h4 font-weight-bold">Equity </td>
                <td><td>
            </tr>

            <?php 
            $equity_first = TRUE;
            $list_count = count($equity);
            $i = 0;
            foreach($equity as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <?php if (++$i == $list_count){
                        if ($equity_first == TRUE){
                            $equity_first = false; ?>
                            <td class="text-right"><u>$<?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } else { ?>
                            <td class="text-right"><u><?php echo number_format($row->balance, 2); ?></u></td>
                        <?php } 
                    } else {
                        if ($equity_first == TRUE){
                            $equity_first = false; ?>
                            <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                        <?php } else { ?>
                            <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                        <?php } 
                    } ?>
                    <td></td>
                </tr>
            <?php }?>

            <tr>
                <td class="font-weight-bold">Total Equity</td>
                <td></td>
                <td class="cell-right text-right font-weight-bold">
                    <p class="doubleUnderline no-margin">$24,775.00</p>
                </td>
            </tr>
            
            <tr>
                <td class="font-weight-bold"></td>
                <div class="col-cells">
                    <td class="text-right font-weight-bold">
                        <p class="doubleUnderline no-margin">$27,295.00</p>
                    </td>
                    <td class="cell-right text-right font-weight-bold">
                        <p class="doubleUnderline no-margin">$27,295.00</p>
                    </td>
                </div>
            </tr>

        </tbody>
    </table>

</div>