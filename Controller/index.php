<?php
use Core\App;

$app  = App::getInstance();
$db = $app->getDatabase();


if (isset($_GET['id'])){

}


$ariports = $db->query("SELECT * FROM `airports`")->get();


echo json_encode($ariports);