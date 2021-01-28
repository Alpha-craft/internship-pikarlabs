<?php
include "components/data.php";
include "components/header.php";    
include "components/func.php";
?>

<?php if(isset($_GET['id'])): ?>
  <?php $id = $_GET['id'] ?>
  <?php $cek =  cekId($_GET['id'],$portofolio) ?>
  <?php if($cek == true) :?>
    <div class="bg-gray-200" >
      <div class="container" >
        <!-- Desc Start -->
        <div class="p-5 " >
          <div class="bg-gray-50 shadow-md rounded-md p-2" >
            <h1 class="text-2xl  md:text-3xl px-2 border-b-2 border-gray-600 w-2/5 md:w-2/6" ><?= $portofolio[$id]['judul'] ?></h1>
            <p class="text-xl p-2 capitalize" ><?= $portofolio[$id]['desc'] ?></p>
            <p class="capitalize px-2" >dibangun pada tahun :<?= $portofolio[$id]['tahun'] ?></p>
          </div>
        </div>
        <!-- Desc End -->
        <div class="flex flex-col md:flex-row" >
          <div class=" flex-auto " >
            <!-- Preview -->
            <div class="bg-gray-300 shadow-inner md:my-8 my-2 mx-2 md:mx-8 rounded-md p-5  " >
              <?php $image =  getImg($portofolio[$id]['img'],$portofolio[$id]['imgs']) ?>
              <img src="assets/<?= $portofolio[$id]['img'] ?>" class="flex-1" alt="">
              <div class="flex-1 grid gap-3 md:grid-cols-2 md:my-1" >
                <?php foreach ($portofolio[$id]['imgs'] as $pict) :?>
                  <img src="assets/<?=$pict?>" class="md:py-1 py-1" alt="">
                <?php endforeach ?>
              </div>
            </div>
              <!-- Preview -->
              <!-- Modal Start -->
            <div id="modal" class=" hidden fixed  z-50 w-full h-full top-0 left-0 text-center bg-black bg-opacity-60 transition-all ease-in-out duration-500  " >
            <button class=" border bg-red-500  border-red-500 rounded-md p-1 " onclick="tutup('modal')">Close</button>
              <?php $image =  getImg($portofolio[$id]['img'],$portofolio[$id]['imgs']) ?>
              <!-- Swiper -->
              <?php carousel($image) ?>
            </div>
              <!-- Modal end -->
          </div>
          <div class="flex-1 p-7" >
          <div class="flex md:flex-row flex-col " >
            <button onclick="showModal('modal')" class="bg-green-500 rounded-md m-2 p-2 text-center hover:bg-green-400" >Galeri</button>
            <a href="<?= $portofolio[$id]['link'] ?>" class=" bg-yellow-400 rounded-md m-2 p-2 text-center" target="blank" >
              <button  >Kunjungi</button>
            </a>
            <a href="http://magang.test/personalweb-php/v2.php#Portofolio" class=" bg-blue-400 rounded-md m-2 p-2 text-center"  >
              <button >Kembali</button>
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>


  <?php else: ?>
    <h1 class="text-3xl" >Portofolio tidak ditemukan</h1>

  <?php endif ?>

<?php else:
  header("location:v2.php"); //jika tidak ada id yang dikirim ke dalam halaman portofolio
?>
<?php endif ?>
<?php include "components/footer.php" ?>