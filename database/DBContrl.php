<!-- Database DAO Controller -->
<?php
class DBController {
//Database Config
private $host = "localhost";
private $user = "root";
private $password = "pass";
private $database = "shoppingcart";

public $connection;
public $tbname;

function intialise() {
    $this->connection = $this->connectionDB();
    }
//Creates Database Connection
function connectionDB() {
    $connection = mysqli_connect($this->host, $this->user, $this->password);
//Check Connection - If connection fails
if ($connection) {
    die("Connection Failed: " . mysqli_connect_error());
}

//Run Query - Will create database if it doesnt exist.
$db = "CREATE DATABASE IF NOT EXISTS $database";
    if (mysqli_query($connection, $db)) {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    
//Create New Table in SQL
//Creates table if it doesnt exist. Product name will have character limit of 50
//Price is in Float for decimals
//product_image 150 incase links are super long in character.
$db = "CREATE TABLE IF NOT EXISTS $tbname
        (id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR (30) NOT NULL,
        product_price FLOAT,
        product_image VARCHAR(150)
        );";
    }

//Check 
if (!mysqli_query($connection, $db)) {
    echo "Error while creating table: " . mysqli_error($connection);
}
//else
else {  
    return false;
}

//Function to select all data from the database
function retrieveData() {
    $db = "SELECT * FROM $this->tbname";
    $results = mysqli_query($connection,$db);
    if (mysqli_num_rows($results) > 0 ) {
        return $results;
    }
}

}
}