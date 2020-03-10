<?php
  # LOOPS - Execute code a set number of times
  /*
    - For
    - While
    - Do-while
    - Foreach
  */

  # For Loop
  # @params - init, condition, inc

  /*
  for($i = 0; $i < 10; ++$i){
    echo "Number " .$i ."<br>"; // Use ."<br>" to add new line
  }
  */

  # While
  # @params - condition

  /*
  $i = 0;
  while($i < 10){
    echo $i ."<br>";
    ++$i;
  }
  */

  # Do-while
  # @params - condition

  /*
  $i = 0;
  do{
      echo $i;
      echo '<br>';
      ++$i;
  }while($i < 10);
  */

  # Foreach - for arrays
  /*
  $people = array('Brad', 'Jose', 'William');
  foreach($people as $person){
    echo $person ."<br>";
  }
  */

  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');
  
  foreach($people as $person => $email){
    echo $person .": ",$email ."<br>";
  }

?>