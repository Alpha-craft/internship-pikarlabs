<div class="swiper-container h-5/6 ">
  <div class="swiper-wrapper">
    <?php foreach ($image as $pict) :?>
      <div class="swiper-slide"> <img src="assets/<?= $pict?>" alt="">  </div>
    <?php endforeach ?>
  </div>
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div id="next" class="swiper-button-next"></div>
  <div id="prev" class="swiper-button-prev"></div>
</div>

