<?php
include "components/data.php";
include "components/header.php";
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
                        <div style="width:<?= $skill['value']?>%;background:<?= $skill['color']?>" class="rounded-md text-white p-2">
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
                <?php foreach ($portofolio as  $exp) :?>
                    <div class="group transition duration-300 bg-gray-100 mx-4 my-4 hover:shadow-md hover:bg-white " >
                        <div class="flex flex-col">
                            <div class="border-b-2 border-gray-600 py-2 my-4 mx-auto text-3xl" >
                               <p class="text-center" ></p> <?= $exp['judul'] ?> 
                            </div>
                            <div class="bg-black">
                                <img class=" transition-opacity duration-500 ease-out w-auto h-auto opacity-75 group-hover:opacity-100" src="assets/<?= $exp['img']?>" alt="<?= $exp['img'] ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- Portofolio End -->
    </div>
    <!-- Container end -->
</div>

<?php include "components/footer.php" ?>
