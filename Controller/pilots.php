<?php
use Core\App;

$app  = App::getInstance();
$db = $app->getDatabase();




$pilots = $db->query("SELECT * FROM `pilots`")->get();


echo json_encode($pilots);