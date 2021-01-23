<!-- 


    <div class="glider-contain">
    <div class="glider">
        <?php foreach ($image as $pict) :?>
           <div> 
            	<img src="assets/<?= $pict ?>" alt="">
           </div>
        <?php endforeach ?>
    </div>

    <button aria-label="Previous" class="glider-prev">Prev</button>
    <button aria-label="Next" class="glider-next">Next</button>
    <div role="tablist" id="dots" class="dots"></div>
    </div> -->
    
    <!-- <div class="navigation-wrapper">
        <div id="my-keen-slider" class="keen-slider">
            <?php foreach ($image as $pict) :?>
            <div class="keen-slider__slide number-slide1">
                <img src="assets/<?=$pict?>" />
            </div>
        <?php endforeach ?>

        </div>
    </div> -->

    <div class="navigation-wrapper">
      <div id="my-keen-slider" class="keen-slider">
        <?php foreach ($image as $pict) :?>
            <div class="keen-slider__slide number-slide mx-auto"><img class="" src="assets/<?= $pict?>" alt=""></div>
        <?php endforeach ?>
      </div>
      <p class="arrow arrow--left" id="arrow-left" >next</p>
      <p class="arrow arrow--right" id="arrow-right" >pref</p>
    </div>
    <div id="dots" class="dots"></div>
            

    <?php include "components/footer.php" ?>