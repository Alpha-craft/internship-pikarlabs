<div class="bg-green-400 h-24 grid grid-cols-3 ">
    <?php foreach ($nav_item as $nav) :?>
        <div id="<?= $nav?>" class="col-span-1 hover:bg-green-500 text-center"><?= $nav ?></div>
    <?php endforeach ?>
</div>
