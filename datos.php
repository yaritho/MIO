<?php
require_once __DIR__ . '/vender/autoload.php';

$client = new MongoDB\Client(
    'mongodb+srv://sebastian:<password>@cluster0.kwxgh.mongodb.net/sebastian?retryWrites=true&w=majority');

    $tb=$client->water->Precipitaciones;
$filter= ['$and'=>
            [
                ['ANNO'=>['$eq'=>'1997']],
                ['ESTACION'=>['$eq'=>'Sutatausa']]
            ]
        ];
 
$query = new MongoDB\Driver\Query($filter);
 
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

