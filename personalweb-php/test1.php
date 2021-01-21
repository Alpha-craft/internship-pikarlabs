<?php
include "components/data.php";
include "components/header.php";
?>
<link rel="stylesheet" href="elder-carousel-master/dist/style.css">


<div class="carousel-example">
	<?php foreach ($portofolio as $porto) :?>
		<div>
			<div class="box"><img src="assets/<?=  $porto['imgs'] ?>" alt=""></div>
		</div>
	<?php endforeach ?>
  <!-- <div>
    <div class="box">2</div>
  </div>
  <div>
    <div class="box">3</div>
  </div> -->
</div>


<script src="elder-carousel-master/dist/index.min.js"></script>
<script>
	new ElderCarousel('.carousel-example',{ 
		items: 2,
		step: 2,
		infinite: false,
		play: true,
		playInterval: 3000,
		speed: 500,
		navs: false
});

</script>
<?php include "components/footer.php" ?>