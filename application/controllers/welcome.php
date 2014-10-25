<?php

/**
 * Description of index
 *
 * @author Administrator
 */
class Welcome extends MpController {

    public function doIndex()
    {
        $this->view('welcome');
    }
}
