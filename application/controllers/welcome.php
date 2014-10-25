<?php

/**
 * Description of index
 *
 * @author Administrator
 */
class Welcome extends MpController {

    public function doIndex($name = '')
    {
        $http = new WoniuHttp();
        $data = $http->get('http://www.aliexpress.com', null, null, 1);
        $this->echo($data);
    }
}
