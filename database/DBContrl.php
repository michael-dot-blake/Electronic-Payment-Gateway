<!-- Database DAO Controller -->
<?php
class DBController {
//Database Config
private $host = "localhost";
private $user = "root";
private $password = "pass";
private $database = "shoppingcart";
$connection;


function intialise() {
    $this->connection = $this->connectionDB();
    }
//Creates Database Connection
function connectionDB() {
    $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    return $connection;
    }

//Check Connection - If connection fails
if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}
}
?>