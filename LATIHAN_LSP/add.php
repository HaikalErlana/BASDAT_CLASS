<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <div class="table">
            <h2>Selamat Datang di BUKU STORE</h2>
            <h1>Data Buku</h1>
            <button><a href="proses-tambah.php">Tambah Buku</a></button>
            <br>
            <br>
            <table bord<html>
        <title>Show Data</title>
        <div class="container">
            <center>
            <h1>Tambahkan Data</h1>

            <form action="proses-tambah.php" method="post">
            <label>Katalog</label>
            <input type="number" name="id_katalog">
            <br>
            <label>Judul</label>
            <input type="text" name="judul_buku">
            <br>
            <label>Pengarang</label>
            <input type="text" name="pengarang">
            <br>
            <label>Tahun Terbit</label>
            <input type="date" name="thn_terbit">
            <br>
            <label>Penerbit</label>
            <input type="text" name="penerbit">
            <br>
            <input type="submit" value="submit">
            <br>
            <input type="reset" value="cancel">
            </form>
            </center>
        </div>  
    </body>
</html>