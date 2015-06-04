$(document).ready(function () {

    const selector = "li.image-nav-item img";
    $(selector).each(function (index, ele) {
        if(index==0){
            $(ele).parent().parent().addClass("current");
        }
    });
    $(selector).mouseenter(
        function (event) {
            var current = $(event.target)[0];
            $(selector).each(function (index, ele) {
                if (ele == current) {
                    var imageURL = window.runParams.imageBigViewURL[index];
                    $("#product_big_pic").attr("src", imageURL);
                }
                if ($(ele).parent().parent().hasClass("current")) {
                    $(ele).parent().parent().removeClass("current");
                }
            });
            $(current).parent().parent().addClass("current");
        }
    );


    var win = $(window);
    win.scroll(function () {
        if (win.scrollTop() > 500) {
            $(".ui-fixed-panel-go-top").removeClass("hidden");
            $(".ui-fixed-panel-go-top").addClass("show");
        } else {
            $(".ui-fixed-panel-go-top").removeClass("show");
            $(".ui-fixed-panel-go-top").addClass("hidden");
        }
    });

    if(window.runParams.discount){
        $("#magnifier").append($('<div class="discount-flag">'+window.runParams.discount+'</div>'));
    }

    var src = "http://utm.alibaba.com/eventdriver/recommendEntry.do?callback=showProductList&sceneId=2037&companyId="+window.runParams.companyId;
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = src;
    $("head").append(script);

    $( "div.desc-loading" ).replaceWith(window.productDescription);
});
function showProductList(json){
    var urls= $("#product_detail_url").attr('href');
    urls+=','+$("#visit-store").attr('href');
    $(json.items).each(function(index,item){
        urls+=','+item.productUrl;
    });
    $.post( "/index.php/ajax.index", { urls: urls},function(data){
        //console.log(data);
        //console.log(data.result);
        if(data.errorCode===20010000){
            $(data.result.promotionUrls).each(function (index, item) {
                if(index==0){
                    $("#product_detail_url").attr('href',item.promotionUrl);
                }
                if(index==1){
                    $("#visit-store").attr('href',item.promotionUrl);
                    $("#store_link a:first-child").attr('href',item.promotionUrl);
                }
                if(index!=0&&index!=1){
                    $("#pic"+index).attr('href',item.promotionUrl);
                    $("#link"+index).attr('href',item.promotionUrl);
                }
            });
        }
    });
    $(json.items).each(function(index,item){
        $("#seller-top-selling").append($('<div class="ui-product-listitem "><div class="ui-product-listitem-thumb"> <a id="pic'+(index+2)+'" href="'+item.productUrl+
        '" rel="nofollow" target="_blank"> <img alt="'+item.subject+'" src="'+item.image140Path+
        '"> </a> </div> <div class="ui-product-listitem-info"> <a id="link'+(index+2)+'" rel="nofollow" class="ui-product-listitem-title" href="'+item.productUrl+
        '" title="'+item.subject+'" target="_blank">'+item.simpleName+
        '</a> <div class="ui-product-listitem-row ui-cost"><b class="notranslate">'+item.currencySymbol+item.lowerPrice+
        '</b> / '+item.oddUnitName+'</div> <div class="ui-product-listitem-row">Recent Orders ('+item.saleInSixMonth+')</div> </div> </div>'));
    });
}