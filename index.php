<?php
$persona1 = [
"nombre" => "Daniel"
];

$persona2 =[
  "nombre"=>"jesus"
  ];

$personas = [
$persona1,
  $persona2
  
];

echo json_encode($personas);
