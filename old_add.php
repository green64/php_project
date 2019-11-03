<!-- <?php 

include('config/db_connect.php');

$email = $title = $ingredients = '';
$errors = array('email' => '', 'title'=> '', 'ingredients' =>'');


if(isset($_POST['submit'])){

  //check email
  
  if(empty($_POST['email'])){
    $errors['email'] = 'We need your email';
  }else {
  $email = $_POST['email'];
  //native PHP filter
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Give us a valid email';
    }
  }


//check title
//using regex for validations
if(empty($_POST['title'])){
  $errors['title'] = 'Name your pie!';
}else {
$title = $_POST['title'];
//this is a RegEx expression
if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
  $errors['title'] = 'Letters and spaces only please.';
}
}
 


//check ingredients
if(empty($_POST['ingredients'])){
  $errors['ingredients'] = 'Hey add some ingredients!';
}else {
  $ingredients = $_POST['ingredients'];
  //this is a RegEx expression
  if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
    $errors['ingredients'] = 'Use commas for more than one ingredient.';
  } 
 }
 if (array_filter($errors)){
   //need to define callback function here
  //  echo 'errors in the form';
 } else {
   //escaping malicious or sensitive chars protects data going into db
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

   //create sql variable to add data to db
$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('title', 'email', ingredients')";
  
  //save to db and check
  if(mysqli_query($conn, $sql)){
    //success
    header('Location: index.php');
  } else{
    echo 'query error: ' . mysqli_error($conn);
  }
 }
}


?>
<html>
	
	<?php include('templates/header.php'); ?>

  <section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
      <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
          <input type="submit" name="submit" class="btn brand z-depth-0">
        </div>
  </section>

	<?php include('templates/footer.php'); ?>

</html> -->