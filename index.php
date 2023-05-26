<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="">Mapel 1</label>
        <input type="text" name = "pel1">
        <br>
        <label for="">Mapel 2</label>
        <input type="text" name = "pel2">
        <br>
        <label for="">Mapel 3</label>
        <input type="text" name = "pel3">
        <br>
        <label for="">Mapel 4</label>
        <input type="text" name = "pel4">
        <br>
        <label for="">Mapel 5</label>
        <input type="text" name = "pel5">
        <br>
        <label for="">Mapel 6</label>
        <input type="text" name = "pel6">
        <br>

        <button type="submit" name ="submit">Submit</button>
    </form>

</body>
</html>

<?php
 if(isset($_POST["submit"])){

    $map1 = $_POST["pel1"];
    $map2 = $_POST["pel2"];
    $map3 = $_POST["pel3"];
    $map4 = $_POST["pel4"];
    $map5 = $_POST["pel5"];
    $map6 = $_POST["pel6"];

    // Mencari Jumlah
    $total = $map1 + $map2 + $map3 + $map4 + $map5 + $map6;

    echo "jumlah total adalah : ".$total ."<br>"; 

    // Mencari Rata-Rata
    $rata2 = $total / 6;
    
    echo "Rata Rata nya adalah : ".$rata2 ."<br>";

    // Max min
    $max = max($map1, $map2,$map3,$map4,$map5,$map6);
    $min = min($map1, $map2,$map3,$map4,$map5,$map6);

    echo "Nilai Maksimalnya adalah : ".$max ."<br>";
    echo "Nilai Minimalnya adalah : ".$min ."<br>";

    // Menentukan Grade
    if ($rata2 >= 90) {
        echo  'Anda mendapat grade penilaian A';
    } else if ($rata2 >= 80) {
        echo 'Anda mendapat grade penilaian B';
    } else if ($rata2 >= 70) {
        echo 'Anda mendapat grade penilaian C';
    } else if ($rata2 >= 60) {
        echo 'Anda mendapat grade penilaian D';
    } else {
        echo 'Anda mendapat grade penilaian E';
    }

 }

