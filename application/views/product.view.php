<?php include($this->view_path('common/header'));?>
<title><?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description ?>" />
<link href="/css/product-detail.css?v=1" rel="stylesheet">
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
<div class="container-fluid main">
    <section class="col-lg-4 col-xs-4" >
        <div id="img" class="img-350">
            <div class="ui-image-viewer" id="magnifier">
                <img id="product_big_pic" src="<?php echo $product_big_pic ?>" style="width: 350px; height: 327.25px;">
            </div>
            <ul class="image-nav list-inline">
                <?php echo $image_nav ?>
            </ul>
        </div>
    </section>
    <section class="col-lg-6 col-xs-6" >
        <div class="main-wrap util-clearfix">
            <h1 class="product-name" itemprop="name"><?php echo $productName ?></h1>
            <div class="product-star-order">
                <?php echo $product_star_order ?>
            </div>
            <div class="product-info-wrap">
                <div class="product-info">
                        <div id="product-info-price-pnl">
                            <dl class="product-info-original">
                                <?php echo $product_info_original ?>
                            </dl>

                            <dl class="product-info-current">
                                <?php echo $product_info_current ?>
                            </dl>
                        </div>


                        <div class="product-info-operation">

                            <div class="product-info-action">
                                <div class="buy-now">
                                    <a id="product_detail_url" rel="nofollow" class="buy-now-btn" href="<?php echo $product_detail_url ?>">Buy Now</a>
                                </div>

                            </div>

                        </div>

                    <div id="buy-banner">
                        <div class="bp-horizontal-banner ">
                            <span class="bp-icon"></span>
                            <div class="buy-protection-info">
                                <h3>Buyer Protection</h3>
                                <ul class="buy-protection-info-list util-clearfix">
                                    <li class="bp-info-item"><em>Full Refund</em> if you don't receive your order</li>
                                    <li class="bp-info-item"><em>Refund or Keep</em> items not as described</li>
                                </ul>
                                <div class="buy-protection-more">
                                    <a rel="nofollow" target="_blank" href="http://s.click.aliexpress.com/e/j6EuFYjAa">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="col-lg-2 col-xs-2" >
        <div class="seller-info-wrap">
            <div class="seller-info">
                <div class="seller">
                    <div class="title">Sold By</div>
                    <div id="store_link" class="company-name notranslate">
                        <?php echo $store_lnk ?>
                    </div>
                    <?php echo $address ?>
                    <?php echo $visit_store ?>
                </div>
            </div>
            <div class="seller-top-selling">
                <div class="ui-box ui-box-primary">
                    <h3 class="ui-box-title">Top Selling Products From This Seller</h3>
                    <div id="seller-top-selling" class="ui-box-body">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-description col-lg-offset-2 col-xs-offset-2 col-lg-8 col-xs-8">
        <div id="pdt" class="ui-tab-pane ui-switchable-panel" style="display: block;">
            <div id="product-desc" class="product-desc">
                <?php echo $product_params ?>
                <?php echo $product_custom_desc ?>
                <div class="related-searches">
                    <div class="title">
                        <?php //echo $related_searches_title ?>
                    <?php
                     /*   $i=0;
                        foreach($related_searches_keywords as $keyword){
                            if($i>4){
                                return false;
                            }
                            $i++;
                            echo '<a class="width-fix" href="/catlist.index/'.$keyword->innertext.'">'.$keyword->innertext.'</a>';
                        }
                     */
                    ?>
                </div>
            </div>
        </div>
    </section>
    <div class="ui-fixed-panel" style="position: fixed; visibility: visible; bottom:10px; right:10px;">
        <div class="ui-fixed-panel-operation">
            <div class="ui-fixed-panel-unit ui-fixed-panel-go-top hidden" style="opacity: 1;">
                <a href="#"></a>
            </div>
        </div>
    </div>
</div>
<?php
    foreach($script as $js)
    {
        if (strpos($js,'window.runParams') !== false ) {
            echo $js;
        }
    }
?>
 <script type="text/javascript">
    <?php echo $product_custom_javascript ?>
 </script>
<?php include($this->view_path('common/footer'));?>
 <script src="/js/product-detail.js"></script>
