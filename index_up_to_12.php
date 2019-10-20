
<?php

   // this is a constant that can't be overridden. note ALL CAPS
  //  define('NAME', 'Yoshi');

  //  $stringOne = "my email is ";
  //  $stringTwo = "samanthamccall@gmail.com";

  //  $name = 'Yoshi';

   // \ is an escape character
  //  echo "Hey my name is $name and I say \"hooray\"";


  // $age = 30;
  // $pi  = 3.14;
  // $radius = 25;
  // echo $pi * $radius^2;

  // echo 2 * (4 + 9) / 3;

  // increments and decrement operations

  // echo $radius++; //++ is the same as +1
  // echo $radius;

  // $age = 20;
  // $age += 10;

// number functions
// echo floor($pi);
// echo ceil($pi);
// echo pi();

//index, associative and multi-dimension arrays
//index
// $peopleOne = ['shaun', 'crystal', 'ryu'];
// //call the item by its index
// echo $peopleOne[0];


// $peopleTwo = array('lexie', 'pumpkin', 'kiko');
// echo $peopleTwo[0];
// echo '<br>';

// $ages = [20, 30, 40, 50];
// print_r($ages);
// echo '<br>';

// $ages[1] = 25;
// print_r($ages);
// echo '<br>';

// $ages[] = 60;
// print_r($ages);
// echo '<br>';

// array_push($ages, 70);
// print_r($ages);
// echo '<br>';

// echo count($ages);
// echo '<br>';

// //PHP merging function
// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);
// echo '<br>';

// //associative arrays - they are key-value pairs instead of indexes
// $ninjasOne = ['shaun' =>'black', 'mario' => 'green', 'luigi' => 'orange'];
// echo $ninjasOne[ 'mario'];
// echo '<br>';
// print_r($ninjasOne);
// echo '<br>';

// $ninjasTwo = array('bowser'=>'blue', 'twinkle'=>'white');
// print_r($ninjasTwo);
// echo '<br>';

// //you can also use this method to overwrite instead of add
// $ninjasTwo['toad']='pink';
// print_r($ninjasTwo);
// echo '<br>';

// echo count($ninjasTwo);


//multi dimensional arrays
// $blogs = [
// //['blog name', 'author', 'content', 30],
// ['mario party', 'mario', 'updates', 30],
// ['mario kart cheats', 'toad', 'workarounds', 5],
// ['girl stuff', 'pinky', 'invitation ideas', 230]
// ];
// print_r($blogs);
// echo '<br>';
// print_r($blogs[1][1]);
// echo '<br>';

//what makes more sense is associative arrays
// $blogs = [
  //['blog name', 'author', 'content', 30],
  // ['name' => 'mario party', 'author' => 'mario', 'content' =>'updates', 'likes' => 30],
  // ['name' => 'mario kart cheats', 'author' => 'toad', 'content' =>'workarounds', 'likes' => 20],
  // ['name' => 'girl stuff', 'author' => 'peach', 'content' =>'invitations', 'likes' => 140],
  // ];
  // // print_r($blogs);
  // // echo '<br>';
  // print_r($blogs[1]['author']);
  // echo '<br>';
  // echo count($blogs);
  // echo '<br>';
  // //add to array
  
  // $blogs[] = ['name' => 'cat stuff', 'author' => 'lexie', 'content' =>'catnip', 'likes' => 6];

  // print_r($blogs);
  // echo '<br>';
  // echo count($blogs);
  // echo '<br>';

  // //delete from array
  // $popped = array_pop($blogs);
  // print_r($popped); //the value of popped variable is the array it deleted
  // echo '<br>';

  // echo count($blogs);
  // echo '<br>';

  //loops
//   $ninjas = ['shaun', 'sam', 'joe'];

//   // for ($i = 0; $i < count($ninjas); $i++){
//   //   echo $ninjas[$i] . '<br />';
//   // }

// //another EASIER method
// foreach($ninjas as $ninja){
//   echo $ninja . '<br />';
// }
// $price = 10;

// if ($price > 50){
//   echo 'condition met';
// } elseif ($price < 20) {
//   echo 'elseif condition met';
// } else {
//   echo 'condition not met';
// }
//combo indexed and associative arrays
$products = [
  ['name' => 'shiny star', 'price' => 20],
  ['name' => 'bouncy ball', 'price' => 10],
  ['name' => 'pokemon', 'price' => 60],
  ['name' => 'shiny pokemon', 'price' => 120],
  ['name' => 'flower', 'price' => 25],
  ['name' => 'pickle mustache', 'price' => 100],
];

//other conditions include || which is or
foreach($products as $product){
  if ($product['price'] < 30){
    echo $product['name'] . ' is a good buy' . '<br />';
  } elseif ($product['price'] > 30){
    echo $product['name'] . ' is too damn high!' . '<br />';
  }
}


// foreach($products as $product){
//   echo $product['name'] . ' - ' . $product['price'];
//   echo '<br />';
// }

//while loop

// $i = 0;

// while($i < count ($products)){
//   echo $products[$i]['name'];
//   echo '<br />';
//   $i++;
// }

//booleans
// echo true;
// echo '<br />';
// echo false;

// echo 5 < 10;
// echo '<br />';
// echo 5 > 10;
// echo '<br />';
// // == means equal - a single one doesn't
// echo 5 == 10;
// echo '<br />';
// echo 10 == 10;
// echo '<br />';
// echo 5 != 10;

//loose == and strict === comparison
// echo 5 == '5'; //these return true or 1
// echo '<br />';
// echo 5 === '5';//these return false or empty because theyre strictly not same

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
<h1>Products</h1>
<ul>
<?php foreach($products as $product){ ?>
<h3><?php echo $product['name']; ?></h3>
<p>$<?php echo $product['price']; ?></p>

<?php } ?>
</ul>

<div>
<ul>
<?php foreach ($products as $product){ ?>
<?php if($product['price'] >= 60) { ?>
<li><?php echo $product['name']; ?></li>

<?php } ?>
<?php } ?>
</ul>

</div>
<h1>Welcome to My First PHP App</h1>
<p>Now that this page has a <a href="https://github.com/green64/php_project" target="_blank">Github repo</a> and a <a href="https://agile-wildwood-45625.herokuapp.com/" target="_blank">Heroku app</a> to take advantage of its 
MariaDB (what a great tool XAMPP has turned out to be!), I'm back to building my first PHP app.</p> 

<p>I've already learned about PHP differences, such as needing a composer.json file instead of a package.json to successfully 
host the app in Heroku. I've also discovered similarities, such as familiar operators, arrays, variables, and more. I'm excited that I'm able to transition to PHP
fairly easily, thanks to my existing full-stack knowledge. And even more excited to see what's next.</p>

<p>Watch this space for something great!</p></div>

  
</body>
</html>


