<?php include($this->view_path('common/header'));?>
<title><?php echo $catName.' and more on Aliexprice.com' ?></title>
<meta name="keywords" content="<?php echo $catName.',Online Shopping '.$catName ?>" />
<meta name="description" content="<?php echo $catName.' and more from Aliexpress.com, Factory Price, Worldwide Shipping!' ?>" />
</head>
<body>
    <nav class="navbar navbar-default" id="header">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <span><img alt="AliFastShopping" src="/img/logo-new-1x.png"></span>
                    <span class="logo-slogan">Smarter Shopping, Better Living!</span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a target="_blank" rel="nofollow" href="http://s.click.aliexpress.com/e/j6EuFYjAa">Buyer Protection</a></li>
                    <li><a target="_blank" href="/coupon.index">Coupon</a></li>
                </ul>
                <form method="post" action="/catlist.index" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" name="keywords" class="form-control" placeholder="I'm shopping for...">
                    </div>
                    <button type="submit" class="btn btn-default">GO!</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="container" style="margin-top: 10px">
            <ol class="breadcrumb">
                <li><a href="http://www.aliexprice.com">Home</a></li>
                <li class="active"><?php echo $catName ?> <span class="badge"><?php echo $itemCount ?></span></li>
            </ol>
            <?php
            for($i=0;$i<count($items);$i++){
                $item = $items[$i];
                $imgUrl=$item->imageUrl;
                $packageType=$item->packageType;
                $salePrice=substr($item->salePrice,4);
                $price=$salePrice*$item->lotNum;
                $productId=$item->productId;
                setlocale(LC_MONETARY, "en_US");
            ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" style="height: 480px">
<!--                            <a href="/product.index/--><?php //echo $productId ?><!--" target="_self">-->
                                <img style="height: 340px" src='<?php echo $imgUrl ?>'>
<!--                            </a>-->
                            <div class="caption">
                                <p><?php echo $item->subject ?></p>
                                <p>
                                    <span style="font-size: large;color: #bd1a1d"><?php echo money_format("US %n", $price)?></span>
                                    <span style="font-size: small;color: #999"> / <?php echo $packageType?></span>
                                    <a href="<?php echo $item->detailUrl?>" class="btn btn-success pull-right" role="button">Buy Now</a>
                                </p>

                            </div>
                        </div>
                    </div>
            <?php } ?>
            <div class="center-block">
                <ul class="pagination pagination-lg" style="margin-left: 28%"><!-- style="display: table;margin-left: auto;margin-right: auto" -->
                    <li class="<?php if($pre<=0) echo 'disabled'?>"><a href="/catlist.index/<?php echo $catId.'/'.($pre<=0?1:$pre)?>">&laquo;</a></li>
                    <li class="previous <?php if($pageNo-1<=0) echo 'disabled'?>"><a href="/catlist.index/<?php echo $catId.'/'.(($pageNo-1)<=0?1:($pageNo-1))?>">&larr; Older</a></li>
                    <li <?php if($pageNo==$one)echo 'class="active"'?>><a href="/catlist.index/<?php echo $catId.'/'.$one?>"><?php echo $one?></a></li>
                    <li <?php if($pageNo==$two)echo 'class="active"'?>><a href="/catlist.index/<?php echo $catId.'/'.$two?>"><?php echo $two?></a></li>
                    <li <?php if($pageNo==$three)echo 'class="active"'?>><a href="/catlist.index/<?php echo $catId.'/'.$three?>"><?php echo $three?></a></li>
                    <li <?php if($pageNo==$four)echo 'class="active"'?>><a href="/catlist.index/<?php echo $catId.'/'.$four?>"><?php echo $four?></a></li>
                    <li <?php if($pageNo==$five)echo 'class="active"'?>><a href="/catlist.index/<?php echo $catId.'/'.$five?>"><?php echo $five?></a></li>
                    <li class="next"><a href="/catlist.index/<?php echo $catId.'/'.($pageNo+1)?>">Newer &rarr;</a></li>
                    <li><a href="/catlist.index/<?php echo $catId.'/'.$next?>">&raquo;</a></li>
                </ul>
            </div>
        </div>
</div>
<?php include($this->view_path('common/footer'));?>