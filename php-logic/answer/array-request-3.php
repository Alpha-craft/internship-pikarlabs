<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
    [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
    [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
];
//using in_array


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Array-request-3</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label for="search">Cari ID</label>
            <input type="text" name="id" id="search" autofocus required>
            <div class="btn-group">
                <button type="submit"  class="btn btn-success">Cari</button>
                <a class="btn btn-danger" href="array-request-2.php">
                    Reset
                </a>
            </div>
        </form>
        <?php if(isset($_POST['id'])): ?>
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
                        <td><a href="array-request-2.php?id=<?= $value['id'] ?>">profil</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        <?php else: ?>
            <div class="table">
                <table class="table-hover" border='1'>
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
                            <td><a href="array-request-2.php?id=<?= $value['id'] ?>">profil</a></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        <?php endif ?>
        <?php if(isset($_POST['id'])): ?>
            <div class="table">
                <table class="table-hover" border='1' >
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>asal</th>
                        <th>link</th>
                    </tr>
                    <?php foreach ($input as $result) :?>
                        <?php if( strpos ($result['id'],$_POST['id'] ) !== false ): ?>
                            <!-- memakai strpos() untuk mengecek apakah id berada dalam array['id'] -->
                            <tr>
                                <td><?= $result['id'] ?></td>
                                <td><?= $result['nama'] ?></td>
                                <td><?= $result['asal'] ?></td>
                                <td><a href="array-request-2.php?id=<?= $result['id'] ?>">profil</a></td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </table>
            </div>
        <?php endif ?>
    </div>
</body>

</html>