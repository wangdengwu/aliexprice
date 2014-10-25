<?php
/**
 * Created by PhpStorm.
 * User: dwwang
 * Date: 10/25/14
 * Time: 17:32
 */
class Catlist extends MpController {

    public function doIndex($catId)
    {
        $this->view('catlist');
    }
}