<?php
  // Single line comment
  #  Single line comment
  /*
     Multi-line comment
  */

  # Variable Rules
  /*
     - Prefix $
     - Start with letter or underscore
     - Letters, numbers, and underscores
     - Case sensitive
  */

  # Data Types
  /*
     - String
     - Integers 
     - Floats
     - Booleans
     - Arrays
     - Objects
     - NULL
     - Resource
  */

  $output = "Hello World";
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting = $string1 .' '. $string2 .'!'; // Hello World!
  $greeting2 = "$string1 $string2"; // Use doublequotes to concat strings

  $string3 = 'They\'re Here'; // Or use doublequotes once again

  $float1 = 4.4;
  $bool1 = true;

  define('GREETING', 'Hello Everyone'); // define('GREETING', 'Hello Everyone', true); <-- makes it non-case-sensitive

  echo GREETING;
?>