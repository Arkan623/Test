<?php
session_start();
if(!isset($_POST['adds'])){
    $jumlahgs=$_REQUEST['banyakgi'];
    $_SESSION['banyakgi']=$jumlahgs;
}header("Location:index.php");
?>