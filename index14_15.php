
<?php

function myFunc(){
  //variables defined within functions can only be called from there
//   $price = 10;
//   echo $price;
// }
// myFunc();

// function myFuncTwo($age){
//   echo $age;
// }
// myFuncTwo(25);
// echo $age;

// $name = 'kiko';

// function sayHello(){
//   //using this allows you to call a variable outside function
//   global $name;
//   echo "hello $name";
// }

// sayHello();

// function sayBye(&$name){
//   $name = 'wario';
//   echo "bye $name";
// }
// sayBye($name);
// echo $name;

//includes and requires work slightly different
//require won't carry on with code if there's an error
//allows for modurlization and repitition -- one update for all instances
//good for headers and footers on multiple pages
<

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