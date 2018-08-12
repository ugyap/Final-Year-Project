<?php

include 'connect.php';

//$sql = 'SELECT ParkingID, Status, Time FROM parkinglots';
$sql = 'SELECT ParkingID, Status, Time FROM Lot1';
$parkingData = mysqli_query($connect, $sql);

//check if query is successful
if(!$parkingData) {
	mysql_error();
}

//assign database values into web variables
$index = 0; //first spot in a parking lot
while($rowDB = mysqli_fetch_assoc($parkingData))
{
	$webParkingID[$index] = $rowDB['ParkingID'];
	$webStatus[$index] = $rowDB['Status'];
	$webTime[$index] = $rowDB['Time'];
	$index++;
}


for($i = 0; $i < $index ; $i++)
{
	if(strcasecmp($webStatus[$i], "Available") == 0)
	{
		$parkingStatus = 'Not Full';
	} else {
		$parkingStatus = 'Full';
	}
	//echo "$webParkingID[$i] $webStatus[$i] $webTime[$i]<br>";
}

?>
