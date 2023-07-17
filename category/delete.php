<?php

require_once 'pdo.php';

if ($_POST['id'] > 0 && is_numeric($_POST['id'])) {
    delete(['id' => $_POST['id']]);
}
header("Location: http://localhost/hoc.php/product/index.php");
?>
