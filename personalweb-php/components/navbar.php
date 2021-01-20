<div class="bg-white font-sans h-auto sticky top-0 shadow-md md:text-2xl " >
    <ul>
    <div class="flex flex-row">
            <li class="flex-none">
                <img class="list-none rounded-full w-12 border-2 border-current" src="assets/profile.jpg" alt="Profil-Img" id="profil">
            </li>
            <li class="flex-auto">
                <p class="list-none text-4xl italic ">Personal Web</p>
            </li>
            <?php foreach ($nav_item as $nav) :?>
                <li class="px-2 flex-none list-none transition duration-700 ease-out rounded cursor-pointer text-center md:text-xl hover:bg-black hover:text-gray-100 py-2">
                    <a href="#<?= $nav ?>" id="<?= $nav?>" class=""><?= $nav ?></a>
                </li>
            <?php endforeach ?>
    </div>
    </ul>
</div>