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
require_once ('vendor/autoload.php');
require_once ('core/lib/DB.class.php');
require_once ('core/lib/VIEW.class.php');
require_once ('core/lib/config.php');

DB::init();
VIEW::init();
define('VEI',realpath(__DIR__));
define('CORE',VEI.'/core');
define('APP',VEI.'/app');
define('DEBUGE',true);
if (DEBUGE){
    ini_set('display_errors','on');
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}else{
    ini_set('display_errors','off');
}


require_once ('core/vei.php');

spl_autoload_register('\core\vei::load');
\core\vei::run();