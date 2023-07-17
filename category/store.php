<?php
require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

$category = [
    'name' => $request['name'],
];
$categoryConnection= new CategoryConnection();
$getData->create($category);
header("Location: http://localhost/hoc.php/product/index.php");
