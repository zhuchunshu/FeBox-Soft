<?php

namespace App\Plugins\Soft\src\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;

/**
 * Class IndexController
 * @Controller
 * @package App\Plugins\Soft\src\Controller
 */
class IndexController
{
    /**
     * @GetMapping(path="/")
     * @return array
     */
    public function index(): array
    {
        return Json_Api(200,true,['msg' => "HelloWorld"]);
    }
}