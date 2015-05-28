<?php

/**
 * Description of index
 *
 * @author Administrator
 */
class Welcome extends MpController {

    public function doIndex()
    {
        $html = file_get_html('http://www.aliexpress.com/');
        $urls = array();
        $imgs = array();
        foreach($html->find('.ui-banner-slider-slider') as $element){
            foreach($element->children() as $ele){
                array_push($urls,$ele->children(0)->href);
                array_push($imgs,$ele->children(0)->children(0)->src);
            }
        }
        $api_url="http://gw.api.alibaba.com/openapi/param2/2/portals.open/api.getPromotionLinks/85087";
        $http = new WoniuHttp();
        $data['trackingId'] = "aliexprice";
        $data['fields'] = "url,promotionUrl";
        $data['urls'] = join(",",$urls);
        $ref="http://www.aliexpress.com/";
        $result=$http->setReferer($ref)->post($api_url, $data);
        $result_object=json_decode($result);
        $promotionUrls=array();
        if(property_exists($result_object,'result')){
            $promotionUrls=$result_object->result->promotionUrls;
        }
        $this->view("welcome", array('imgs'=>$imgs, 'promotionUrls'=>$promotionUrls));
    }
}