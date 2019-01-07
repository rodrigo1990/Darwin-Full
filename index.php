<?php include("inc/head.php") ?>
</head>
<body >
	
	<?php include("inc/header.php") ?>
	
	<div class="owl-one owl-carousel owl-theme slider" id="owl-1">
		
		<div>
			<div class="slide" id="slide-1">
				<div class="semi-overlay">
					<div class="slogan">
						<h2>Un nuevo <span>espacio.</span> <br> Un nuevo <span>concepto.</span></h2>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="slide" id="slide-2">
				
			</div>
		</div>

		<div>
			<div class="slide" id="slide-3">
				
			</div>
		</div>
	</div>

<div id="galeria-planos"></div>
<section id="galeria">
	<div class="row subtitle">
		<div class="container">
			<h2><img src="img/iso-black.png" class="iso" alt="">GALERÍA</h2>
		</div>	
	</div>

	<div class="owl-carousel galeria" id="owl-2">

		<div>
			<div class="slider">
				<div class="overlay">
					<div class="search-cont">
						<a class="content" data-fancybox="galeria" href="img/galeria/1.jpg" data-caption="" >
							<i class="fas fa-search"></i>
						</a>
					</div>
				</div>
				<img src="img/galeria/1.jpg" alt="">
			</div>
		</div>

		<div>
			<div class="slider">
				<div class="overlay">
					<div class="search-cont">
			            <a class="content" data-fancybox="galeria" href="img/galeria/2.jpg" data-caption="" >
							<i class="fas fa-search"></i>
						</a>
					</div>
				</div>
				<img src="img/galeria/2.jpg" alt="">
			</div>
		</div>

		<div>
			<div class="slider">
				<div class="overlay">
					<div class="search-cont">
						<a class="content" data-fancybox="galeria" href="img/galeria/3.jpg" data-caption="" >
							<i class="fas fa-search"></i>
						</a>
					</div>
				</div>
				<img src="img/galeria/3.jpg" alt="">
			</div>
		</div>

	</div>
</section>

<section id="salones">


	<div class="row subtitle">
		<div class="container">
			<h2><img src="img/iso-black.png" class="iso" alt="">SALONES</h2>
		</div>	
	</div>

	<div class="row salones-home">
		<div class="container-fluid">
			<a href="salones.php#palmeras">
				<div class="col-md-6 col-sm-12 image-selector"  id="palmeras">
					<div class="overlay"></div>
					<div class="square text-center">
						<h2>SALÓN <br> <span>PALMERAS</span></h2>
					</div>

				</div>
			</a>
			<a href="salones.php#laguna">
				<div class="col-md-6 col-sm-12 image-selector"  id="laguna">
					<div class="overlay"></div>
					<div class="square text-center">
						<h2>SALÓN <br> <span>LAGUNA</span></h2>
					</div>
				</div>
			</a>
		</div>
	</div>

</section>


<section id="galeria-planos">


	<!--  <div class="row subtitle">
		<div class="container">
			<img src="img/logo-green-black.png" alt="" class="logo">
		</div>	
	</div>-->

<div class="owl-one owl-carousel owl-theme galeria" id="owl-3">
		<div>
			<img src="img/slider/1.png" alt=""  >
		</div>
		<div>
			<img src="img/slider/2.png" alt=""  >
		</div>
		<div>
			<img src="img/slider/3.png" alt=""  >
		</div>
		<div>
			<img src="img/slider/4.png" alt=""  >
		</div>

</div>


<div class="owl-one owl-carousel owl-theme galeria" id="owl-3-xs">
		<div>
			<img src="img/slider/plano-xs.png" alt=""  >
		</div>
		<div>
			<img src="img/slider/plano-xs-2.png" alt=""  >
		</div>
		<div>
			<img src="img/slider/plano-xs-3.png" alt=""  >

		</div>
		<div>
			<img src="img/slider/plano-xs-4.png" alt=""  >
		</div>

</div>
</section>


<section id="servicios">

	<div class="row servicios-list">
		<div class="container-fluid">
			<div class="subtitle subtitle-xs center-block">
					<h3>NUESTROS <br><span>SERVICIOS</span></h3>
				</div>
			<ul class="center-block">
				<li class="subtitle">
					<h3>NUESTROS <br><span>SERVICIOS</span></h3>
				</li>
				<li>
					<div class="overlay">
						<p><b>Asesoramiento</b><br>previo al publico</p>
					</div>
					<img src="img/icons/1.png" alt="">
				</li>
				<li>
					<div class="overlay">
						<p><b>Asesoramiento</b><br>previo al publico</p>
					</div>
					<img src="img/icons/2.png" alt="">
				</li>
				<li>
					<div class="overlay">
						<p><b>Asesoramiento</b><br>previo al publico</p>
					</div>
					<img src="img/icons/3.png" alt="">
				</li>
				<li>
					<div class="overlay">
						<p><b>Asesoramiento</b><br>previo al publico</p>
					</div>
					<img src="img/icons/4.png" alt="">
				</li>
				<li>
					<div class="overlay">
						<p><b>Asesoramiento</b><br>previo al publico</p>
					</div>
					<img src="img/icons/5.png" alt="">
				</li>
				<li>
					<div class="overlay">
						<p><b>Asesoramiento</b><br>previo al publico</p>
					</div>
					<img src="img/icons/6.png" alt="">
				</li>
			</ul>
		</div>
	</div>

</section>


<section id="maps">


	<div class="row map-cont">
		<div class="container-fluid" id="googleMap">
			
		</div>
	</div>

</section>


	<?php include("inc/contacto.php") ?>
	
	<?php include("inc/footer.php") ?>

	<?php include("inc/scripts.php") ?>


	<script type="text/javascript" src="js/googleMaps.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkne1gpPfJ0B3KrE4OQURwPi492LDjg8g&callback=myMap"></script>
	<script>
		$(".bkground").height($("#contacto").height());
	</script>

</body>
</html>