<?php 

include('config/db_connect.php');


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
				<img src="img/pizza.svg" class="pizza">
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
		
	</div>


	<?php include('templates/footer.php'); ?>

</html>