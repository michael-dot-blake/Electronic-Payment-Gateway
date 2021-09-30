<?php

session_start();

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
		foreach(file('database/users.txt') as $line) {
			//split each line as two parts
			list($username, $password) = explode(",",$line);
			//verify if an exist user with the same username
			if($username == $entered_username){
				//verify the password
				if($password == $entered_password."\n"){
					$login = 1;
					break;
				}
			}
		}
		
		if($login == 0){
            header('Location: login_form.php');
		}else{
			$_SESSION['username'] = $username;
            header('Location: welcome.php');
		}
	}
