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

$persona4 = [
  "nombre" => "Luis"
];

$personas = [
  $persona1,
  $persona2,
  $persona3,
  $persona4
];

echo json_encode($personas);
