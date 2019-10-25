
<?php
//functions
// function sayHello(){
//   echo 'good morning yoshi';
// }
// //function won't run til it's called
// sayHello();

// function sayHello($name = 'shaun'){
//   echo "good morning $name";
// }
// //function won't run til it's called
// sayHello();


// $products = [
//   ['name' => 'shiny star', 'price' => 20],
//   ['name' => 'bouncy ball', 'price' => 10],
//   ['name' => 'pokemon', 'price' => 60],
//   ['name' => 'shiny pokemon', 'price' => 120],
//   ['name' => 'flower', 'price' => 25],
//   ['name' => 'pickle mustache', 'price' => 100],
// ];
  
function formatProduct($product){
  // echo "{$product['name']} costs ${$product['price']} to buy <br />";
return "{$product['name']} costs ${$product['price']} to buy <br />";
}
$formatted = formatProduct(['name'=>'shiny star', 'price'=> 20]);
echo $formatted;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to My First PHP App</title>
</head>
<body>

<div style="margin: 40px;"> 

<h1>Welcome to My First PHP App</h1>
<p>Now that this page has a <a href="https://github.com/green64/php_project" target="_blank">Github repo</a> and a <a href="https://agile-wildwood-45625.herokuapp.com/" target="_blank">Heroku app</a> to take advantage of its 
MariaDB (what a great tool XAMPP has turned out to be!), I'm back to building my first PHP app.</p> 

<p>I've already learned about PHP differences, such as needing a composer.json file instead of a package.json to successfully 
host the app in Heroku. I've also discovered similarities, such as familiar operators, arrays, variables, and more. I'm excited that I'm able to transition to PHP
fairly easily, thanks to my existing full-stack knowledge. And even more excited to see what's next.</p>

<p>Watch this space for something great!</p></div>

  
</body>
</html>