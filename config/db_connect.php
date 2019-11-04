<?php 
//use this for LOCAL connection
// $conn = mysqli_connect('', 'Sam', 'test1234', 'kitty_pizzas');

// //check connection
// if(!$conn){
//     echo 'Connection error' . mysqli_connect_error();
// }

//use these variables for prod
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";


//other connection method - PDO
// try {
// 	$conn = new PDO("mysql:host=$localhost;dbname=$kitty_pizzas", $Sam, $test1234);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected successfully";
// 	}
// catch(PDOException $e)
// 	{
// 	echo "Connection failed: " . $e->getMessage();
// 	}

?>