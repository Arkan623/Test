<?php
session_start();

if(isset($_POST['adds'])){
$jumlahgs=$_REQUEST['banyakgi'];
$_SESSION['banyakgi']=$jumlahgs;
header("Location:index.php");
}
elseif(isset($_POST['add'])){
    $jumlahps=$_REQUEST['banyak'];
    $_SESSION['banyak']=$jumlahps;
    header("Location:index.php");
    }


if(isset($_POST['proses'])){

         $satu=$_POST['nilai'];
         $dua=$_POST['nilai'];
         $tiga=$_POST['nilai'];
         $empat=$_POST['nilai'];
         $lima=$_POST['nilai'];
         $enam=$_POST['nilai'];
         $tujuh=$_POST['nilai'];
         $delapan=$_POST['nilai'];

        
         $angka=array($satu,$dua,$tiga,$empat,$lima,$enam,$tujuh,$delapan); 	

   
         sort($angka);  
         echo "</br>";
         echo "HASIL : ";
         
         //menampilkan isi array angka dengan looping for
         $jumlah=8;  
           
          for($x=0;$x<$jumlah;$x++) {
          
             echo $angka[$x];  
             echo " ";  
         }	
         echo "</div>";

     }else{
          echo "error";
     }
     ?> 