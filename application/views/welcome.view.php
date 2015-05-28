<?php include($this->view_path('common/header'));?>
<title>AliExprice.com -  Online Shopping for Electronics, Fashion, Home & Garden, Toys & Sports, Automobiles from China.</title>
<meta name="keywords" content="AliExprice, Online shopping, Shopping Online, Online Marketing, Automotive, Phones, Accessories, Computers, Electronics, Fashion, Beauty, Health, Home, Garden, Toys , Sports, Weddings, Events" />
<meta name="description" content="Online Shopping for Cheap Automotive, Phones Accessories, Computers Electronics, Fashion, Beauty Health, Home Garden, Toys Sports, Weddings Events from China; Shopping on Aliexprice |the world's Online Marketing place." />
</head>
<body>
    <nav class="navbar navbar-default" id="header">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span><img alt="AliFastShopping" src="/img/logo-new-1x.png"></span>
                    <span class="logo-slogan">Smarter Shopping, Better Living!</span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a target="_blank" rel="nofollow" href="http://s.click.aliexpress.com/e/j6EuFYjAa">Buyer Protection</a></li>
                    <li><a target="_blank" href="/coupon.index">Coupon</a></li>
                </ul>
                <form method="post" action="/catlist.index" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="I'm shopping for...">
                    </div>
                    <button type="submit" class="btn btn-default">GO!</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-3" id="sidebar" role="navigation">
                <div class="list-group">
                    <a href="/catlist.index/3" class="list-group-item">Apparel & Accessories</a>
                    <a href="/catlist.index/34" class="list-group-item">Automobiles & Motorcycles</a>
                    <a href="/catlist.index/1501" class="list-group-item">Baby Products</a>
                    <a href="/catlist.index/66" class="list-group-item">Beauty & Health</a>
                    <a href="/catlist.index/7" class="list-group-item">Computer & Networking</a>
                    <a href="/catlist.index/13" class="list-group-item">Construction & Real Estate</a>
                    <a href="/catlist.index/44" class="list-group-item">Consumer Electronics</a>
                    <a href="/catlist.index/100008578" class="list-group-item">Customized Products</a>
                    <a href="/catlist.index/5" class="list-group-item">Electrical Equipment & Supplies</a>
                    <a href="/catlist.index/502" class="list-group-item">Electronic Components & Supplies</a>
                    <a href="/catlist.index/2" class="list-group-item">Food</a>
                    <a href="/catlist.index/1503" class="list-group-item">Furniture</a>
                    <a href="/catlist.index/200003655" class="list-group-item">Hair & Accessories</a>
                    <a href="/catlist.index/42" class="list-group-item">Hardware</a>
                    <a href="/catlist.index/15" class="list-group-item">Home & Garden</a>
                    <a href="/catlist.index/6" class="list-group-item">Home Appliances</a>
                    <a href="/catlist.index/200003590" class="list-group-item">Industry & Business</a>
                    <a href="/catlist.index/36" class="list-group-item">Jewelry & Watch</a>
                    <a href="/catlist.index/39" class="list-group-item">Lights & Lighting</a>
                    <a href="/catlist.index/1524" class="list-group-item">Luggage & Bags</a>
                    <a href="/catlist.index/21" class="list-group-item">Office & School Supplies</a>
                    <a href="/catlist.index/509" class="list-group-item">Phones & Telecommunications</a>
                    <a href="/catlist.index/30" class="list-group-item">Security & Protection</a>
                    <a href="/catlist.index/322" class="list-group-item">Shoes</a>
                    <a href="/catlist.index/200001075" class="list-group-item">Special Category</a>
                    <a href="/catlist.index/18" class="list-group-item">Sports & Entertainment</a>
                    <a href="/catlist.index/1420" class="list-group-item">Tools</a>
                    <a href="/catlist.index/26" class="list-group-item">Toys & Hobbies</a>
                    <a href="/catlist.index/1511" class="list-group-item">Watches</a>
                </div>
            </div>
            <div class="col-sm-9">
                <!--My carousel-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="5" class=""></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="<?php echo $promotionUrls[0]->promotionUrl?>"><img class="first-slide" src="<?php echo $imgs[0]?>" alt="First slide"></a>
                        </div>
                        <div class="item">
                            <a href="<?php echo $promotionUrls[1]->promotionUrl?>"><img class="second-slide" src="<?php echo $imgs[1]?>" alt="Second slide"></a>
                        </div>
                        <div class="item">
                            <a href="<?php echo $promotionUrls[2]->promotionUrl?>"><img class="third-slide" src="<?php echo $imgs[2]?>" alt="Third slide"></a>
                        </div>
                        <div class="item">
                            <a href="<?php echo $promotionUrls[3]->promotionUrl?>"><img class="forth-slide" src="<?php echo $imgs[3]?>" alt="Forth slide"></a>
                        </div>
                        <div class="item">
                            <a href="<?php echo $promotionUrls[4]->promotionUrl?>"><img class="fifth-slide" src="<?php echo $imgs[4]?>" alt="Fifth slide"></a>
                        </div>
                        <div class="item">
                            <a href="<?php echo $promotionUrls[5]->promotionUrl?>"><img class="sixth-slide" src="<?php echo $imgs[5]?>" alt="Sixth slide"></a>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div><!--/My carousel-->
                <div class="row" id="promotions">
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/UrrnQRzbq?bz=300*250" target="_parent"><img width="250" height="210" src="http://g01.a.alicdn.com/kf/HTB1RLPnGVXXXXbaaXXXq6xXFXXXx/300x250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/A2z7MBu3J" target="_parent" role="button">Bestselling Products</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/YbEMnyrFM?bz=300*250" target="_parent"><img width="250" height="210"src="http://g01.a.alicdn.com/kf/HTB1NoYDGVXXXXaoaFXXq6xXFXXXl/PPC.Banner.300x250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/mMR37urnY" target="_parent">The Secret To Looking Great</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/66y76MrFm?bz=300*250" target="_parent"><img width="250" height="210"src="http://g01.a.alicdn.com/kf/HTB1vUT.GVXXXXauaXXXq6xXFXXXX/300x250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/Baqrn2RNN" target="_parent">Travel safely and comfortably</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/yNvBmmyJ2?bz=300*250" target="_parent"><img width="250" height="210"src="http://g01.a.alicdn.com/kf/HTB1JjfVGFXXXXbdaXXXq6xXFXXXo/300x250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/Jyjyji6A6" target="_parent">Fashion Men Channel</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/eURbIIIie?bz=300*250" target="_parent"><img width="250" height="210"src="http://gtms02.alicdn.com/tps/i2/TB1usUQFFXXXXaiXVXXK0sWQpXX-300-250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/jau7eiiaa" target="_parent">Big & Beautiful</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/2n6a6Iyzr?bz=300*250" target="_parent"><img width="250" height="210"src="http://gtms03.alicdn.com/tps/i3/T1luf9FJJXXXbwqofS-300-250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/niunUvfIQ" target="_parent">Walk This Way</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/aUVFuburZ?bz=300*250" target="_parent"><img width="250" height="210"src="http://gtms03.alicdn.com/tps/i3/TB1s0BUFFXXXXX5aFXXK0sWQpXX-300-250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/iAQFaAunY" target="_parent">Gadgets for Everyday use</a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/n6Eaey76y?bz=300*250" target="_parent"><img width="250" height="210"src="http://g01.a.alicdn.com/kf/HTB1PvLOGFXXXXc0XVXXq6xXFXXXd/300x250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/jmuJQVFQJ" target="_parent">Bags channel </a></p>
                    </div><!--/span-->
                    <div class="col-6 col-sm-6 col-lg-4">
                        <a href="http://s.click.aliexpress.com/e/YFE2bAQNZ?bz=300*250" target="_parent"><img width="250" height="210"src="http://g01.a.alicdn.com/kf/HTB1ukuWGXXXXXXEapXXq6xXFXXXn/300x250.jpg"/></a>
                        <p><a class="btn btn-default" href="http://s.click.aliexpress.com/e/Z3nUFy3Vv" target="_parent">Shoes channel</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr/>

<?php include($this->view_path('common/footer'));?>