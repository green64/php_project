<?php

   // this is a constant that can't be overridden. note ALL CAPS
   define('NAME', 'Yoshi');

   $stringOne = "my email is ";
   $stringTwo = "samanthamccall@gmail.com";

   echo $stringOne.$stringTwo;

   $name = 'Yoshi';

   // \ is an escape character
   echo "Hey my name is $name and I say \"hooray\"";


  $age = 30;

  // echo $name;
  echo $name[0];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My first PHP file</title>
</head>
<body>
  <h1>User Profile Page</h1>
  <div><?php echo NAME; ?></div>
  <div><?php echo $age; ?></div>

</body>
</html>