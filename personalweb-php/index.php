<?php include "components/header.php"; ?>
<?php include "components/data.php" ?>


<div class="container mx-auto">
    <div class="grid grid-cols-2 justify-items-center my-80  align-middle">
    <?php foreach ($versi as $v) :?>
        <a href="<?= $v ?>">  
        <div class="box-border h-14 w-24 p-4 bg-red-600 rounded-2xl transform hover:scale-110">
            <div class="text-center"> <?= $v ?></div>
        </div>
        </a>
    <?php endforeach ?>
</div>
<?php include "components/footer.php"; ?>
