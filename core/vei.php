<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-27
 * Time: 19:37
 */
namespace core;
class vei{

    public static $classMap=array();
    static public function run(){
        $route=new \core\lib\route();
        var_dump($route);
        var_dump($_GET);
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