<?php
include('config/db_connect.php');

//check get request id param
if(isset($_GET['id'])){
//escaping any sensitive sql chars
$id = mysqli_real_escape_string($conn, $_GET['id']);
//telling it one record based on id
$sql = "SELECT * FROM pizzas WHERE id =$id";

//get query results
$results = mysqli_query($conn, $sql);

//fetch single record
$pizza = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);

print_r($pizza);

}
?>
<html> 
	
	<?php include('templates/header.php'); ?>

  <h2>Details</h2>

  <?php include('templates/footer.php'); ?>

</html>