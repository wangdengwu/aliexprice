<?php include($this->view_path('common/header')); ?>
    <title>AliExprice.com - Online Shopping for Electronics, Fashion, Home & Garden, Toys & Sports, Automobiles from
        China.</title>
    <meta name="keywords"
          content="AliExprice, Online shopping, Shopping Online, Online Marketing, Automotive, Phones, Accessories, Computers, Electronics, Fashion, Beauty, Health, Home, Garden, Toys , Sports, Weddings, Events"/>
    <meta name="description"
          content="Online Shopping for Cheap Automotive, Phones Accessories, Computers Electronics, Fashion, Beauty Health, Home Garden, Toys Sports, Weddings Events from China; Shopping on Aliexprice |the world's Online Marketing place."/>
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
                <li><a target="_blank" rel="nofollow" href="http://s.click.aliexpress.com/e/j6EuFYjAa">Buyer
                        Protection</a></li>
                <li><a target="_blank" class="coupon-link" href="/coupon.index">Coupon</a></li>
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
                    <?php
                    for ($i = 1; $i < count($items); $i++) {
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"
                            <?php if ($i == 1){ ?>class="active"<?php } ?>></li>
                    <?php } ?>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <?php
                    for ($i = 1; $i < count($items); $i++) {
                        $item = $items[$i];
                        ?>
                        <div class="item <?php if ($i == 1) { ?>active<?php } ?>">
                            <a rel="nofollow" href="<?php echo $item['promotionUrl'] ?>"><img
                                    src="<?php echo $item['imgUrl'] ?>"></a>
                        </div>
                    <?php } ?>
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

                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="780370"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '780370', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid: '780370', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div><!--/span-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="740358"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '740358', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid: '740358', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div><!--/span-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="740360"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '740360', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid: '740360', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div><!--/span-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="740362"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '740362', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid: '740362', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div><!--/span-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="780372"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '780372', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid: '780372', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div><!--/span-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="740364"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '740364', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid: '740364', shortkey: 'i6qfEYFYn', size: '728x90', custom: {}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div><!--/span-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <script style="text/javascript">
                        document.write('<a style="display:none!important" id="760318"></a>');
                        if (window.AED_SHOW) {
                            window.AED_SHOW({wid: '760318',shortkey:'i6qfEYFYn', size:'728x90', custom:{}});
                        } else {
                            window.AED_ONLOAD = window.AED_ONLOAD || [];
                            window.AED_ONLOAD.push({wid:'760318',shortkey:'i6qfEYFYn',size:'728x90',custom:{}});
                            if (!document.getElementById("ae-ad-script-$")) {
                                var s = document.createElement("script"),
                                    h = document.getElementsByTagName("head")[0];
                                s.id = 'ae-ad-script-$';
                                s.charset = "utf-8";
                                s.async = !0;
                                s.src = "http://i.alicdn.com/ae-game/thirdparty/show-window/index.js";
                                h.insertBefore(s, h.firstChild)
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<hr/>

<?php include($this->view_path('common/footer')); ?>