<?php
use Core\App;

$app  = App::getInstance();
$db = $app->getDatabase();




$flights = $db->query("SELECT * FROM `flights`")->get();


echo json_encode($flights);