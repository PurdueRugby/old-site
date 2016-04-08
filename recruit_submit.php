<?php

if(isset($_POST['email'])) {
	
	function died($error) {
        echo "We are very sorry, but there were error(s) with your submitted form.";
		echo "The errors are as follow:<br /><br />";
		echo $error."<br /><br />";
		echo "Please correct these errors.<br /><br />";
		die();
    }
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email= $_POST['email'];
	$age = $_POST['age'];
	$country = $_POST['country'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$experience = $_POST['experience'];
	$bot_protect = $_POST['bot_protect'];
	
	if($bot_protect != '') {
		died('Sorry, but it appears you are a bot.  Go away bot!');
	}
	
	$email_message = "Recruit Form: \n";
	$email_to = "cfoss@purdue.edu";
	$email_subject = "New Rugby Recruit Form";
	
	$email_message .= "First Name: ".$first_name."\n";
	$email_message .= "Last Name: ".$last_name."\n";
	$email_message .= "Email: ".$email."\n";
	$email_message .= "Age: ".$age."\n";
	$email_message .= "Country: ".$country."\n";
	$email_message .= "Weight: ".$weight."\n";
	$email_message .= "Height: ".$height."\n";
	$email_message .= "Experience: ".$experience."\n";
	
	// create email headers
	$headers = 'From: '.$email."\r\n". 'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
	mail($email_to, $email_subject, $email_message, $headers);  
	
	
	
 
?>
<html>
	<head>
		<?php 
			include 'header.php'
		?>
        <title>Recruitment Submit - Purdue Men's Rugby</title>
		
	</head>
	<body>
		<div class="main">
			<div class="main_Container">
				<?php
					include 'bodyheader.php'
				?>
				<div id="mainSplashSub">
					<div id="header_box">
						<h2> Thank you for your interest in Purdue Rugby! </h2>	
					</div>
					<div id="content_box">
						<p>Our recruiting chair will contact you with more information!  We look forward to seeing you at practice!</p>
						</br>
						</br>
					</div>
				</div>
				
				<?php 
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>

<?php
	}
?>