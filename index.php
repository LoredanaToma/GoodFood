
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	<div class="carousel">  <!-- Linia A --> 

		<div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="imagini/fundal/fundal1.jpg" alt="1" style="width:100%;">
						<div class="carousel-caption">
							<h1>Salate sanatoase</h1>

						</div>
					</div>
					<div class="item">
						<img src="imagini/fundal/fundal2.jpg" alt="2" style="width:100%;">
						<div class="carousel-caption">
							<h1> Fripturi suculente</h1>
						</div>
					</div>
					<div class="item">
						<img src="imagini/fundal/fundal3.jpg" alt="3" style="width:100%;">
						<div class="carousel-caption">
							<h1> Gratare gustoase</h1>
						</div>
					</div>
					<div class="item">
						<img src="imagini/fundal/fundal4.jpg" alt="4" style="width:100%;">
						<div class="carousel-caption">
							<h1> Preparate din carne la cuptor</h1>
						</div>
					</div>
					<div class="item">
						<img src="imagini/fundal/fundal5.jpg" alt="5" style="width:100%;">
						<div class="carousel-caption">
							<h1> Meniuri principale delicioase</h1>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>       
			</div>  <!--  Sfarsit linia A -->  
		</div>
		<script src="js/jquery.min.js"></script> 
		<script src="js/bootstrap.min.js"></script> 


		<script src="js/vendor/modernizr-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
		<script>
			window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
			ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
		</script>
		<script src="https://www.google-analytics.com/analytics.js" async defer></script>	
	</div>
	<?php include "footer.php";?>
</div>
</body>
</html> 
