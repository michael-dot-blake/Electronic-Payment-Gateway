<?php

session_start();

	$userList = file ('database/users.txt');

	if(empty($_POST['username'])){
		header('Location: login_form.php');
		//echo "Username not passed";
	}
	if(empty($_POST['password'])){
		header('Location: login_form.php');
		//echo "password not passed";
	}
	
	$entered_username = $_POST['username'];
	$entered_password = $_POST['password'];

	if($entered_username != "" & $entered_password != ""){
		$login = 0;
		//read users.txt line by line
		foreach($userList as $line) {
			//split each line as two parts
			$credentials = explode(',', $line);
			//verify if an exist user with the same username
			if(trim($credentials[0]) == $entered_username){
				//verify the password
				if(password_verify($entered_password, trim($credentials[1]))) {
				$_SESSION['username'] = $entered_username;
				$login = 1;
				break;
				}
			}
		}
		
		if($login == 0){
            header('Location: login_form.php');
		}else{
            header('Location: welcome.php');
		} 
	}
