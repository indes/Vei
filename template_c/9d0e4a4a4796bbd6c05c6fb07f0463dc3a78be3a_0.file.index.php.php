<?php
/* Smarty version 3.1.30, created on 2016-08-28 07:45:08
  from "D:\MyProjects\PhpStormProjects\Vei\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c2968409bb51_49793869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d0e4a4a4796bbd6c05c6fb07f0463dc3a78be3a' => 
    array (
      0 => 'D:\\MyProjects\\PhpStormProjects\\Vei\\index.php',
      1 => 1472370276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c2968409bb51_49793869 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>/**
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
\core\vei::run();<?php }
}
