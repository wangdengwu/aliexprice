<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 6/5/15
 * Time: 00:10
 */
class Ajax extends MpController
{

    public function doIndex(){
        $urls = $_POST['urls'];
        $api_url="http://gw.api.alibaba.com/openapi/param2/2/portals.open/api.getPromotionLinks/85087";
        $http = new WoniuHttp();
        $data['trackingId'] = "aliexprice";
        $data['fields'] = "url,promotionUrl";
        $data['urls'] = $urls;
        $ref="http://www.aliexprice.com/";
        $result=$http->setReferer($ref)->post($api_url, $data);
        header('Content-Type: application/json');
        echo $result;
    }
}