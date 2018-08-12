<html>
<head>
	<meta charset="UTF-8"/>
	<title>SPS | Available Locations</title>
	<meta name="viewport" content="width=divice-width, initial scale1.0">
	<link rel="stylesheet" type="text/css" href="locations.css">
</head>

<body>

<div id="wrapper">
	<header>
	<div id="spslogo"><a href="Welcome.php" style="text-decoration:none;">
		<img src="SPSlogo.png" alt="logo" /><h1>SMART PARKING SERVICE</h1></a>
	</div>
	<?php
	include 'parkingAdata.php';
	include 'displayUser.php';
		?>
	
	</header>
	
	<div id="nav">
		<ul>
			<li class='active'><a href="Welcome.php"><b>Home</a>
			<li><a href="locations.php">Available Locations</a></li>
			<li><a href="ComingSoon.php">Pricing</a></li>
			<li><a href="ComingSoon.php">About Us</a></b></li></li>
		</ul>	
	</div>
	
	<div id="container">
		<div class="sidebar">
		<br></br>		
		</div>
	
		<div id="content">
		    
			<h3 style="text-indent: 150px"><a href="parkingA.php">Parking A</a><?php echo "  $parkingStatus"?> </h3>
			
			<img src="http://www.pri-med.ca/images/pcu/images/ottawa.jpg" width="400"/>
		
		
			<h3 style="text-indent: 150px"><a href="parkingB.php">Parking B</a></h3>
			<img src="http://cdn.shutterbug.com/images/styles/960-wide/public/photopost/data/500/7615Orleans_Skyline.JPG?itok=ar_U9Pst" width="400"/>
		
		
		</div>
		<div class="sidebar" style='float:right;'>
		<br></br>		
		</div>
	</div>
	
	<footer>
		<div class="contact">
			<p>SPS Smart Parking Service</p>
			<p>Phone: <b>613-666-6666</b><br>
			1125 Colonel By Drive,<br>
			Ottawa, ON,Canada.<br>
			SPS@gmail.com.</p>
			
		</div>
	</footer>
</body>

</html>
	