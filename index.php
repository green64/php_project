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
	<div>
			<h4>11-4 update</h4>
			<p>So ... I have a locally working app that lets users create, read, and delete records — 
			but no updates so I can't technically say it's a CRUD app. (Crud isn't a bad thing in dev world.)</p>

			<p>Of course I realize this app is online, and all you can see is an error message. It's taken me some time 
			and research to understand packages and dependencies in the PHP world. But I've discovered Packagist &mdash; 
			the PHP version of NPM or close to it &mdash; and some other helpful tools, so it won't be long til my app 
			works online as well as locally.</p>
			</div>
</div>

	<?php include('templates/footer.php'); ?>

</html>