<?php
include "components/data.php";
include "components/header.php";    
include "components/func.php";
?>

<style>
*{
  scroll-behavior: smooth;
}
.bg_img{
  background-image: url('assets/pexels.jpg')
}
</style>

<div  class="bg_img bg-fixed bg-no-repeat items-center justify-center  mb-12 bg-cover" >
  <!-- hidden navbar -->
  <div id="nav" class="hidden" >
    <?php include "components/navbar.php"; ?>  
  </div>

  <div  class="flex items-center justify-center h-screen mb-12 " >
  <!-- Navbar Start -->
  <?php include "components/navbar.php"; ?>
  <!-- Navbar End -->
  </div>
  
  <!-- Container Start -->
  <div class="container mx-auto  ">
    <!-- Bio start -->
      <div  class=" bg-gray-200 my-12 md:py-4 py-2 px-4 rounded-md ">
      <h1 id="Profil" class="text-left text-xl border-b-2 border-gray-600 w-1/6 px-1 py-1 md:py-2 md:text-3xl" >Ainurahman</h1>
      <p class=" py-2 capitalize " ><span class="mx-2" ></span><?= $bio ?></p>
      </div>
    <!-- Bio End -->

    <!-- Skill start -->
      <div class="my-12 py-6 bg-gray-200 rounded-md " >
        <div class="text-center md:text-3xl text-xl border-b-2 border-gray-600 " >My-Skills</div>
        <div class="grid md:grid-cols-2" >
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
      <div class=" my-12 py-6  bg-gray-200 rounded-md " >
        <div class="text-center text-xl md:text-3xl border-b-2 border-gray-600" >Pendidikan</div>
        <div class="grid md:grid-cols-2" >
         <?php foreach ($pendidikan as $edu) :?>
            <div class="m2 p-2" > <?= $edu['tahun'] ?> </div>
            <div class="m2 p-2" > <?= $edu['sekolah'] ?> </div>
         <?php endforeach ?>
        </div>
      </div>
      <!-- Education End -->

      <!-- Portofolio Start -->
      <div id="Portofolio" class="my-12 py-6 bg-gray-200 rounded-md" > 
        <div class="text-left px-4 text-xl md:text-3xl border-b-2 border-gray-600" >Portofolio</div>
        <div class="flex md:flex-row flex-col" > 
          <?php foreach ($portofolio as $i => $exp) :?>
            <a href="portofolio.php?id=<?= $i?>">
              <div class="group transition duration-300 bg-gray-100 mx-4 my-12 hover:shadow-md hover:bg-white rounded-md " >
                <div class="flex flex-col">
                  <div class="border-b-2 border-gray-600 py-2 my-4 mx-auto text-3xl" >
                    <p class="text-center" ></p> <?= $exp['judul'] ?> 
                  </div>
                  <div class="bg-black"> <!-- agar gambar menjadi gelap sebelum di hover -->
                    <img class="transition-opacity duration-500 ease-out w-auto h-auto opacity-75 group-hover:opacity-100" src="assets/<?= $exp['img']?>" alt="<?= $exp['img'] ?>">
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach ?>
        </div>
      </div>
      <!-- Portofolio End -->
    <!-- Container End -->
</div>

<?php include "components/footer.php" ?>