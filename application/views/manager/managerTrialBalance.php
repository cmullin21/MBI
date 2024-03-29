<head>
    <style>
        .doubleUnderline {
            text-decoration: underline;
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<div class="container">
    <h3 class="text-center">MBI</h3>
    <h3 class="text-center">Trial Balance</h3>
    <h3 class="text-center">For the year ended December 31st, 2019</h3>
    
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

            <?php 
            $result_first = TRUE;
            foreach($result as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <?php if ($result_first == TRUE){
                        $result_first = false; ?>
                        <td class="text-right">$<?php echo number_format($row->balance, 2); ?></td>
                    <?php } else { ?>
                        <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                    <?php } ?>
                    <td></td>
                </tr>
            <?php }?>

            <?php 
            $liability_first = TRUE;
            foreach($liability as $row2) {?>
                <tr>
                    <td><?php echo $row2->accountName; ?></td>
                    <td></td>
                    <?php if ($liability_first == TRUE){
                        $liability_first = false; ?>
                        <td class="text-right">$<?php echo number_format($row2->balance, 2); ?></td>
                    <?php } else { ?>
                        <td class="text-right"><?php echo number_format($row2->balance, 2); ?></td>
                    <?php } ?>
                </tr>
            <?php }?>

            <?php foreach($equity as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <td></td>
                    <td class="text-right"><?php echo number_format($row->balance, 2); ?></td>
                </tr>
            <?php }?>

            <?php foreach($revenue as $row) {?>
                <tr>
                    <td><?php echo $row->accountName; ?></td>
                    <td></td>
                    <td class="text-right"><u><?php echo number_format($row->balance, 2); ?></u></td>
                </tr>
            <?php }?>

            <?php 
                $list_count = count($expenses);
                $i = 0;
                foreach($expenses as $row3) {?>
                    <tr>
                        <td><?php echo $row3->accountName; ?></td>
                        <?php if (++$i == $list_count){ ?>
                            <td class="text-right"><u><?php echo number_format($row3->balance, 2); ?></u></td>
                        <?php } else { ?>
                            <td class="text-right"><?php echo number_format($row3->balance, 2); ?></td>
                        <?php } ?>
                        <td></td>
                    </tr>
            <?php }?>

            <tr>
                <td></td>
                <td class="text-right"><ins class="doubleUnderline">$<?php echo number_format(36195, 2); ?></ins></td>
                <td class="text-right"><ins class="doubleUnderline">$<?php echo number_format(36195, 2); ?></ins></td>
            </tr>

            <tr></tr>

            <!-- Example of Trial Balance
                <tr>
                <td class="text-left">Cash</td>
                <td class="text-right">$8,875</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">A/R</td>
                <td class="text-right">3,450</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Prepaid Rent</td>
                <td class="text-right">3,000</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Prepaid Insurance</td>
                <td class="text-right">1,650</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Supplies</td>
                <td class="text-right">1,020</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Office Equipment</td>
                <td class="text-right">9,300</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Accumulated Depreciation, Equipment</td>
                <td class="text-right"></td>
                <td class="text-right">$500</td>
            </tr>
            <tr>
                <td class="text-left">Accounts Payable</td>
                <td class="text-right"></td>
                <td class="text-right">1,000</td>
            </tr>
            <tr>
                <td class="text-left">Salaries Payable</td>
                <td class="text-right"></td>
                <td class="text-right">20</td>
            </tr>
            <tr>
                <td class="text-left">Unearned Revenue</td>
                <td class="text-right"></td>
                <td class="text-right">1,000</td>
            </tr>
            <tr>
                <td class="text-left">Contributed Capital</td>
                <td class="text-right"></td>
                <td class="text-right">20,250</td>
            </tr>
            <tr>
                <td class="text-left">Retained Earnings</td>
                <td class="text-right"></td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td class="text-left">Dividends Declared</td>
                <td class="text-right"></td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td class="text-left">Service Revenue</td>
                <td class="text-right"></td>
                <td class="text-right">13,425</td>
            </tr>
            <tr>
                <td class="text-left">Insurance Expense</td>
                <td class="text-right">150</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Depreciation Expense</td>
                <td class="text-right">500</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Rent Expense</td>
                <td class="text-right">1,500</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Supplies Expense</td>
                <td class="text-right">980</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Salaries Expsense</td>
                <td class="text-right">5,320</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Telephone Expense</td>
                <td class="text-right">130</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Utilities Expense</td>
                <td class="text-right">200</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left">Advertising Expense</td>
                <td class="text-right">120</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td class="text-left"></td>
                <td class="text-right">$36,195</td>
                <td class="text-right">$36,195</td>
                
            </tr> -->

        </tbody>
    </table>

</div>