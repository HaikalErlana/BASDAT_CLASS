<html>

<head>
    <title>Update Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> 
</head>

<body>
    <h1>Customize Profile</h1>

    <?php
    include '../koneksi-db.php';
    // Ambil dari Tombol Customize
    $id_anggota = $_GET['id_anggota'];
    // Arahkan ke id_anggota 
    $data = mysqli_query($koneksi,"select * from anggota where id_anggota = '$id_anggota'");
    // Data yang sudah di cocokan dengan id_anggota , di MELEDAK menggunakan fetch array sehingga bisa di taruh satu satu di formnya
    while($meledak = mysqli_fetch_array($data)){
    ?>

    <form action="proses-update.php" method="post">
        <!-- ID ANGGOTA -->
        <input type="hidden" name="id_anggota" value="<?php echo $meledak['id_anggota']; ?>">
        <!-- ID ANGGOTA -->

        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $meledak['nama']; ?>">
        <br>
        <label>No Telepon</label>
        <input type="text" name="no_telp" value="<?php echo $meledak['no_telp']; ?>">
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?php echo $meledak['alamat']; ?>">
        <br>
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $meledak['email']; ?>" disabled>
        <br>
    
        <label>Password</label>
        <input type="text" name="pass" value="<?php echo $meledak['password']; ?>" disabled>

        <br>
        <input class="submit" type="submit" value="submit">
        <br>
        <a href="index.php">Kembali Ke Halaman User</a>
    </form>
    <?php 
    }
    ?>
</body>
</html>