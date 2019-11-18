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
                    <td class="text-right"><ins class="doubleUnderline">$<?php echo 'test';?></ins></td>
                    <td class="text-right"><ins class="doubleUnderline">$<?php echo 'test' ; ?></ins></td>
            </tr>
            <tr></tr>

        

        </tbody>
    </table>

</div>