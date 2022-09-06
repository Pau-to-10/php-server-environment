<?php
session_start();

$myUser = "tomas@gmail.com";
$myPwd = "qwert";

if ($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd) {
    $_SESSION["user"] = $_POST["user"];
    
    header("Location: panel.php");

} else {
    header("Location: index.php");
}


?>