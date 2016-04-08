<html>
	<head>
		<?php 
			include 'header.php'
		?>
        <title>Purdue Rugby Recruiting</title>
		
	</head>
	<body>
		<div class="main">
			<div class="main_Container">
				<?php
					include 'bodyheader.php'
				?>
				<div id="mainSplashSub">
					<div id="header_box">
						<h2> Recruiting for Current and Prospective Athletes </h2>
					</div>
					<div id="content_box">
						<p> It's never too late to begin playing rugby. We welcome players with all levels of experience - from those who have 
							never played to those who are ten year veterans. If you're interested in playing rugby at Purdue, please contact the club president, 
							Phil Spagnolo (pspagnol@purdue.edu), or head coach, Mark Behrens (mbehrens@terrasitedev.com).  We will get you all the important information you 
							need to be successful with Purdue Rugby.  
						</p>
						</br>
						<p>
							If you have any interest in playing rugby at Purdue University, we encourage prospective players to fill out the form below so we
							can get to know a bit more about your athletic background.  This is strictly voluntary and for our recruiting efforts - all players are welcome to join regardless of athletic
							experience or background.
						</p>
						</br>
						<div class = "divider_line">
						</div>
						<h2> Purdue Rugby Recruiting Questionnaire </h2>
						<form id="recruiting_form" name="recruit_form" action="recruit_submit.php" method="post">
							<div class="form-group">
								<label> Name </label>
								<input type="text" class="customform-control" name="first_name" placeholder="first name">
								<input type="text" class="customform-control" name="last_name" placeholder="last name">
							</div>
							<div class="form-group">
								<label> Email </label>
								<input type="text" class="customform-control" name="email">
							</div>
							<div class="form-group">
								<label> Age </label>
								<input type="text" class="customform-control" name="age">
							</div>
							<div class="form-group">
								<label> Country </label>
								<input type="text" class="customform-control" name="country">
							</div>
							<div class="form-group">
								<label> Weight </label>
								<input type="text" class="customform-control" name="weight">
								<label class="label-small"> Height </label>
								<input type="text" class="customform-control" name="height">
							</div>
							<div class="form-group">
								<label> Athletic Experience </label>
								<textarea type="text" class="form-control customform-control" rows="3" name="experience"></textarea>
							</div>
							<div class="form-group bot_stopper">
								<input type="text" class="form-control customform-control" name="bot_protect">
							</div>
							<input class="btn btn-default custom_button" type="submit" value="Submit" >
						</form>
					</div>
				</div>
				
				<?php 
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>