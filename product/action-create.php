<?php
    require_once 'pdo.php';
    $data = [
        'prodId' => '',
        'prodName' => $_POST['name'],
        'prodPrice' => $_POST['price'],
        'cateId' => $_POST['cateId']
    ];
    createNewProdData($data);
    header("Location: http://localhost/baitap.php/product/index.php");
?>