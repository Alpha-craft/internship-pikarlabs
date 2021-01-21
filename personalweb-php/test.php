<?php
include "components/data.php";
include "components/header.php";
?>

<div class="swiper-container">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                        <?php foreach ($portofolio as $porto) :?>
                        <!-- <img src="assets/<?= $porto['imgs'] ?>" alt=""> -->
                        <img src="assets/svvebs2.png" alt="">
                        <img src="assets/svvebs3.png" alt="">
                        <?php endforeach ?>
                        </div>
                        
                        
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
    </div>       
    <?php include "components/footer.php" ?>