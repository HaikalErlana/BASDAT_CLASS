<html>

<head>
    <title>Update Data</title>
    <link rel="stylesheet">
</head>

<body>
    <h1>Update Data Buku</h1>

    <?php
    include '../koneksi-db.php';
    $id_buku = $_GET['id_buku'];
    $data = mysqli_query($koneksi,"select * from buku where id_buku = '$id_buku'");
    // Data yang sudah di cocokan dengan id_buku , di MELEDAK menggunakan fetch array sehingga bisa di taruh satu satu di formnya
    while($meledak = mysqli_fetch_array($data)){
    ?>

    <form class="tambah" action="proses-update.php" method="post">
        <!-- ID BUKU -->
        <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku']; ?>">
        <!-- ID BUKU -->
        <label>Masukan Id Katalog</label>
        <br>
        <input type="number" name="id_katalog" value="<?php echo $meledak['id_katalog']; ?>">
        <br>
        <label>Masukan Judul Buku</label>
        <br>
        <input type="text" name="judul_buku" value="<?php echo $meledak['judul_buku']; ?>">
        <br>
        <label>Masukan Pengarang</label>
        <br>
        <input type="text" name="pengarang" value="<?php echo $meledak['pengarang']; ?>">
        <br>
        <label>Masukan Tahun Terbit</label>
        <br>
        <input type="date" name="thn_terbit" value="<?php echo $meledak['thn_terbit']; ?>">
        <br>
        <label>Masukan Harga</label>
        <br>
        <input type="number" name="harga" value="<?php echo $meledak['harga']; ?>">
        <br>
        <label>Masukan Penerbit</label>
        <br>
        <input type="text" name="penerbit" value="<?php echo $meledak['penerbit']; ?>">
        <br>
        <br>
        <input class="submit" type="submit" value="submit">
        <input class="cancel" type="reset" value="cancel">
    </form>
    <?php 
    }
    ?>
</body>
</html>