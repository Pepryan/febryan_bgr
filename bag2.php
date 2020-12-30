<html>
    <body>
    <h1> Menghitung Uang Pecahan </h1>

    <form method = "post" action="bag2.php">
    Masukkan jumlah uang <input type= "text" name= "uang"><br><br>
    <input type= "submit" name="submit" value= "Submit">
    <input type= "reset" name="reset" value= "Reset"><br><br>
    </form>
    <?php
    echo"Uang anda sebesar". $_POST[uang]."<br>";
    $dataa = $_POST[uang] % 100000;
    $a = ($_POST[uang] - $dataa) / 100000;

    $datab = $dataa % 50000;
    $b = ($dataa - $datab) / 50000;

    $datac = $datab % 20000;
    $c = ($datab - $datac) / 20000;

    $datad = $datac % 10000;
    $d = ($datac - $datad) / 10000;

    $datae = $datad % 5000;
    $e = ($datad- $datae) / 5000;

    $dataf = $datae % 2000;
    $f = ($datae - $dataf) / 2000;
    
    $datag = $dataf % 1000;
    $g = ($dataf - $datag) / 1000;

    echo "100.000 : ".$a."<br>";
    echo "50.000 : ".$b."<br>";
    echo "20.000 : ".$c."<br>";
    echo "10.000 : ".$d."<br>";
    echo "5.000 : ".$e."<br>";
    echo "2.000 : ".$f."<br>";
    echo "1.000 : ".$g."<br>";

    ?>
    </body>
</html>