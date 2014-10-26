<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 10/25/14
 * Time: 17:32
 */
class Catlist extends MpController {

    public function doIndex($catId='',$pageNo=1)
    {
        $ref="http://www.aliexprice.com/";
        $api_url="http://gw.api.alibaba.com/openapi/param2/1/portals.open/api.listPromotionProduct/85087";
        $http = new WoniuHttp();
        $data['categoryId'] = $catId;
        $data['trackingId'] = "aliexprice";
        $data['pageNo'] = $pageNo;
        $result=$http->setReferer($ref)->post($api_url, $data);
//        echo $result;
        $result_object=json_decode($result);
        $items=array();
        $itemCount=0;
        if($result_object->result){
            $items=$result_object->result->items;
            $itemCount=$result_object->result->total;
        }
        $catlist=array('itemCount'=>$itemCount,'pageNo'=>$pageNo+1,'items'=>$items,'catId'=>$catId);
        $this->view('catlist',$catlist);
    }
}