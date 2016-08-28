<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-28
 * Time: 15:06
 */


class VIEW
{
    static public $view;
    static function init(){
        self::$view=new Smarty();
        self::$view->left_delimiter='{';
        self::$view->right_delimiter='}';
        self::$view->template_dir='tpl';
        self::$view->compile_dir='template_c';
    }
    static function assign($data){
        foreach ($data as $key=>$value){
            self::$view->assign($key,$value);
        }
    }
    static function display($template){
        self::$view->display($template);
    }
}
