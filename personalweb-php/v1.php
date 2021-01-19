<?php
include "components/data.php";
include "components/header.php";
?>
<!-- Navbar Starts -->
<?php include "components/navbar.php" ?>
<!-- Navbar end -->

    
<!-- Container start -->
<div class="container mx-auto ">

    <!-- Bio Start -->
    <div class="relative inline-block ">
        <div class="my-8 bg-gray-100 py-6 border-t-2 border-l-2 border-r-2 border-solid border-gray-700">
            <img class="rounded-full w-44 border-2 border-white mx-auto " src="assets/profile.jpg" alt="Profil-Img" id="profil">
            <h4 class="text-2xl font-sans text-center" >Ainurahman</h4>
        </div>
        <div id="Profil" class="py-8 capitalize border-solid  border-b-2  border-gray-700 bg-gray-100 inline-block float-center">
            <p class="font-mono" ><span class="mx-4"></span> <?= $bio ?> </p>
        </div>
    </div>
    <!-- Bio end -->

</div>
<!-- Container end -->


<?php include "components/footer.php" ?>
