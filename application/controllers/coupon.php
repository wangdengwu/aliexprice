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
        $viewData=array('productName'=>'Coupon');
        $this->view('coupon',$viewData);
    }

}