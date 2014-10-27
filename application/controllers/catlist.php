<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 10/25/14
 * Time: 17:32
 */
class Catlist extends MpController {

    public function doIndex($catId='3',$pageNo=1)
    {
        $ref="http://www.aliexprice.com/";
        $api_url="http://gw.api.alibaba.com/openapi/param2/1/portals.open/api.listPromotionProduct/85087";
        $http = new WoniuHttp();
        $data['categoryId'] = $catId;
        $data['trackingId'] = "aliexprice";
        $data['pageNo'] = $pageNo;
        $data['pageSize'] = 21;
        $result=$http->setReferer($ref)->post($api_url, $data);
//        echo $result;
        $result_object=json_decode($result);
        $items=array();
        $itemCount=0;
        if(property_exists($result_object,'result')){
            $items=$result_object->result->items;
            $itemCount=$result_object->result->total;
        }
        $this->helper('config');
        $catName=$this->config('catList',$catId);
        $pre=$pageNo-5;
        $next=$pageNo+5;
        $yushu=$pageNo%5;
        if($yushu==1) {
            $one =$pageNo;
            $two =$pageNo+1;
            $three =$pageNo+2;
            $four =$pageNo+3;
            $five =$pageNo+4;
        }
        if($yushu==2) {
            $one =$pageNo-1;
            $two =$pageNo;
            $three =$pageNo+1;
            $four =$pageNo+2;
            $five =$pageNo+3;
        }
        if($yushu==3) {
            $one =$pageNo-2;
            $two =$pageNo-1;
            $three =$pageNo;
            $four =$pageNo+1;
            $five =$pageNo+2;
        }
        if($yushu==4) {
            $one =$pageNo-3;
            $two =$pageNo-2;
            $three =$pageNo-1;
            $four =$pageNo;
            $five =$pageNo+1;
        }
        if($yushu==0) {
            $one =$pageNo-4;
            $two =$pageNo-3;
            $three =$pageNo-2;
            $four =$pageNo-1;
            $five =$pageNo;
        }
        $catlist=array('itemCount'=>$itemCount,'pageNo'=>$pageNo,'pre'=>$pre,'next'=>$next,'one'=>$one,'two'=>$two,'three'=>$three,'four'=>$four,'five'=>$five,'items'=>$items,'catId'=>$catId,'catName'=>$catName);
        $this->view('catlist',$catlist);
    }
}