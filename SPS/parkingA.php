<html>
<head>
	<meta charset="UTF-8"/>
	<title>SPS | Parking A</title>
	<meta name="viewport" content="width=divice-width, initial scale1.0">
	<link rel="stylesheet" type="text/css" href="ParkingInterface.css">
</head>

<body>
<div id="wrapper">
	
	<header>
		<a href="Welcome.php" style="text-decoration:none;">
		<img src="SPSlogo.png" alt="logo" /></a><h1>Parking A - Floor Plan</h1>
		<?php
		
		require_once 'displayUser.php';
		require_once 'parkingAdata.php';
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


	<center>
	<div id="parking">
		<div class="row1">
			<div class="P1to3"><font size=18>101</font><?php echo "<br></br><font size=18>$webStatus[0]</font>";?></div>
			<div class="P1to3"><font size=18>103</font><?php echo "<br></br><font size=18>$webStatus[2]</font>";?></div>
			<div class="P1to3"><font size=18>105</font><?php echo "<br></br><font size=18>$webStatus[4]</font>";?></div>
		</div>
		<div class="road">
			<img src="right-arrow.png" height="80px"/>
			<img src="right-arrow.png" height="80px"/>
		</div>
		<div class="row2">
			<div class="P4to6"><font size=18>102</font><?php echo "<br></br><font size=18>$webStatus[1]</font>";?></div>
			<div class="P4to6"><font size=18>104</font><?php echo "<br></br><font size=18>$webStatus[3]</font>";?></div>
			<div class="P4to6"><font size=18>106</font><?php echo "<br></br><font size=18>$webStatus[5]</font>";?></div>
		</div>
	</div>
	</center>
	
	
	<div class="login" <?php if($isLogin == 1){?> style="display:none" <?php }?>>
		<a href="login.php" style="text-decoration:none;"><font size=16>Login To Book</font></a>
	</div>
	
	<div class="book" <?php if($isLogin == 0){?> style="display:none" <?php }?>>
		<form action="confirmation.php" method="POST">
		<tr>
			<td><b>Please Enter the Parking ID:</b><input type="text" name="spotID"/> </td>	
		</tr>
		<tr>
			<td><b>Date:</b><input type="text" placeholder="Enter day, e.g. 05, 23" name="day"/></td>
					<select name="month">
					<option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
					<option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option>
					<option value="07">July</option><option value="08">Aug</option><option value="09">Sept</option>
					<option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
					</select>
					
					<select name="year">
					<option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option>
					<option value="2019">2019</option><option value="2020">2020</option>
					</select>
		</tr>
		<tr>
			<td><b>Time:</b><select name="time">
				<option value="00:00am">12:00am midnight</option><option value="01:00am">1:00am</option>
				<option value="02:00am">2:00am</option><option value="03:00am">3:00am</option>
				<option value="04:00am">4:00am</option><option value="05:00am">5:00am</option>
				<option value="06:00am">6:00am</option><option value="07:00am">7:00am</option>
				<option value="08:00am">8:00am</option><option value="09:00am">9:00am</option>
				<option value="10:00am">10:00am</option><option value="11:00am">11:00am</option>
				<option value="12:00pm">12:00pm</option><option value="01:00pm">1:00pm</option>
				<option value="02:00pm">2:00pm</option><option value="03:00pm">3:00pm</option>
				<option value="04:00pm">4:00pm</option><option value="05:00pm">5:00pm</option>
				<option value="06:00pm">6:00pm</option><option value="07:00pm">7:00pm</option>
				<option value="08:00pm">8:00pm</option><option value="09:00pm">9:00pm</option>
				<option value="10:00pm">10:00pm</option><option value="11:00pm">11:00pm</option>	
			</select>
		</tr>
			<input type="submit" value="Reserve"/>
		



</html>