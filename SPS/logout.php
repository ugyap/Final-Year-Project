<?php
session_start();
session_unset();
session_destroy();
echo "Log out successfully.";
header("refresh:1;url=Welcome.php");
exit(0);
?>