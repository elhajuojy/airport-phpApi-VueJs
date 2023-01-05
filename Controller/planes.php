<?php
use Core\App;

$app  = App::getInstance();
$db = $app->getDatabase();


$method = $_SERVER['REQUEST_METHOD'];
if ('DELETE' === $method) {

    dd($_SERVER);
    
    $planes = $db->query("DELETE FROM `planes` WHERE id =:id",
        [
            "id"=>$_DELETE['id']
        ]
    );

    $response  = [
        "message"=>"Deleted successfully"
    ];
    http_response_code(200);
    echo json_encode($response);
    die();

}

if (isset($_POST['model'] )||isset($_POST['capacity'] )){
    $planes = $db->query("INSERT INTO `planes` (`model`,`capacity`) VALUES (:model,:capacity)",
        [
            "model"=>$_POST['model'],
            'capacity'=>$_POST['capacity']
        ]);

    $response  = [
        "message"=>"inserted successfully"
    ];
    http_response_code(200);
    echo json_encode($response);
    die();
}


if (isset($_GET['id'])){
    $planes = $db->query("SELECT * FROM `planes` where id = :id",
        [
            "id"=>$_GET['id']
        ])->get();
    http_response_code(200);
   echo json_encode($planes);
   die();
}




$planes = $db->query("SELECT * FROM `planes`")->get();



echo json_encode($planes);