<?php

echo $_POST['username'];
echo $_POST['password'];
echo $_POST['passwordRepeat'];


if(isset($_POST['username']) == FALSE){
	header('Location: register_form.php');
    exit();
}
if(isset($_POST['password']) == FALSE){
    header('Location: register_form.php');
    exit();
}
if($_POST['password'] != $_POST['passwordRepeat']){
    header('Location: register_form.php');
    exit();
}

else if (isset($_POST["reg_submit"])) {
    $entered_username = $_POST["username"];
    $entered_pwd = $_POST["password"];

    if($entered_username!="" & $entered_pwd != ""){
		$register = 0;
		//read users.txt line by line
		foreach(file('database/users.txt') as $line) {
			//split each line as two parts
			list($username, $password) = explode(",",$line);
			//verify if an exist user with the same username
			if($username == $entered_username){
				$register = 1;
				break;
			}
		
    }

    if($register == 1){
        echo "User already exists!";
    }else{
        //open a file named "text.txt"
        $file = fopen("database/users.txt","a");
        //insert this user into the users.txt file
        fwrite($file,$entered_username.",".$entered_pwd."\n");
        //close the "$file"
        fclose($file);
        echo "The user has been added to the database/users.txt";
    }


    }
}
else {
    header("location: register_form.php");
}