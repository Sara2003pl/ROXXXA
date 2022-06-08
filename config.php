<?php

$db = new mysqli("localhost", "root", "", "roxxxa");
require_once("./vendor/autoload.php");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

?>