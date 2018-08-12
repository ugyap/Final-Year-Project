<?php
//create connection
$connect = mysqli_connect("192.168.1.131", "eugene", "password", "ParkingLots");
$connect = mysqli_connect("localhost", "root", "password", "eugeneparking"); //my own

//check connection
if(!$connect) {
	die(mysqli_connect_error());
}
?>
