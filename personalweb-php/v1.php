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
        <div class="relative inline-block ">
            <div class="transition duration-500 ease-in-out my-8 bg-gray-100 hover:bg-white rounded-md hover:shadow-xl py-6 ">
                <img class="rounded-full w-44 border-2 border-gray-200 mx-auto " src="assets/profile.jpg" alt="Profil-Img" id="profil">
                <h4 class="text-2xl font-sans text-center" >Ainurahman</h4>
            </div>
            <div id="Profil" class="transition duration-500 ease-in-out py-8 rounded-md hover:shadow-lg capitalize hover:bg-white bg-gray-100 ">
                <p class="font-mono" ><span class="mx-4"></span> <?= $bio ?> </p>
            </div>
        </div>
        <!-- Bio end -->

        <!-- Skill Start-->
        <div class="my-10 bg-white " >

        </div>
        <!-- Skill end -->

    </div>
    <!-- Container end -->
</div>

<?php include "components/footer.php" ?>
