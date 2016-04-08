<html>
	<head>
		<?php 
			include 'header.php'
		?>
        <title>Purdue Men's Rugby Homepage</title>
		<script>window.twttr = (function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0],
				t = window.twttr || {};
				if (d.getElementById(id)) return t;
				js = d.createElement(s);
				js.id = id;
				js.src = "https://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js, fjs);
 
				t._e = [];
				t.ready = function(f) {
				t._e.push(f);
				};
				return t;
			}(document, "script", "twitter-wjs"));
		</script>
	</head>
	<body>
		<?php 
			$db = new SQLite3('Article_DB');
		?>
		
			
		<div class="main">
			<div class="main_Container">
				<div id="header">
					<img id="crest" src="Images/Design_Images/weathered_crest_small.jpg"/>
					<img id="header_image" src="Images/Design_Images/Header3.png"/>
					<div  id="navbar">
						<nav class="navbar navbar-default" role="navigation">
							<div id="navbar_border">
								<ul class="nav navbar-nav">
									<li>
										<a href="index.php">Home</a>
									</li>
									<!--<li>
										<a href="news.php">News</a>
									</li>-->
									<li>
										<a href="team.php">Team</a>
									</li>
									<li>
										<a href="schedule.php">Schedules</a>
									</li>
									<li>
										<a href="recruiting.php">Recruiting</a>
									</li>
									<li>
										<a href="rugby_pictures.php">Game Images</a>
									</li>
									<li>
										<a href="history.php">History</a>
									</li>
									<!--<li>
										<a href="forum.php">Forum</a>
									</li>-->
									<li>
										<a href="resources.php">Resources</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<div id="mainSplash">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active">
							</li><!--
							<li data-target="#myCarousel" data-slide-to="1">
							</li>
							<li data-target="#myCarousel" data-slide-to="2">
							</li>-->
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img id="slide1_image" class="carousel_image" src="Images/Article_Images/purdue_team_photo_chicago_lions.jpg">
								<div id="slide1_caption" class="carousel-caption">
									<h3 id="slide1_header" >Purdue Set to Face IPFW Saturday, Sept. 18th</h3>
									<p id="slide1_p">Match will kickoff at 1pm in Fort Wayne, IN on IPFW's campus.</p>
								</div>
							</div>
							<!--
							<div class="item">
								<img id="slide2_image" class="carousel_image" src="Images/Article_Images/scrumImage.jpg">
								<div id="slide2_caption" class="carousel-caption">
									<h3 id="slide2_header">Scrum Image</h3>
									<p id="slide2_p">Here we have scrummage</p>
								</div>
							</div>
							<div class="item">
								<img id="slide3_image" class="carousel_image" src="Images/Article_Images/team_picture.jpg">
								<div id="slide3_caption" class="carousel-caption">
									<h3 id="slide3_header">Team Picture</h3>
									<p id="slide3_p">Cheese Bitches</p>
								</div>
							</div>-->
						</div>
						<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
					--></div>
				</div>
				<div id="socialMediaBox">
					<a class="twitter-timeline" href="https://twitter.com/PurdueMensRugby" data-widget-id="614302701787193344">Tweets by @PurdueMensRugby</a>
					<img src="Images/Design_Images/social_media/follow_online.png">
					<div id="icon_container">
						<a href="http://www.facebook.com/purduemensrugby"><img class="social_media_button" src="Images/Design_Images/social_media/cfgold_facebook.png"></a>
						<a href="http://www.youtube.com/channel/UC7Ntp9PrBT5qCIBL_a5Yy0w"><img class="social_media_button" src="Images/Design_Images/social_media/youtube_button.png"></a>
					</div>
				</div><!--
				<div id="news">
					<div class="front_page_newsbox" id="news1">
						<a href="#"><h3 id="headline1"><u>Purdue Finishes 4th in BTU Finals</u></h3>
						<img id="news_image_1" src="Images/Article_Images/team_picture.jpg">
						<p id="summary1"> After a heartbreaking loss to Wisconsin, the Boilers settle for 4th in the tournament with a loss to Michigan </p></a>
					</div>
					<div class="front_page_newsbox" id="news2">
						<a href="#"><h3 id="headline2"><u>Purdue Finishes 4th in BTU Finals</u></h3>
						<img id="news_image_2" src="Images/Article_Images/team_picture.jpg">
						<p id="summary2"> After a heartbreaking loss to Wisconsin, the Boilers settle for 4th in the tournament with a loss to Michigan </p></a>
					</div>
					<div class="front_page_newsbox" id="news3">
						<a href="#"><h3 id="headline3"><u>Purdue Finishes 4th in BTU Finals</u></h3>
						<img id="news_image_3" src="Images/Article_Images/team_picture.jpg">
						<p id="summary3"> After a heartbreaking loss to Wisconsin, the Boilers settle for 4th in the tournament with a loss to Michigan </p></a>
					</div>
					<div class="front_page_newsbox" id="news4">
						<a href="#"><h3 id="headline4"><u>Purdue Finishes 4th in BTU Finals</u></h3>
						<img id="news_image_4" src="Images/Article_Images/team_picture.jpg">
						<p id="summary4"> After a heartbreaking loss to Wisconsin, the Boilers settle for 4th in the tournament with a loss to Michigan </p></a>
					</div>
				</div>-->
				<div id="scheduleBox">
					<h3> Purdue is now scheduling for the 2015-2016 season! </h3>
					<p> Contact President Philip Spagnolo (pspagnolo@purdue.edu) to schedule a match with the Boilermakers! </p>
				</div>
				<div id="recruitingBox">
					<img id="purdue_pete" src="Images/Design_Images/purdue_pete.jpeg">
					<h3> Interested in playing? </h3>
					<p> Purdue rugby welcomes all athletes regardless of experience. <a href="recruiting.php" id="recruiting_link">  Click here for more info! </p></a>
				</div>
				<div id="ESPNrugbyRSS">
					<iframe src="http://www.scrum.com/scrum/rugby/story/news_headlines.html?wrappertype=basic" width="250" height="240" marginwidth="1" marginheight="1" frameborder="0" scrolling="yes" align="default" name="I1"></iframe>
				</div>
				<?php 
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>
