<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-27
 * Time: 19:26
 */
/**
 * 入口文件
 */
define('VEI',realpath(__DIR__));
define('CORE',VEI.'/core');
define('APP',VEI.'/app');
define('DEBUGE',true);
if (DEBUGE){
    ini_set('display_errors','on');
}else{
    ini_set('display_errors','off');
}
require_once ('core/vei.php');

//require_once ('core/app/controller/')
spl_autoload_register('\core\vei::load');
\core\vei::run();