<?php
$persona1 = [
"nombre" => "Daniel"
];

$persona2 =[
  "nombre"=>"jesus"
  ];

$persona3 =[
  "nombre"=>"denisse"
  ];




$personas = [
$persona1,
  $persona2,
  $persona3
];

echo json_encode($personas);
