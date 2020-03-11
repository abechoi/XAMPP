<?php
    $path = 'dir0/dir1/myfile.php';
    $file = 'file1.txt';

    # basename() - return filename
    // echo basename($path); // myfile.php

    # Return filename without extension
    // echo basename($path, '.php'); // myfile

    # dirname() - return directory of path
    // echo dirname($path); // dir0/dir1

    # file_exists() - returns boolean if file exists  [WORKS FOR FOLDERS]
    // echo file_exists($file); // 1 (true)

    # realpath() - get absolute path
    // echo realpath($file); /// opt/lampp/htdocs/phpsandbox/website7/file1.txt

    # is_file() - checks to see if arg is a file  [DOES NOT WORK FOR FOLDERS]
    // echo is_file($file);

    #  is_writable() - check if file is writable
    // echo is_writable($file);

    #  is_readable() - check if file is readable
    // echo is_readable($file);

    # filesize() - get file size
    //echo filesize($file); // 11 bytes

    # mkdir() - create a directory
    // mkdir('testing');

    # rmdir() - remove an empty directory
    // rmdir('testing');

    # copy() - copy file
    // echo copy('file1.txt', 'file2,txt');

    # rename() - rename a file
    // rename('file2.txt', 'myfile.txt');

    # unlink() - delete a file
    //unlink('myfile.txt');

    # file_get_contents() - write from file to string
    // echo file_get_contents($file); // Hello World

    # file_put_contents() - write string to file
    // echo file_put_contents($file, "Hello World"); // 13 bytes | Replaces Hello World with Goodbye World

    // Append Goodbye World instead of replacing
    // $current = file_get_contents($file); // Get the string in $file
    // $current .= ' Goodbye World'; // Append Goodbye World to the string
    // file_put_contents($file, $current); // Put $current into $file

    # fopen() | fread() - open file for reading
    // $handle = fopen($file, 'r'); // r for reading
    // $data = fread($handle, filesize($file));
    // echo $data;
    // fclose($handle);

    # fopen() | fwrite() - open file for readingopen file for writing
    $handle = fopen('file2.txt', 'w'); // Create new file named file2.txt
    $txt = "Choi Jong-Hae\n";
    fwrite($handle, $txt);
    fclose($handle);