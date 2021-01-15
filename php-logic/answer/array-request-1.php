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
    <title>Document</title>
</head>
<body> 	
    <div class="container">
        <?php if(isset($_GET['id'])): ?>
            <?php $get = $_GET['id'] ?>
            <?php $index = getID($get) ?>
            <?php if(isset($index)): ?>
                <?php showProfile($input,$index) ?>
            <?php else: ?>
                <h4>data <?= " \" $get \" " ?> tidak ditemukan</h4>
            <?php endif ?>
        <?php else: ?>
            <?php showTable($input) ?>
        <?php endif ?>
    </div>
</body>
</html>