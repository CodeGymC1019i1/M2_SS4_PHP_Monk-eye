<?php
$index = (int)$_GET['index'];
//var_dump($index);
//die();
$listStudent = file_get_contents('../data.json');
$listStudent = json_decode($listStudent,true);

$listStudent[$index] = [
  "name" => $_GET["name"],
  "age" => $_GET["age"],
  "address" => $_GET["address"],
  "group" => $_GET["group"]
];
$newListStudent = json_encode($listStudent);
file_put_contents('../data.json',$newListStudent);
header("Location:../index.php");
?>