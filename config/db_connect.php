<?php 
//connect with mysqi to db -- will use PDO later
$conn = mysqli_connect('localhost', 'Sam', 'test1234', 'kitty_pizzas');

//check connection
if(!$conn){
    echo 'Connection error' . mysqli_connect_error();
}
?>