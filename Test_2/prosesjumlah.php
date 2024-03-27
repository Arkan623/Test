<?php
session_start();
if(!isset($_POST['adds'])){
    $jumlahps=$_REQUEST['banyak'];
    $_SESSION['banyak']=$jumlahps;}
    
    header("Location:index.php");
?>