<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-27
 * Time: 19:45
 */
namespace core\lib;
class route{
    public $contrl;
    public $method;
    function __construct()
    {
        
        $urlpath=trim($_SERVER["REDIRECT_URL"],'/');
        if (!$urlpath){
            explode('/',$urlpath);
        }else{
            $this->contrl='index';
            $this->method='index';
        }

    }
}