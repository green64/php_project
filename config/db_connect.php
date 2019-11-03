<?php 
//connect with mysqi to db -- will use PDO later
$conn = mysqli_connect('', 'Sam', 'test1234', 'kitty_pizzas');

//check connection
if(!$conn){
    echo 'Connection error' . mysqli_connect_error();
}

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