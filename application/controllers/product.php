<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 5/27/15
 * Time: 22:13
 */
class Product extends MpController
{

    public function doIndex($productId)
    {
        $html = file_get_html('http://www.aliexpress.com/item/xxxx/'.$productId.'.html');
        $productName = $html->find('.product-name',0)->innertext;
        $keywords = $html->find('meta[name=keywords]',0)->content;
        $description = $html->find('meta[name=description]',0)->content;
        $product_big_pic = $html->find('.ui-image-viewer-thumb-frame',0)->children(0)->src;
        $image_nav = $html->find('.image-nav',0)?$html->find('.image-nav',0)->innertext:null;
        $script = $html->find('script[!src]');
        $product_star_order = $html->find('.product-star-order',0)->innertext;
        $product_info_original = $html->find('.product-info-original',0)?$html->find('.product-info-original',0)->innertext:null;
        $product_info_current = $html->find('.product-info-current',0)->innertext;

        $product_orgin_detail = $html->find('link[hreflang=en]',0)->href;
        $store_link = $html->find('a.store-lnk',0);
        $visit_store = $html->find('#visit-store',0);
        $address = $html->find('address',0);
        $product_params = $html->find('div.product-params',0);
        $product_custom_desc = $html->find('div.product-custom-desc',0);
//        var_dump($store_link);
        //所有链接都通过页面AJAX去获取然后更新，多次请求会导致很慢
//        echo $product_orgin_detail;
        $product_custom_javascript = file_get_html('http://desc.aliexpress.com/getDescModuleAjax.htm?productId='.$productId);
//        $related_searches = file_get_html('http://www.aliexpress.com/seo/detailCrosslinkAjax.htm?productId='.$productId);
//        $related_searches_title = $related_searches->find('div.title strong',0);
//        $related_searches_keywords = $related_searches->find('a.width-fix');
        $viewData=array('title'=>$productName,
                        'keywords'=>$keywords,
                        'description'=>$description,
                        'product_big_pic'=>$product_big_pic,
                        'script'=>$script,
                        'image_nav'=>$image_nav,
                        'product_star_order'=>$product_star_order,
                        'product_info_original'=>$product_info_original,
                        'product_info_current'=>$product_info_current,
                        'product_detail_url'=>$product_orgin_detail,
                        'store_lnk'=>$store_link,
                        'visit_store'=>$visit_store,
                        'address'=>$address,
                        'product_params'=>$product_params,
                        'product_custom_desc'=>$product_custom_desc,
//                        'related_searches_title'=>$related_searches_title,
                        'product_custom_javascript'=>$product_custom_javascript,
//                        'related_searches_keywords'=>$related_searches_keywords,
                        'productId'=>$productId,
                        'productName'=>$productName);
        $this->view('product',$viewData);
    }

}