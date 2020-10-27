<?php

//code to stop the arrow back from working after logout.... should be placed in the header section. 

if(!isset($_SESSION['email'])){

	header("Location:..login.php");
}

?>