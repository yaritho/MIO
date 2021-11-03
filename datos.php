<?php
require_once __DIR__ . '/vender/autoload.php';

$client = new MongoDB\Client(
    'mongodb+srv://sebastian:<password>@cluster0.kwxgh.mongodb.net/sebastian?retryWrites=true&w=majority');

    $tb=$client->sebastian->user;
    $register= array(

    
        
        "user"=>"aldana",
        "pass"=>"abc123",

    );

    $resultado=$tb->insertOne($register);
    echo json_encode($register);


?>

