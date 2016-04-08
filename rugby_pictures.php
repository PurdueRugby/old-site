<html>
	<head>
		<?php 
			include 'header.php'
		?>
        <title>Pictures of Purdue Rugby</title>
		
	</head>
	<body>
		<div class="main">
			<div class="main_Container">
				<?php
					include 'bodyheader.php'
				?>
				<div id="mainSplashSub">
					<div id="header_box">
						<h2> Pictures of Purdue Rugby </h2>
					</div>
					<div id="content_box">
						<div id="images_carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active">
								</li>
								<li data-target="#myCarousel" data-slide-to="1">
								</li>
								<li data-target="#myCarousel" data-slide-to="2">
								</li>
								<li data-target="#myCarousel" data-slide-to="3">
								</li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img class="imagesize" src="Images/Design_Images/rugby_image_1.jpg" alt="First slide">
								</div>
								<div class="item">
									<img class="imagesize" src="Images/Design_Images/rugby_image_2.jpg" alt="Second slide">
								</div>
								<div class="item">
									<img class="imagesize" src="Images/Design_Images/rugby_image_3.jpg" alt="Third slide">
								</div>
								<div class="item">
									<img class="imagesize" src="Images/Design_Images/rugby_image_4.jpg" alt="Fourth slide">
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
						<div id="picture_text">
							<p>Pictures from recent Purdue Rugby matches can be found either at the following SmugMug link or on the facebook page listed below. The SmugMug pictures are taken by Mrs. Zinser and the facebook pictures are taken by team photographer, Meghan Wojnowski. Thank you to both for the wonderful pictures!</p>
							<p>Click Here: <a href="http://zinserpix.smugmug.com/Purduerugby" style="color: gold;"> Purdue Rugby SmugMug Images </p></a>
							<p>Click Here: <a href="https://www.facebook.com/rugbyphotography" style="color: gold;"> Wojie Photography, LLC </p></a>
						</div>
					</div>
				</div>
				
				<?php 
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>