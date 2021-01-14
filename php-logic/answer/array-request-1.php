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
                <table class="table table-hover" border="1">
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>asal</th>
                        <th>link</th>
                    </tr>
                    <?php showTable($input) ?>
                </table>
        <?php endif ?>
    </div>
</body>
</html>