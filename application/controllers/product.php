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
        $viewData=array('productId'=>$productId,'productName'=>'Test Test');
        $this->view('product',$viewData);
    }

}