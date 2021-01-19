<div class="bg-white font-sans h-14 sticky top-0 shadow-md md:text-2xl " >
    <div class="flex">
        <img class="rounded-full w-12 border-2 border-current " src="assets/profile.jpg" alt="Profil-Img" id="profil">
        <p class="text-4xl italic">Personal Web</p>
    </div>
    
    <div class="bg-white h-8 flex ">
        <?php foreach ($nav_item as $nav) :?>
            <a href="#<?= $nav ?>" id="<?= $nav?>" class="transition duration-300 ease-out rounded flex-1 flex-grow flex-shrink  cursor-pointer text-center md:text-xl hover:bg-black hover:text-gray-100"><?= $nav ?></a>
        <?php endforeach ?>
    </div>

</div>