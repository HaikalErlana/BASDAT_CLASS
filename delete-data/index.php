<html>
    <head>
        <title>show data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
        <br>
            <h1>Menambahkan Data Buku</h1>
            <button><a href=""></a></button>
            <form action="proses.php" method="post">
                <label>Masukan ID Katalog :</label>
                <input type="text" name="judul_buku">
                <br>
                <label>Masukan Judul Buku :</label>
                <input type="text" name="judul_buku">
                <br>
                <label>Pengarang :</label>
                <input type="text" name="pengarang">
                <br>
                <label>Tahun Terbit :</label>
                <input type="date" name="thn_terbit">
                <br>
                <label>Penerbit :</label>
                <input type="text" name="penerbit">
                <br>
                <input type="submit" value="submit">
                <br>
                <input type="reset" value="cancel">
            </form>
        </br>

        <h1>Menampilkan Data Buku</h1>
        <table border="2">

            <tr>
            <th>Katalog</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
            <th>Tambah</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td><a href="proses.php?id_buku=<?php echo $row['id_buku']?>">HAPUS</td>
            <?php
            echo "</tr>";
            
        }
        ?>
        </table>
    </center>
    </body>
    </html>