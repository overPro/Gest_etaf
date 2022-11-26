<?php 
session_start();

if(isset($_GET['id'])){
$_SESSION['post']=$_GET['id'];
}
if(isset($_GET['l'])){
    $cont=$_GET['l'];    
    require 'Controllers/'.$cont.'controller.php';
}
if (isset($_GET['c']) && isset($_GET['a'])) 
  {
    $controller = $_GET['c'];
    $action     = $_GET['a'];
  } 
   
$controller = new $controller;
$controller->$action();
?>