<?php
include('config/db_connect.php');

//check get request id param
if(isset($_GET['id'])){
//escaping any sensitive sql chars entered by users
$id = mysqli_real_escape_string($conn, $_GET['id']);
//telling it one record based on id
$sql = "SELECT * FROM pizzas WHERE id = $id";

//get query results
$result = mysqli_query($conn, $sql);

//fetch single record
$pizza = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html> 
	
	<?php include('templates/header.php'); ?>

  <div class="container center">
  <?php if($pizza): ?>
    <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
    <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
    <p><?php echo date($pizza['created_at']); ?></p>
    <h5>Ingredients:</h5>
    <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

  <?php else: ?>
  <h5>No such pizza exists</h5>
  <?php endif ?>

  </div>

  <?php include('templates/footer.php'); ?>

</html>