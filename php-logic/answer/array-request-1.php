<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
    [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
    [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
  ];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Array-request-1</title>
</head>

<body>
    <div class="container" >
            <?php if(isset($_GET['id'])): ?>
                <table style="display:none;" border='1'>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>asal</th>
                        <th>link</th>
                    </tr>
                    <?php foreach ($input as $value) :?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['asal'] ?></td>
                        <td><a href="array-request-1.php?id=<?= $value['id'] ?>">profil</a></td>
                    </tr>
                    <?php endforeach ?>

                </table>
                    <?php else: ?>
                        <table  class="table table-hover"  border='2'>
                            <tr >
                                <th>id</th>
                                <th>nama</th>
                                <th>asal</th>
                                <th>link</th>
                            </tr>
                            <?php foreach ($input as $value) :?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['asal'] ?></td>
                                <td><a href="array-request-1.php?id=<?= $value['id'] ?>">profil</a></td>
                            </tr>
                        <?php endforeach ?>
                        </table>
            <?php endif ?>


            <?php if(isset($_GET['id'])): ?>
                <?php foreach ($input as $result) :?>
                    <?php if($result['id'] == $_GET['id']): ?>
                    <h4>profil siswa id = <?= $result['id'] ?></h4>
                    <div class="list-group">
                        <ul>
                            <li class="list-group-item" >id : <?= $result['id'] ?></li>
                            <li class="list-group-item" >nama : <?= $result['nama'] ?></li>
                            <li class="list-group-item" >asal : <?= $result['asal'] ?></li>
                        </ul>
                    </div>
                <?php endif ?>
                <?php endforeach ?>
                <a href="array-request-1.php">|Kembali|</a>
            <?php endif ?>
            
    </div>
</body>

</html>