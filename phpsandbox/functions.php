<?php
  # Functions - Block of code that can be repeatedly called

  /*
    - Camelcase: myFunction()
    - Lowercase: my_function()
    - Pascalcase - MyFunction()
  */

  // Create a simple function
  function simpleFunction(){
      echo 'Hello World';
  }

  // Run a simple function
  //simpleFunction();

  // Function with param
  function sayHello($name = 'World'){ // "World" is the default
      echo "Hello $name<br>";
  }

  //sayHello();
  //sayHello("Abe");

  // Return value
  function addNumbers($num1, $num2){
    return $num1 + $num2;
  }

  //echo addNumbers(2,3);

  // Pass args by reference
  $myNum = 10;

  function addFive($num){
    $num += 5;
  }

  function addTen(&$num){ // Use & to mutate the original data
    $num += 10;
  }

  addFive($myNum);
  echo "Value: $myNum<br>"; // Still 10, does not mutate

  addTen($myNum);
  echo "Value: $myNum<br>"; // 20, mutates due to &

?>