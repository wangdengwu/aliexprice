<?php include($this->view_path('common/header')); ?>
<title><?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description ?>" />
</head>
<body>

<div class="container-fluid">
    <div class="container">
	    <div class="top-banner">
            <img class="center-block" src="http://atms02.alicdn.com/tps/i2/TB1ecKwHVXXXXXKXVXXsvvJHXXX-990-280.jpg">
	    </div>
    </div>
    <div class="mod-title min-width center-block">
		<h3>Seller Coupons</h3>
	</div>
	<div class="container">
		<div class="center-block coupon-body">
			<div class="col-main">
				<div class="main-wrap">
					<div class="mod-main">
                        <ul class="coupon-list clearfix">
                        <?php
                            for($i=0;$i<count($items);$i++){
                                $item = $items[$i];
                                $href=$item->href;
                                $img=$item->img;
                                $store=$item->store;
                                $price=$item->price;
                                $order=$item->order;
                                $time=$item->time;
                         ?>
                            <li>
								<a rel="nofollow" href="<?php echo $href ?>">
									<div class="store-img">
                                        <img src="<?php echo $img ?>">
                                    </div>
									<div class="coupon-info">
                                        <span class="store-name"><?php echo $store ?></span>
                                        <span class="coupon-price"><em><?php echo $price ?></em> off</span>
										<span class="coupon-order-price">per <em><?php echo $order ?></em></span>
										<span class="coupon-time"><?php echo $time ?></span>
									</div>
								</a>
							</li>
                         <?php } ?>
                        </ul>
                    </div>
				</div>
			</div>
            <div class="col-sub">
                <div class="categories-list">
                    <ul>
                        <li><a href="/catlist.index/3" >Apparel & Accessories</a></li>
                        <li><a href="/catlist.index/34" >Automobiles & Motorcycles</a></li>
                        <li><a href="/catlist.index/1501" >Baby Products</a></li>
                        <li><a href="/catlist.index/66" >Beauty & Health</a></li>
                        <li><a href="/catlist.index/7" >Computer & Networking</a></li>
                        <li><a href="/catlist.index/13" >Construction & Real Estate</a></li>
                        <li><a href="/catlist.index/44" >Consumer Electronics</a></li>
                        <li><a href="/catlist.index/100008578" >Customized Products</a></li>
                        <li><a href="/catlist.index/5" >Electrical Equipment & Supplies</a></li>
                        <li><a href="/catlist.index/502" >Electronic Components & Supplies</a></li>
                        <li><a href="/catlist.index/2" >Food</a></li>
                        <li><a href="/catlist.index/1503" >Furniture</a></li>
                        <li><a href="/catlist.index/200003655" >Hair & Accessories</a></li>
                        <li><a href="/catlist.index/42" >Hardware</a></li>
                        <li><a href="/catlist.index/15" >Home & Garden</a></li>
                        <li><a href="/catlist.index/6" >Home Appliances</a></li>
                        <li><a href="/catlist.index/200003590" >Industry & Business</a></li>
                        <li><a href="/catlist.index/36" >Jewelry & Watch</a></li>
                        <li><a href="/catlist.index/39" >Lights & Lighting</a></li>
                        <li><a href="/catlist.index/1524" >Luggage & Bags</a></li>
                        <li><a href="/catlist.index/21" >Office & School Supplies</a></li>
                        <li><a href="/catlist.index/509" >Phones & Telecommunications</a></li>
                        <li><a href="/catlist.index/30" >Security & Protection</a></li>
                        <li><a href="/catlist.index/322" >Shoes</a></li>
                        <li><a href="/catlist.index/200001075" >Special Category</a></li>
                        <li><a href="/catlist.index/18" >Sports & Entertainment</a></li>
                        <li><a href="/catlist.index/1420" >Tools</a></li>
                        <li><a href="/catlist.index/26" >Toys & Hobbies</a></li>
                        <li><a href="/catlist.index/1511" >Watches</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include($this->view_path('common/footer')); ?>