<?php 

//connect with mysqi to db -- will use PDO later
$conn = mysqli_connect('localhost', 'Sam', 'test1234', 'kitty_pizzas');

//check connection
if(!$conn){
		echo 'Connection error' . mysqli_connect_error();
}
//construct query, make it, fetch results
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//clear results
mysqli_free_result($result);

//close connection
mysqli_close($conn);

// print_r($pizzas);

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
	<div class="row">
		<?php foreach($pizzas as $pizza){ ?>

			<div class="col s6 md3">
				<div class="card z-depth-0">
				<div class="card-content center">
					<h6 style="font-weight:bold;"><?php echo htmlspecialchars($pizza['title']); ?></h6>
					<div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
				</div>
				<div class="card-action right-align">
				<a class="brand-text" href="#">more info</a>
				</div>
				</div>
			</div>
		<?php } ?>
		<div>
			<p class="center">If you can see the pizzas in the cards above my database is working!</p>
			</div>
	</div>
</div>

	<?php include('templates/footer.php'); ?>

</html>