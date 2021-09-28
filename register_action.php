<?php

if(isset($_POST['username']) === FALSE){
	header('Location: register_form.php');
    exit();
}
if(isset($_POST['pwd']) === FALSE){
    header('Location: register_form.php');
    exit();
}
if(isset($_POST['pwdRepeat']) === FALSE){
    header('Location: register_form.php');
    exit();
}

else if (isset($_POST["reg_submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

}
else {
    header("location: register_form.php");
}