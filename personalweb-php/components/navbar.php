<div class="bg-green-500 font-sans h-14 text-4xl md:text-2xl" >My Website</div>
<div class="bg-green-400 h-8 flex ">
    <?php foreach ($nav_item as $nav) :?>
        <a href="#<?= $nav ?>" id="<?= $nav?>" class="flex-1 flex-grow flex-shrink  hover:bg-green-500  cursor-pointer text-center md:text-xl hover:text-gray-50"><?= $nav ?></a>
    <?php endforeach ?>
</div>
