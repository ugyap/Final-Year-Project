<?php
echo "<b>Parking B<b><br><br>";

$im=imagecreate(200,200) or die("DIE");
$background_color=imagecolorallocate($im,255,255,0);
$blue=imagecolorallocate($im,0,0,255);
//imageline($im,0,0,200,200,$blue);
//imagerectangle($im,0,50,50,100,$blue);
//imagefilledrectangle($im);
imagepng($im,"R.png");

?>
<img src="R.png">