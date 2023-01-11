<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register Data Anggota</h1>
    <form action="../admin/proses-tambah-anggota.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <br>        
        <label>No Telp</label>
        <input type="number" name="no_telp">
        <br>        
        <label>Alamat</label>
        <input type="text" name="alamat">
        <br>        
        <label>Email</label>
        <input type="text" name="email">
        <br>        
        <label>Password</label>
        <input type="text" name="password">
        <br>        
        <input class="submit" type="submit" value="submit">
        <input class="cancel" type="reset" value="cancel">
    </form>
</body>

</html>