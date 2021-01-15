<?php
include "component/data.php";
include "component/func.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Test array request</title>
</head>
<body>
    <div class="container">
    <form action="" method="get">
        <label for="search">Cari ID</label>
        <input type="text" name="id" id="search" autofocus required  >
        <div class="btn-group">
            <button type="submit"  class="btn btn-success">Cari</button>
            <a class="btn btn-danger" href="?">
                Reset
            </a>
        </div>
    </form>
    <?php if(isset($_GET['id'])): ?>
        <?php $get = $_GET['id'] ?>
        <h4>Hasil yang ditemukan untuk  <?= "\" $get \"" ?> </h4>
        <?php $find = getID($get) ?>
        <?php search($input,$get) ?>
    <?php else: ?>
        <?php showTable($input) ?>
            
    <?php endif ?>
        
    </div>
</body>
</html>