<?php
require_once __DIR__ . '/vender/autoload.php';
$a=$_GET['ANNO'];
$b=$_GET['MUNICIPIO'];
$client = new MongoDB\Client(
   //'mongodb+srv://sebastian:yaritho123@cluster0.kwxgh.mongodb.net/sebastian?retryWrites=true&w=majority');
  'mongodb+srv://sebastian:<password>@cluster0.kwxgh.mongodb.net/test');
   

    $tb=$client->lluvia->precipitacion;
$filter= ['$and'=>
            [
                ['ANNO'=>['$eq'=>$a]],
                ['MUNICIPIO'=>['$eq'=>$b]]
            ]
        ];
 
$query = new MongoDB\Driver\Query($filter);
 
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);

?>

