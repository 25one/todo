<?php
require_once './vendor/autoload.php';

use ApiController\ApiController;

$controller = new ApiController();

if(!isset($_POST['hook'])) {$hook='Start';} 
else {$hook = $_POST['hook'];}

$action='action' . $hook;
$controller->$action();
?>
