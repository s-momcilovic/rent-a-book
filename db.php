<?php 

$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'my_book');

function escape($string) {        // ovom funkcijom cistimo upit u bazi
  global $con;
  return mysqli_escape_string($con, $string);
}

function query($query) {          // funcija za upit ka bazi
  global $con;
  return mysqli_query($con, $query);
}

function confirm($result){
  global $con;
  if(!$result){
    die("QUERY FAILED" . mysqli_error($con));
  }
}


?>  

