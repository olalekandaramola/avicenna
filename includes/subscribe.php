<?php
if isset($_POST['subscribe']){
include "../db_config.php";
$email = $_POST['email'];


$sql = $conn->prepare("INSERT INTO newsletter_avi VALUES(?)");
$sql->bind_param("s",$email);
$sql->execute();

if($sql){
    echo "<script>alert('Thanks for subscribing to our newsletter.')</script>";
}else{
    echo "<script>alert('There was an error, please try again.')</script>";
}

}

?>