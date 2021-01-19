<?php
include "components/data.php";
include "components/header.php";
?>
<!-- Navbar Starts -->
<?php include "components/navbar.php" ?>
<!-- Navbar end -->

    
<!-- Container start -->
<div class="container mx-auto">

    <!-- Bio Start -->
    <div id="Profil" class="py-8 capitalize border-solid border-t-2 border-b-2  border-gray-700 bg-gray-200   ">
    <img class="rounded-full h-24" src="assets/profile.jpg" alt="Profil-Img" id="profil">
       <p><span class="mx-4"></span> <?= $bio ?> </p>
    </div>
    <!-- Bio end -->

</div>
<!-- Container end -->


<?php include "components/footer.php" ?>
