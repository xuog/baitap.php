<?php
require_once 'pdo.php';
$request = $_POST;
$category = [
    'name' => $request['name'],
    'id' => $request['id'],
];
$categoryConnection= new CategoryConnection();
$getData->update($category);
header("Location: http://localhost/hoc.php/product/index.php");
