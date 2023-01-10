<html>
    <head>
        <title>Show Data</title>
    </head>
    <body>
        <div class="container">
            <center>
            <h1>Tambahkan Data</h1>

            <form action="proses-tambah.php" method="post">
            <label>Katalog</label>
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
            <table border="1">
        <tr>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php 
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "select * from buku");
        foreach ($anggota as $row){
            echo "<tr>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "</tr>";
        }
        ?>
    </body>
</html>x    <input type="number" name="id_katalog">
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

        </table>
        <center>
        <h1>Menampilkan Data Buku</h1>
        <table border="2">
        <tr>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php 
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "select * from buku");
        foreach ($anggota as $row){
            echo "<tr>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "</tr>";
        }
        ?>
        </center>
        </table>
    </body>
</html>