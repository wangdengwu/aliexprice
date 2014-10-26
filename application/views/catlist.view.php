<?php include($this->view_path('common/header'));?>

    <h1>Get <?php echo $itemCount ?> products! </h1>
    <?php
        for($i=0;$i<count($items);$i++){

            $item = $items[$i];
            echo 'Subject:'.$item->subject.'<br>';
            $packageType=$item->packageType;
            $salePrice=substr($item->salePrice,4);
            $price=$salePrice*$item->lotNum;
            setlocale(LC_MONETARY, "en_US");
            echo 'Price:'.money_format("US %n", $price).'/'.$packageType.'<br>';
            echo "<image src='$item->imageUrl'/>";
            echo '<br>';
            echo "<a href='$item->detailUrl'>Detail</a>";
            echo '<br>';
        }
    ?>
    <?php echo "<a target='_self' href='/catlist.index/$catId/$pageNo'>next</a>"?>
<?php include($this->view_path('common/footer'));?>