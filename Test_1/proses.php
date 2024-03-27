<?php
 $input = $_REQUEST['input'];
 $bil;
 echo "Outputnya: ";
  for ($bil=0; $bil < $input; $bil++) { 
     if ($hasil= $bil*($bil+1)/2+1) {

        echo $hasil."-";
     }
  }
  ?>
  <br><br>
  <a href="index.php"><button>BACK</button></a>
  <?php

?>