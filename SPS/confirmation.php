<html>
<head>
<title>Confirmaton</title>
</head>
<body>

<?php
	$reservation = $_POST['spotID'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$date = $year."-".$month."-".$day;
	$time = $_POST['time'];
	
	require_once('parkingAdata.php');
	//redirect user back to parking interface if selected spot is taken/reserved
	for($i = 0; $i < $index ; $i++)
	{	
		if($reservation == $webParkingID[$i])
		{
			if($webStatus[$i] == "Reserved" || $webStatus[$i] == "Taken")
			{
				header("refresh:5;url=parkingA.php");
				echo "<font size=32>The parking spot $reservation is unavailable.<br />Please select other parking spot.<br /></font>";
				echo "<font size=12>Automatic redirect to parking webpage in 3 seconds</font>";
			} else{
				echo "<br><br>Are you confirm to reserve the spot $reservation on $date $time?";
				session_start();
				$_SESSION['reserved'] = $reservation;
				$_SESSION['reservedDate'] = $date;
				$_SESSION['reservedTime'] = $time;
				echo "<form action='update.php' method='post'>
				<input type='submit' value='Yes' />
				</form>";
			}
		}
	}
?>
</body>
</html>