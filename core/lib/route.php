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
        /**
         * 解析url
         */
        if (isset($_SERVER["REDIRECT_URL"])&&$_SERVER["REDIRECT_URL"]!='/'){
            $urlpath=trim($_SERVER["REDIRECT_URL"],'/');
            if ($urlpath){
                $patharr=explode('/',$urlpath);
                if(isset($patharr[0])){
                    $this->contrl=$patharr[0];
                }
                unset($patharr[0]);
                if (isset($patharr[1])){
                    $this->method=$patharr[1];
                    unset($patharr[1]);
                }else{
                    $this->method='index';
                }
                //将多余的url路径转换为GET参数
                $count=count($patharr)+2;
                $i=2;
                while($i<$count){
                    if(isset($patharr[$i+1])){
                        $_GET[$patharr[$i]]=$patharr[$i+1];
                    }
                    $i=$i+2;
                }
            }else{
                $this->contrl='index';
                $this->method='index';
            }
        }


    }
}