<?php
  if(isset($_GET['name'])){  // GET is less secure because it shows the data on the url
      //print_r($_GET);
      $name = htmlentities($_GET['name']); // htmlentities prevents hackers from inputting html tags
      echo $name;
  }
  if(isset($_POST['name'])){ // POST is best for security
    //print_r($_POST);
    //$name = htmlentities($_POST['name']);
    //echo $name;
  }
  if(isset($_REQUEST['name'])){ // REQUEST is an alternvative method
    //print_r($_REQUEST);
    //$name = htmlentities($_REQUEST['name']);
    //echo $name;
  }
  //echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<body>
  <form method="GET" action="get_post.php"> <!-- Change method to GET or POST -->
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    <div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Abe">Abe</a>
    </li>
    <li>
      <a href="get_post.php?name=Choi">Choi</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>