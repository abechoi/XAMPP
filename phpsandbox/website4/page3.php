<?php

    session_start();

    //$_SESSION['name'] = 'Abe Choi';
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Unsubscribed';

    print_r($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP SESSIONS</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
</body>
</html>