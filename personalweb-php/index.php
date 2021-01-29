<?php include "components/header.php"; ?>
<?php include "components/data.php" ?>


<div class="container mx-auto">
    <div class=" grid grid-flow-row md:grid-cols-2 gap-4 my-80 ">
        <?php foreach ($versi as $v) :?>
            <a href="<?= $v['versi'] ?>" class="">  
                <div class=" p-3 bg-green-400 rounded-md ">
                    <div  class="text-center border-b-2 border-gray-600 capitalize "> <?= $v['id'] ?></div>
                    <div  class="rounded-md" >
                        <img src="assets/<?= $v['img'] ?>" class="p-2" alt="">
                        <p class=" text-base capitalize p-2" > <?= $v['isi'] ?> </p>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</div>
<?php include "components/footer.php"; ?>
