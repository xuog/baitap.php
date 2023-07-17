<?php
require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

$category = [
    'name' => $request['name'],'name' => $request['name'],
    'price' => $request['price'],
    'cateId' => $request['cateId'],
];
$productConnection->createNewProdData($data);
header("Location: http://localhost/hoc.php/product/index.php");
?>
