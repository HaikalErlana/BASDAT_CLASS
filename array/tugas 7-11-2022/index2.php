<?php 

// Menggunakan Array Menggunakan For dan foreach
// for perulangan yang akan diulang sesuai set yang kita atur

// variabel angka memiliki nilai pertama = 0 dan diakhiri kurang atau sama dengan 10 , dihitung increament
// for ($angka = 0; $angka <= 10; $angka++){
//     echo "angkanya adalah : $angka <br>";
// }

// foreach = string , char
// foreach mengulang sesuai nilai yang mau diambil (key)
// $warna = array("merah","hijau","biru","kuning");

// foreach ($warna as $variasi ) {
//     echo "berwarna : $variasi <br>";
// }


// tugas menerapkan for atau foreach menggunakan PHP 
$days = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
?> 

<html>
    <head>
        <title>Latihan menggunakan for dan foreach</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
        for ($hari = 0; $hari < count($days); $hari++){
            ?>
        <div class="box">
            <?php echo $days[$hari];?>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <?php foreach($days as $hari_hari) {?>
            <div class="box2">
                <?php echo $hari_hari;?>
            </div>
        <?php } ?>
    </body>
</html>