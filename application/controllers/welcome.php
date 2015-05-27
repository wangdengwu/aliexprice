<?php

/**
 * Description of index
 *
 * @author Administrator
 */
class Welcome extends MpController {

    public function doIndex()
    {
//        $html = file_get_html('http://www.aliexpress.com/');
//        $urls = array();
//        foreach($html->find('.ui-banner-slider-slider') as $element){
//            foreach($element->children() as $ele){
//                array_push($urls,$ele->children(0)->href);
//            }
//        }
//        echo $urls;
//        $api_url="http://gw.api.alibaba.com/openapi/param2/2/portals.open/api.getPromotionLinks/85087";
//        $http = new WoniuHttp();
//        $data['trackingId'] = "aliexprice";
//        $data['fields'] = "url,promotionUrl";
//        $data['urls'] = 'http://www.aliexpress.com/buyerprotection/index.html';//join(",",$urls);
//        $ref="http://www.aliexprice.com/";
//        $result=$http->setReferer($ref)->post($api_url, $data);
//        echo $result;
        $this->view('welcome');
    }
}