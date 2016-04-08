<!doctype html>
<html>
	<header>
    	<?php 
			include 'header.php'
		?>
        <title id="pagetitle"> </title>
    </header>
    <body>
    	<?php
			include 'bodyheader.php'
		?>
        <div id="login">
        	<form role="form" action="login.php" method="post">
        		<div class="form-group">
            		<label for="email"> Email address: </label>
                	<input type="email" class="form-control" id="email">
            	</div>
            	<div class="form-group">
            		<label for="pwd">Password: </label>
                	<input type="password" class="form-control" id="pwd">
            	</div>
            	<button type="submit" class="btn btn-default">Submit</button>
        	</form>
        </div>
                
    
	
		<?php 
			include 'footer.php'
		?>
    </body>
</html>