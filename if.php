<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else elseif</title>
</head>
<body>
    <form action="" method="get">
        Nilai : <input type="number" name="nilai"/>
        <input type="submit" value="proses"/>
    </form>
    <?php
    $nilai = $_GET['nilai'];
    if($nilai >100){
        echo "Data anda tidak valid";
    }elseif($nilai >= 70){
        echo "Lulus ujian dengan baik";
    }elseif($nilai >= 60){
        echo "Lulus dengan cukup";
    }else{
        echo "Tidak Lulus ujian";
    }
    ?>
</body>
</html>