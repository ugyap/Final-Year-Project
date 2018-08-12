<?php

session_start();

//received values of desired spotID, time & date
//If parking 101 is booked, the $reserved = 101
$reserved = $_SESSION['reserved'];
$Settime = $_SESSION['reservedTime'];
$Setdate = $_SESSION['reservedDate'];

include 'connect.php';

//Parking is the name of Table
//I want to update the variable Status to Reserved where the ParkingID = $reserved, which is 101
echo "You have successfully reserved the parking spot $reserved! on $Settime $Setdate";
	echo "<a href='Welcome.php'><br />Back to Home Page";
$query ="UPDATE Lot1
		SET Status='Reserved', Time='$Settime', Date='$Setdate'
		WHERE ParkingID='$reserved'";
$result = mysqli_query($connect, $query);

//check if it updates successfully
if($result)
{
	echo "You have successfully reserved the parking spot $reserved! on $Settime $Setdate";
	echo "<a href='Welcome.php'><br />Back to Home Page";
}else{
	echo "SQL table not updated. Please try again.";
}
mysqli_close($connect);
?>