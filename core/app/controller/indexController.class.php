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
        \VIEW::display('index.tpl');
    }
    public function __construct(){

    }
}