<?php
include "components/data.php";
include "components/header.php";    
include "components/func.php";
?>
<!-- Navbar Starts -->
<?php include "components/navbar.php" ?>
<!-- Navbar end -->

<div class="bg-gray-100">
    <!-- Container start -->
    <div class="container mx-auto pt-12 ">

        <!-- Bio Start -->
        <div class=" inline-block ">
            <div class="transition duration-300 ease-in-out  my-8 bg-gray-100 hover:bg-white rounded-md hover:shadow-xl py-6 ">
                <img id="Profil" class="rounded-full w-44 border-2 border-gray-200 mx-auto " src="assets/profile.jpg" alt="Profil-Img" id="profil">
                <h4 class="text-2xl font-sans text-center" >Ainurahman</h4>
            </div>
            <div  class="transition duration-500 ease-in-out py-8 rounded-md hover:shadow-lg capitalize hover:bg-white bg-gray-100 ">
                <p class="font-mono" ><span class="mx-4"></span> <?= $bio ?> </p>
            </div>
        </div>
        <!-- Bio end -->

        <!-- Skill Start-->
        <div class="transition duration-300 ease-in-out  py-12 my-12 bg-gray-100 hover:bg-white hover:shadow-md rounded-md" >
            <div class="text-center text-3xl border-b-2  border-gray-600" >My-Skills</div>
            <div class=" grid md:grid-cols-1" >
                <?php foreach ($keahlian as $skill) :?>
                    <div class="text-xl p-2"><?= $skill['bahasa'] ?>:</div>
                    <div class="rounded-md w-full p-1">
                        <div style="width:<?= $skill['value']?>%;background:<?= $skill['color']?>" class="rounded-md text-black p-2">
                            <?= $skill['value']?>%  
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- Skill end -->
        
        <!-- Education Start -->
        <div class="transition duration-300 ease-in-out hover:shadow-md my-12 bg-gray-100 hover:bg-white rounded-md">
            <div class="text-center text-3xl border-b-2  border-gray-600" >Pendidikan</div>
            <div class="grid grid-cols-2">
                <?php foreach ($pendidikan as $edu) :?>
                    <div class="m-2 p-2 "><?= $edu['tahun'] ?>:</div>
                    <div class="m-2 p-2"><?= $edu['sekolah'] ?></div>
                <?php endforeach ?>
            </div>
        <!-- Education End -->
        </div>
                

        <!-- Portofolio start -->
        <div class="h-auto p-4 ease-in-out shadow-inner my-12 bg-gray-200  rounded-md">
                <div class="border-b-2 text-left text-2xl  border-gray-600">Portofolio</div>
            <div class="flex flex-row">
                <?php foreach ($portofolio as $i => $exp) :?>
                    <div class="group transition duration-300 bg-gray-100 mx-4 my-4 hover:shadow-md hover:bg-white " >
                        <div class="flex flex-col">
                            <div class="border-b-2 border-gray-600 py-2 my-4 mx-auto text-3xl" >
                               <p class="text-center" ></p> <?= $exp['judul'] ?> 
                            </div>
                             <div class="bg-black"> <!-- agar gambar menjadi gelap sebelum di hover -->
                                <img class="transition-opacity duration-500 ease-out w-auto h-auto opacity-75 group-hover:opacity-100" src="assets/<?= $exp['img']?>" alt="<?= $exp['img'] ?>">
                            </div>
                        </div>
                        <div class="flex flex-col my-4 py-2" >
                            <button onclick="showModal('<?= $exp['id']?>')" class="bg-green-500 rounded-md m-2 p-2 text-center hover:bg-green-400 trigger" >Galeri</button>
                            <a class="bg-blue-500 rounded-md m-2 p-2 text-center hover:bg-blue-400" href="<?= $exp['link']?>"target="_blank" >
                                kunjungi
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- Modal Start -->
            <?php foreach ($portofolio as $id => $porto) :?>
                <div id="<?=$porto['id']?>"  class=" hidden z-10 w-full h-full top-0 left-0 text-center bg-black bg-opacity-60 transition-all ease-in-out duration-500 " >
                    <!-- Carousel Start -->
                            
                    <?php $index = $id  ?>
                    <?php $image =  getImg($portofolio[$index]['img'],$portofolio[$index]['imgs']) ?>
                    <div class="mx-12 my-12 ">
                        <div class="navigation-wrapper">
                            <div id="my-keen-slider" class="keen-slider">
                                <?php foreach ($image as $pict) :?>
                                    <div class="keen-slider__slide number-slide"><img class="" src="assets/<?= $pict?>" alt=""></div>
                                <?php endforeach ?>
                            </div>
                                <p class="arrow arrow--left" id="arrow-left" >next</p>
                                <p class="arrow arrow--right" id="arrow-right" >pref</p>
                        </div>
                        <div id="dots" class="dots"></div>
                    </div>    
                    <!-- Carousel End       -->
                </div>
            <?php endforeach ?>

            <!-- Modal End -->
        </div>
        <!-- Portofolio End -->

        <!-- Email Start -->
        <div class="my-12 bg-gray-200 shadow-inner h-auto rounded-md" >
					<div class="text-left border-b-2 py-2 px-2 border-gray-600 text-2xl " >Email</div>
        </div>
        <!-- Email end -->
    </div>
    <!-- Container end -->
</div>

<?php include "components/footer.php" ?>
