<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-27
 * Time: 19:37
 */
namespace core;
use core\lib\model;

class vei{

    public static $classMap=array();
    static public function run(){
//        session_start();

        $route=new \core\lib\route();
        $ctrclass=$route->contrl;
        $mtd=$route->method;


        if (is_file('core/app/controller/'.$ctrclass.'Controller.class.php')){
            include 'core/app/controller/'.$ctrclass.'Controller.class.php';
            $ctrclass='app\controller\\'.$ctrclass.'Controller';
            $ctr=new $ctrclass();
            $ctr->$mtd();
        }else{
            throw new \Exception('找不到控制器',$ctrclass);
        }
        include "core/lib/model.php";

    }
    static public function load($class){
        //自动加载类库
        if (isset(self::$classMap[$class])){
            return true;
        }else{
            $class=str_replace('\\','/',$class);
            $file=VEI.'/'.$class.'.php';
            if (is_file($file)){
                include ($file);
                self::$classMap[$class]=$class;
            }else{
                return false;
            }
        }

    }
}