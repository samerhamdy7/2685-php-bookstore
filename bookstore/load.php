<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = '2685_php_posts';


function dd($item) {
    echo "<pre>";
  var_dump($item);
  echo "</pre>";
}

$db = new mysqli(hostname:$host , username:$user , password: $password , database:$database);
