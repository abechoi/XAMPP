<?php

    setcookie('username', 'Jong-Hae', time()+(86400 * 30));

    // unset user by subtracting an hour on the expiration time.
    setcookie('username', 'Jong-Hae', time()-3600);

    if(count($_COOKIE) > 0){ // If cookies > 0, cookies is set
        echo count($_COOKIE).' cookie(s) are set.<br>';
    }
    else{
        echo 'There are no cookies.<br>';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '.$_COOKIE['username'].' is set.<br>';
    }
    else{
        echo 'User is not set.';
    }



?>