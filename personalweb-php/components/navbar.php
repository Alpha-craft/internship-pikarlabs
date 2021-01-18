<div class="bg-green-400 h-12 flex ">
    <?php foreach ($nav_item as $nav) :?>
        <div id="<?= $nav?>" class="flex-1 flex-grow flex-shrink  hover:bg-green-500 cursor-pointer text-center md:text-xl inline-block align-middle"><?= $nav ?></div>
    <?php endforeach ?>
    
</div>
