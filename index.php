<?php 

include_once("./db.php");
include_once('./model/functions.php');


session_start();
// print_r($_SESSION);

$module = $_GET['module'] ?? '';

$module_name = ($module == '') ? 'home' : $module;
$module_filename = "./model/module-{$module_name}.php";


if (!file_exists($module_filename))
$module_filename = "./model/module-error404.php";

// print $module_filename;

include_once($module_filename);

include_once("./view/page-header.php");
include_once("./view/page-navigation.php");
include_once("./view/{$page_output['view']}");
include_once("./view/page-footer.php");

?>

