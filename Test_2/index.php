<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_2</title>
    <style>
        input[type='text']{
            width: 40px;
        }
    </style>
</head>
<body>
<form action="prosesrank.php" method="post">
    <form action="prosesjumlah.php" >
    <label for="banyak">Input Numbers of Contestant: </label>    
    <input type="text" name="banyak" id="banyak" >
    <input type="submit" value="Add" name="add">
    
    <br><br>
    Score :
    <?php
    session_start();
    $nilai=1;
    $jumlah=$_SESSION['banyak'];
    for($x=0;$x<$jumlah;$x++){
    ?> 
    
    <input type="text" name="nilai[]" id="nilai">
    <?php
    }
    ?>
   
    <br><br>
    <form action="jumlahgits.php" >
    <label for="banyakgi">Input Numbers of GITS participant: </label>    
    <input type="text" name="banyakgi" id="banyakgi">
    <input type="submit" value="Adds" name="adds">
    
    <br><br>
    Score: 
    <?php
    $jumlahdua=$_SESSION['banyakgi'];
        for($m=0;$m<$jumlahdua;$m++){
        ?>   
    <input type="text" name="scoregits" id="scoregits">
    <?php
        }
        ?>
    <br><br>    
    <input type="submit" value="Proses" name="proses">
    
</form>
    
</body>
</html>