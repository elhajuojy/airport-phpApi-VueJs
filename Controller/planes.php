<?php
use Core\App;

$app  = App::getInstance();
$db = $app->getDatabase();




$ariports = $db->query("SELECT * FROM `planes`")->get();


echo json_encode($ariports);