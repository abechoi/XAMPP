<?php
  # substr() - returns portion of string

  //$output = substr("Hello", 1, 3); // substr( String, begin, end);
  //echo $output; // ell

  # strlen() - returns length of string

  //$output = strlen("Hello");
  //echo $output;

  # strpos() - returns position of the first match
  //$output = strpos('Hello World', 'o');
  //echo $output;

  # strrpos() - returns position of the last match
  //$output = strrpos('Hello World', 'o');
  //echo $output;

  # trim() - strips white space - used typically for form input

  //$text = 'Hello World       ';
  //var_dump($text); // string(18)
  //var_dump(trim($text)); // string(11)

  # strtoupper() - uppercases string

  //$text = 'uppercase me';
  //echo strtoupper($text);

  # strtolower() - lowercases string

  //$text = 'LOWERCASE ME';
  //echo strtolower($text);

  # ucwords() - uppcase first letter of word

  //$output = ucwords('hello world');
  //echo $output;

  # str_replace() - replaces 1st arg with 2nd arg, 3 arg is the string to manipulate

  //$text = 'Hello World';
  //$output = str_replace('World', 'Everyone', $text);
  //echo $output;

  # is_string() - Checks variable for string - 1 for true, blank for false
   //$value = 1;
   //$output = is_string($value);
   //echo $output;

   /*
   $values = array(true, false, null, 'abc', 33, '33', '');
   foreach($values as $value){
      if(is_string($value)){
        echo "{$value} is a string.<br>";
      }
   }
   */

   # gzcompress() - compress a string
   # gzuncompress() - uncompress a compressed string
   $string = "ihdih  diq di oewf wehf ewof wiof weo fwheof whf owief iwe fpwe fepw g [tgoig gof hd iuhe diuhe duewh fowe fr ";
   $compress = gzcompress($string);
   echo $compress;

   $original = gzuncompress($compress);
   echo $original;
