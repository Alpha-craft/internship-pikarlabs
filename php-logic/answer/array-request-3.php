<?php
include "../answer/component/data.php";
include "../answer/component/func.php";
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
    <form action="" method="post">
        <label for="search">Cari ID</label>
        <input type="text" name="id" id="search" autofocus required  >
        <div class="btn-group">
            <button type="submit"  class="btn btn-success">Cari</button>
            <a class="btn btn-danger" href="?">
                Reset
            </a>
        </div>
    </form>
    <?php if(isset($_POST['id'])): ?>
        <?php $id = $_POST['id'] ?>
        <h4>Hasil yang ditemukan untuk  <?= "\" $id \"" ?> </h4>
        <?php search($input,$id) ?>
    <?php elseif(isset($_GET['profil'])): ?>
        <?php $profil = $_GET['profil'] ?>
        <?php $index = getID($profil) ?>
        <?php showProfile($input,$index) ?>
    <?php else: ?>
        <?php showTable($input) ?>

    <?php endif ?>
        
    </div>
</body>
</html>