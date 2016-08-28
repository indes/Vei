<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-28
 * Time: 9:00
 */

namespace core\lib;
class conf{
    static public function get($name,$file){
        $file='/core/config/'.$file.'.php';
    }
}