<?php
  # Conditionals
  /*
    ==
    ===
    <
    >
    <=
    =>
    !=
    !==
  */

  /*
  $num = 5;

  if($num != 5){
      echo '5 passed';
  }
  else{
      echo '5 failed';
  }
  */

  $num = 6;

  /*
  if($num > 5){
    if($num < 10){
        echo 'num passed';
    }
  }
  */

  /*
    Logical Operators

    AND &&
    OR ||
    XOR
  */

  /*
  if($num > 4 && $num < 10){
    echo 'num passed';
  }
  */

  # Switch

  $favColor = 'red';
  switch($favColor){
    case 'red':
        echo 'Your favorite color is red';
    break;
    case 'blue':
        echo 'Your favorite color is blue';
    break;
    case 'green':
        echo 'Your favorite color is green';
    break;
    default:
        echo 'Your favorite color is something else';
  }
?>