<?php

require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

 $name = $request['name'];
 $id = $request['id'];
 $price = $request['price'];
 $ca_id = $request['ca_id'];

 $productConnection->updateProdData($data);
 header("Location: http://localhost/hoc.php/product/index.php");

?>
