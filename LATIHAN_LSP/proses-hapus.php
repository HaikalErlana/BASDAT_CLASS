<html>
    <head>
        <title>Tambah Data Buku</title>
    </head>
    <body>
        <h1>Menambahkan Data Buku</h1>
        <form action="proses-tambah.php" method="post">
            <label>Masukan ID Katalog</label>
            <input type="number" name="id_katalog">
            <br>
            <label>Masukan Judul Buku</label>
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
    </body>
</html>