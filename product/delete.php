<?php
    require_once 'pdo.php';
    $productConnection = new ProductConnection();
    $id = ['id' => $_POST['id']];
    $productConnection->deleteProdData($id);
    header("Location: http://localhost/hoc.php/product/index.php");
?>
