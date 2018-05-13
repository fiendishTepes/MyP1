<?php 
define('DOMAIN','MyP1');
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('CUSTOM', ROOT . 'app' . DIRECTORY_SEPARATOR . 'custom' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);
/****************** ใช้ในการเรียกไฟล์ไม่ถูกว่ามันไปอยู่ไหน **************************/
define('ROOTS', str_replace("\\", '/', dirname(__FILE__)));
define('PATH', ROOTS == $_SERVER['DOCUMENT_ROOT'] ? '' : substr(ROOTS, strlen($_SERVER['DOCUMENT_ROOT']))
);

$modeules = [ROOT,APP,CORE,CONTROLLER,DATA];
set_include_path(get_include_path() . PATH_SEPARATOR . implode( PATH_SEPARATOR, $modeules));
spl_autoload_register('spl_autoload',false); //ใช้โหลดไฟล์ที่ต้องใช้ แบบ งง 

include VIEW . 'header.php';
new Application;
include VIEW . 'footer.php';

