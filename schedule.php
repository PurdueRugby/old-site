<html>
	<head>
		<?php 
			include 'header.php'
		?>
        <title>Purdue Rugby Schedule</title>
		
	</head>
	<body>
		<div class="main">
			<div class="main_Container">
				<?php
					include 'bodyheader.php'
				?>
				<div id="mainSplashSub">
					<div id="header_box">
						<h2> Schedule </h2>
					</div>
					<div id="content_box">
						<form action="" method="post">
						<div class="form-group">
							<label>Select Season </label>
							<select id="season" name="season_select" class="customform-control" onchange="this.form.submit();">
								<option></option>
								<option>Fall 2015</option>
								<option>Spring 2015</option>
								<option>Fall 2014</option>
								<!--<option>Spring 2014</option>
								<option>Fall 2013</option>-->
							</select>
						</div> 
						</form>
						<table class="table">
							<thead>
								<tr>
									<td class="table_head"><strong>Date</strong></td>
									<td class="table_head"><strong>Match</strong></td>
									<td class="table_head"><strong>Location</strong></td>
									<td class="table_head"><strong>Result</strong></td>
								</tr>
							</thead>
							<tbody id="table_body">
								<?php
									if(isset($_POST['season_select'])){ //check if form was submitted
										$input = $_POST['season_select']; //get input text
										echo "<h2> " . $input . "</h2>";
									}
									$input = str_replace(' ', '', $input);
									if($input == '') {
										$input = "Fall2015";
										echo "<h2> Fall 2015 </h2>";
									}
									$db = new SQLite3('Databases/Schedule_DB');
						
									$results = $db->query('SELECT * FROM ' . $input . ' ORDER BY Month ASC, Day ASC');
						
									while($row = $results->fetchArray()) {
										echo "<tr>";
										echo "<td>";
										echo $row[Month] . "/" . $row[Day];
										echo "</td>";
						
										echo "<td>";
										echo $row[Match];
										echo "</td>";
							
										echo "<td>";
										echo $row[Location];
										echo "</td>";
							
										echo "<td>";
										//if($row[Recap] == 1) {
											//echo "<a href='http://web.ics.purdue.edu/~rugby/Spring_2015_News/btu7s_boiler_victory_in_ann_arbor.php'>";
										//}
										echo $row[Result];
										//if($row[Recap] == 1) {
										//	echo "</a>";
										//}
										echo "</td>";
										echo "</tr>";
									}   
								?>
							</tbody>
						</table>
					</div>
				</div>
				
				<?php 
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>