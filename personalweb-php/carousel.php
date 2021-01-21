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
    <?php
    include "components/data.php";
    include "components/header.php";    
    include "components/func.php";
    ?>
    <?php $index = 1  ?>
    <?php $image =  getImg($portofolio[$index]['img'],$portofolio[$index]['imgs']) ?>
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
      <!-- <svg
        id="arrow-left"
        class="arrow arrow--left"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
      >
        <path
          d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"
        ></path>
      </svg>
      <svg
        id="arrow-right"
        class="arrow arrow--right"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
      > -->
        <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"></path>
      </svg>
    </div>
    <div id="dots" class="dots"></div>
            

    <?php include "components/footer.php" ?>