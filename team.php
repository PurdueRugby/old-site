<html>
	<head>
		<?php 
			include 'header.php'
		?>
        <title>Team - Purdue Men's Rugby</title>
		
	</head>
	<body>
		<div class="main">
			<div class="main_Container">
				<?php
					include 'bodyheader.php'
				?>
				<div id="mainSplashSub">
					<div id="header_box">
						<h2> 2015-2016 Team </h2>
					</div>
					<div id="content_box">
						<h2> Coaching Staff </h2>
						<div class="divider_line">
						</div>
						<p> XVs Head Coach- Mark Behrens </p>
						<p> Email: mbehrens@terrasitedev.com</p>
						<p> XVs Forwards Coach- Lake Paul </p>
						<p> Email: lpaul@purdue.edu</p>
						<p> 7s Head Coach - Matt Wagner</p>
						<p> Email: matthew.wagner10@gmail.com </p>
						<p> XVs B-side Coach - Max Dapper</p>
						<p> Email: </p>
						<p>Club President - Philip Spagnolo </p>
						<p> Email: pspagnol@purdue.edu </p>
						<h2> Active Roster</h2>
						<div class="divider_line">
						</div>
						<table id="roster_table">
							<tr>
								<td class="table_head"><strong>Name</strong></td>
								<td class="table_head"><strong>Year</strong></td>
								<td class="table_head"><strong>Position</strong></td>
								<td class="table_head"><strong>Height</strong></td>
								<td class="table_head"><strong>Weight</strong></td>
							</tr>
							
							<?php
								class MyDB extends SQLite3 {
									function __construct() {
										$this->open('Databases/Roster_DB');
									}		
								}
						
								$db = new MyDB();
								if(!$db) {
									echo $db->lastErrorMsg();
								} else {
									//echo "Opened database successfully\n";
								}
								$sql =<<<EOF
									SELECT * from Players ORDER BY LastName, FirstName;
EOF;
						
								$ret = $db->query($sql);
								while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
									echo "<tr>";
									echo "<td>";
									echo $row[FirstName] . " " . $row[LastName];
									echo "</td>";
						
									echo "<td>";
									echo $row[Year];
									echo "</td>";
							
									echo "<td>";
									echo $row[Position];
									echo "</td>";
							
									echo "<td>";
									echo $row[Height];
									echo "</td>";
							
									echo "<td>";
									echo $row[Weight] . " lbs";
									echo "</td>";
									echo "</tr>";
								}
								$db->close();
							?>
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
