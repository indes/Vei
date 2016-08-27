<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-27
 * Time: 21:14
 */
namespace app\controller;
class indexController
{
    public function index(){
        echo "这里是index";
    }
    public function __construct()
    {
        echo '123';
    }
}