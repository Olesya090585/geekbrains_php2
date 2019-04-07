<?php

//include_once "c/C_Controller.php";
//include_once "c/C_Base.php";
//include_once "c/C_Page.php";

function __autoload($classname){
	include_once("/Users/o.varnakova/PhpstormProjects/geekbrains_php2/homework5/c/$classname.php");
}

//spl_autoload_register(function ($class) {
//    include_once '/Users/o.varnakova/PhpstormProjects/geekbrains_php2/homework5/c/' . $class . '.php';
//});

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

//switch ($_GET['c'])
//{
//	case 'articles':
//		$controller = new C_Page();
//		break;
//	default:
//		$controller = new C_Page();
//}

$controller = new C_Page();
$controller->Request($action);
