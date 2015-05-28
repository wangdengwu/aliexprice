<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 5/27/15
 * Time: 22:13
 */
class Coupon extends MpController
{

    public function doIndex()
    {
        $html = file_get_html('http://coupon.aliexpress.com/');
        $lis = array();
        $urls = array();
        foreach($html->find('.coupon-list li') as $element){
            $link = $element->children(0);
            $href=$link->href;
            $img=$link->children(0)->children(0)->src;
            $store=$link->children(1)->children(0)->innertext;
            $price=$link->children(1)->children(1)->children(0)->innertext;
            $order=$link->children(1)->children(2)->children(0)->innertext;
            $time=$link->children(1)->children(3)->innertext;
            $li = (object) array('href' => $href, 'img' => $img, 'store' => $store, 'price' => $price, 'order' => $order, 'time' => $time);
            array_push($lis,$li);
            array_push($urls,$href);
        }
        $api_url="http://gw.api.alibaba.com/openapi/param2/2/portals.open/api.getPromotionLinks/85087";
        $http = new WoniuHttp();
        $data['trackingId'] = "aliexprice";
        $data['fields'] = "url,promotionUrl";
        $data['urls'] = join(",",$urls);
        $ref="http://www.aliexprice.com/";
        $result=$http->setReferer($ref)->post($api_url, $data);
//        echo $result;
        $result_object=json_decode($result);
        $hrefs = $result_object->result->promotionUrls;
        for($i=0;$i<count($hrefs);$i++){
            $url = $hrefs[$i];
            $item = $lis[$i];
            $item->href = $url->promotionUrl;
        }
//        var_dump($lis);
        $viewData=array('items'=>$lis,'title'=>"Aliexprice.com - Online Shopping for Electronics, Fashion, Home &amp; Garden, Toys &amp; Sports, Automobiles from China.",
                        'keywords'=>"Aliexprice, Online shopping, Shopping Online, Online Marketing, Automotive, Phones, Accessories, Computers, Electronics, Fashion, Beauty, Health, Home, Garden, Toys , Sports, Weddings, Events",
                        'description'=>"Online Shopping for Cheap Automotive, Phones Accessories, Computers Electronics, Fashion, Beauty Health, Home Garden, Toys Sports, Weddings Events from China; Shopping on Aliexprice |the world's Online Marketing place.");
        $this->view('coupon',$viewData);
    }

}