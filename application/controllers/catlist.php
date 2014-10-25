<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 10/25/14
 * Time: 17:32
 */
class Catlist extends MpController {

    public function doIndex($catId='')
    {
        $data=array('catId'=>$catId);
        $this->view('catlist',$data);
    }
}