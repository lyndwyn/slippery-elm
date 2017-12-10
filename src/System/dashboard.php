<?php
	require_once("login_functions.php");
?>

<?php

if(isLoggedIn()){
    echo "Welcome <br>";
    echo "<a href=\"logout.php\" >Logout</a >";
} else {
    echo "Must be logged in.";
}


?>