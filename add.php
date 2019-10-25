<?php 
//data will be detected from the form and that will determine what happens next
//has data been submitted via GET? if yes you see it at end of URL
//data also stored in $_GET array THIS IS A GLOBAL ARRAY
// if(isset($_GET['submit'])){
//   echo $_GET['email'];
//   echo $_GET['title'];
//   echo $_GET['ingredients'];

//this method hides data so you don't see it after URL
//htmlspecialchars prevents malicious code from running
if(isset($_POST['submit'])){
  // echo htmlspecialchars($_POST['email']);
  // echo htmlspecialchars($_POST['title']);
  // echo htmlspecialchars($_POST['ingredients']);

  //check email
  if(empty($_POST['email'])){
    echo 'An email is required <br />';
  }else {
  $email = $_POST['email'];
  //native PHP filter
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      ECHO 'email must be a valid address <br />';
    }
  }


//check title
//using regex for validations
if(empty($_POST['title'])){
  echo 'A title is required <br />';
}else {
$title = $_POST['title'];
//this is a RegEx expression
if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
  echo 'Titles must be letters and spaces only <br />';
}
}


//check ingredients
if(empty($_POST['ingredients'])){
  echo 'An ingredient is required <br />';
}else {
  $ingredients = $_POST['ingredients'];
  //this is a RegEx expression
  if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
    echo 'Ingredients must be separated by commas <br />';
  } 
 }
}//end of post check
?>
<html>
	
	<?php include('templates/header.php'); ?>

  <section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
      <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
          <input type="submit" name="submit" class="btn brand z-depth-0">
        </div>
  </section>

	<?php include('templates/footer.php'); ?>

</html>