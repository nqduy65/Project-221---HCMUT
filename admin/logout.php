<?php
session_start();
if(isset($_SESSION["username"])){
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION);
}
header("Location:login.php");
?>
