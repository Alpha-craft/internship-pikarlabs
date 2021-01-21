<?php
include "components/data.php";
include "components/header.php";
include "components/func.php";
?>
<div class="container mx-auto" >
    <div class="glider-contain">
    <div class="glider">
        <?php $img =  getImg($portofolio[0]['img'],$portofolio[0]['imgs']) ?>
        <!-- <?= print_r($img) ?> -->
        <?php foreach ($img as $gambar) :?>
           <div> 
            	<img src="assets/<?= $gambar ?>" alt="">
           </div>
        <?php endforeach ?>
        <!-- <div>your content here</div>
        <div>your content here</div>
        <div>your content here</div>
        <div>your content here</div> -->
    </div>

    <button aria-label="Previous" class="glider-prev">Prev</button>
    <button aria-label="Next" class="glider-next">Next</button>
    <div role="tablist" id="dots" class="dots"></div>
    </div>
</div>
<script>
new Glider(document.querySelector('.glider'), {
  slidesToScroll: 1,
  slidesToShow: 1,
  rewind:true,
  dots: '#dots',
  draggable: false,
  scrollLock: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});

</script>