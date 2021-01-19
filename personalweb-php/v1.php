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
    <div class="inline-block ">
        <img class="rounded-full w-44 border-2 border-white mx-auto" src="assets/profile.jpg" alt="Profil-Img" id="profil">
        <div id="Profil" class="py-8 capitalize border-solid  border-b-2  border-gray-700 bg-gray-100 inline-block float-center">
            <h4 class="text-2xl font-sans" >Ainurahman</h4>
            <p class="font-mono" ><span class="mx-4"></span> <?= $bio ?> </p>
        </div>
    </div>
    <!-- Bio end -->

</div>
<!-- Container end -->


<?php include "components/footer.php" ?>
