<?php
require_once __DIR__ . '/vender/autoload.php';

$client = new MongoDB\Client(
   // 'mongodb+srv://sebastian:yaritho123@cluster0.kwxgh.mongodb.net/sebastian?retryWrites=true&w=majority');
   'mongodb+srv://sebastian:<password>@cluster0.kwxgh.mongodb.net/test');

    $tb=$client->lluvia->Precipitacion;
$filter= ['$and'=>
            [
                ['AÑO'=>['$eq'=>'1997']],
                ['ESTACIÓN'=>['$eq'=>'Pajas Blancas']]
            ]
        ];
 
$query = new MongoDB\Driver\Query($filter);
 
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

