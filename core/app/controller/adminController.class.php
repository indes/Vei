<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-27
 * Time: 23:34
 */

namespace app\controller;


class adminController
{
    public function index(){
        dump($_SESSION);
    }
    public function login(){
//        dump("这里是登陆界面");
        $_SESSION["h"]=123;
    }
}