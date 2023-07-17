<?php
    require_once "pdo.php";
    require_once "../category/pdo.php";
    $categoryConnection = new CategoryConnection();
$cate = $categoryConnection->getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thêm mới sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <div class="container-fluid"><h3>Create Product</h3></div>
    <a href="./index.php" class="btn btn-primary">Back</a>
    <form method="POST" action="./store.php">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input required type="text" class="form-control" name="name" placeholder="Enter name ...">
            <label for="" class="form-label">Price</label>
            <input required type="text" class="form-control" name="price" placeholder="Enter name ...">
            <label for="" class="form-label">Category_id</label>
            <input required type="text" class="form-control" name="ca_id" placeholder="Enter name ...">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
