<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <label for="">Nama</label><br>
        <input type="text" name = "nama">
        <br>
        <label for="">NIS</label><br>
        <input type="text" name = "nis">
        <br>
        <label for="">Produktif</label><br>
        <input type="text" name = "prod">
        <br>
        <label for="">Matematika</label><br>
        <input type="text" name = "mtk">
        <br>
        <label for="">Bahasa Inggris</label><br>
        <input type="text" name = "ing">
        <br>
        <label for="">Bahasa Sunda</label><br>
        <input type="text" name = "sund">
        <br>
        <label for="">PIPAS</label><br>
        <input type="text" name = "pipas">
        <br>
        <label for="">PJOK</label><br>
        <input type="text" name = "pjok">
        <br>

        <button type="submit" name ="submit">Submit</button>
    </form>

</body>
</html>

<?php
 if(isset($_POST["submit"])){

    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $map1 = $_POST["prod"];
    $map2 = $_POST["mtk"];
    $map3 = $_POST["ing"];
    $map4 = $_POST["sund"];
    $map5 = $_POST["pipas"];
    $map6 = $_POST["pjok"];

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

    echo "<br>";

    ?>
    <H3>Data</H3>
    <table border = "5" cellpadding = "20">
        <th>Nama</th>
        <th>NIS</th>
        <th>Produktif</th>
        <th>Matematika</th>
        <th>Inggris</th>
        <th>Sunda</th>
        <th>Pipas</th>
        <th>PJOK</th>
        <th>Rata-Rata</th>

        <?php
    
    $server = mysqli_connect("localhost","root","","db_nilaimapel");

    $sql = "insert into tb_data(nama,nis,produktif,mtk,inggris,sunda,pipas,pjok,rata2) 
    values ('$nama','$nis','$map1','$map2','$map3','$map4','$map5','$map6','$rata2')";

    $query = mysqli_query($server, $sql);
    if($query){
        $sql2 = "SELECT * FROM tb_data";
        $hub = mysqli_query($server, $sql2);
        if(mysqli_num_rows($hub) > 0) {
            while($tampil = mysqli_fetch_assoc($hub)) { 
        ?>
            <tr>
                <td><?php echo $tampil["nama"];?></td>
                <td><?php echo $tampil["nis"];?></td>
                <td><?php echo $tampil["produktif"];?></td>
                <td><?php echo $tampil["mtk"];?></td>
                <td><?php echo $tampil["inggris"];?></td>
                <td><?php echo $tampil["sunda"];?></td>
                <td><?php echo $tampil["pipas"];?></td>
                <td><?php echo $tampil["pjok"];?></td>
                <td><?php echo $tampil["rata2"];?></td>
                
            </tr>
<?php
 }
}

}
 }



