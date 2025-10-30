<?php
$people_json = file_get_contents('people.json');
$decoded_json = json_decode($people_json, false);
echo $decoded_json->name;
// Monty 
echo "<br>";
echo $decoded_json->email;
// monty@something.com 
echo "<br>";
echo $decoded_json->age;
// 77 
?>