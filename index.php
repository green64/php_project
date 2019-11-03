<?php 

include('config/db_connect.php');

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

// explode(',', $pizzas[0]['ingredients']);



?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
	<div class="row">
	<!-- replace { } with : and endforeach; -->
		<?php foreach($pizzas as $pizza): ?>

			<div class="col s6 md3">
				<div class="card z-depth-0">
				<div class="card-content center">
					<h6 style="font-weight:bold;"><?php echo htmlspecialchars($pizza['title']); ?></h6>
					<ul class="grey-text">
						<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
						<li><?php echo htmlspecialchars($ing); ?></li>
						<?php endforeach; ?>
					</ul>
					</div>
				<div class="card-action right-align">
				<a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
				</div>
				</div>
			</div>

					<?php endforeach; ?>
					<?php if(count($pizzas) >= 2): ?>
					<p>There are 2 or more pizzas</p>
					<?php else: ?>
					<p>There are less than 2 pizzas</p>
					<?php	endif; ?>
		<!-- <div>
			<p class="center">If you can see the pizzas in the cards above my database is working!</p>
			<p class="center">Ok third time's the charm!</p>

			</div> -->
	</div>
</div>

	<?php include('templates/footer.php'); ?>

</html>