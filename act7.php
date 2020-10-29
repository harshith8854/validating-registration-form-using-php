<?php
$un=test_input($_POST['un']);
$em=test_input($_POST['em']);
$pa=test_input($_POST['pa']);
$co=test_input($_POST['co']);
$di=test_input($_POST['di']);
$na=test_input($_POST['na']);
$ni=test_input($_POST['ni']);
$we=test_input($_POST['we']);
$bi=test_input($_POST['bi']);
$ja=test_input($_POST['ja']);
$ao=test_input($_POST['ao']);
$ya=test_input($_POST['ya']);
//$=$_POST[''];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!preg_match("/^[a-zA-Z-' ]*$/",$na)) {
      echo "Only letters and white space allowed<br>";
}
if (!preg_match("/^[a-zA-Z-' ]*$/",$ni)) {
      echo "Only letters and white space allowed<br>";
}

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$we)) {
        echo "Invalid URL<br>";
}
if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format<br>";
}
if (!preg_match("/^[a-zA-Z0-9]+.[a-zA-Z]+.[a-zA-z]+$/",$ja)) {
      echo "invalid JID<br>";
}
if (!preg_match("/^[a-zA-Z0-9]+.[a-zA-Z]+.[a-zA-z]+$/",$ao)) {
      echo "invalid AOL IM<br>";
}
if (!preg_match("/^[a-zA-Z0-9]+.[a-zA-Z]+.[a-zA-z]+$/",$ya)) {
      echo "invalid Yahoo IM<br>";
}
if($pa!=$co){
  echo "passwords doesn't match<br>";
}
if(!preg_match("/[-a-z0-9+&@#\/%?=~_|!:,.;]{6,}/",$pa)){
  echo "password should consist 6 characters<br>";
}
if(empty($bi)){
  echo "bio should not be empty";
}

 ?>
