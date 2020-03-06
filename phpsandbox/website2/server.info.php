<?php

  # $_SERVER SUPERGLOBAL

  // Create server array
  $server = [
      'Host Server Name' => $_SERVER['SERVER_NAME'], // localhost
      'Host Header' => $_SERVER['HTTP_HOST'],  // localhost:8080
      'Server Software' => $_SERVER['SERVER_SOFTWARE'], // Apache/2.4.41 (Unix) OpenSSL/1.1.1d PHP/7.4.2 mod_perl/2.0.8-dev Perl/v5.16.3
      'Document Root' => $_SERVER['DOCUMENT_ROOT'], // /opt/lampp/htdocs
      'Current Page' => $_SERVER['PHP_SELF'], // /phpsandbox/website2/server.info.php
      'Script Name' => $_SERVER['SCRIPT_NAME'], // /phpsandbox/website2/server.info.php
      'Absolute Path' => $_SERVER['SCRIPT_FILENAME'] // /opt/lampp/htdocs/phpsandbox/website2/server.info.php
  ];

  //print_r($server);

  // Create client array
  $client = [
      'Client System Info' => $_SERVER['HTTP_USER_AGENT'], // Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36 )
      'Client IP' => $_SERVER['REMOTE_ADDR'], //127.0.0.1
      'Remote Port' => $_SERVER['REMOTE_PORT'], // 53800
  ];

  //print_r($client);


?>