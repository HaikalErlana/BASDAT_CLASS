<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
        <center> <h3>Halaman Admin</h3> </center>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }

        include '../koneksi-db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");

        // Jumlahkan data yang ada di table
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);

        ?>

        <!-- END -->
        <br>
        <center> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4> </center>

        <body class="bg-info bg-opacity-25">
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>BUKU YANG TERSEDIA GAIS!!</h2></marquee>
            </div>
            <div class="card-body">
                <marquee direction="left"><h3>Total Buku Tersedia : <?php echo $jumlah_buku; ?></h3></marquee>
                <h5>Total Semua Harga Buku: <?php
                $db = mysqli_query($koneksi, "SELECT * FROM buku;");
                while($r = mysqli_fetch_array($db)){
                $h[] = $r['harga'];
                }
                $totalHarga = array_sum($h);
                echo "Rp. " . number_format($totalHarga) . " ,-";
                ?></h5>
            <!-- menampilkan data buku -->
        <a href="add.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">TAMBAH DATA</a>
        <a href="../logout.php" class="btn btn-primary" aria-current="page" style="margin-bottom:10px">LOGOUT</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul buku</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <!-- MENAMPILKAN DATA ANGGOTA -->
        <?php 
        include '../koneksi-db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "<td>".$harga = $row['harga']."</td>";

            ?>
            <td> 
            <a href="update.php?id_buku=<?php echo $row ['id_buku']; ?>"class="btn btn-sm btn-info">EDIT</a>  
            <a href="proses-delete.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-sm btn-danger">HAPUS</a>  
            </td>   
            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
        </div>
        </div>
        </div>

        
        <!-- TABEL ANGGOTA -->
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <marquee direction="right"><h2>ANGGOTA YANG TERSEDIA GAIS!!</h2></marquee>
            </div>
        <div class="card-body">
                <marquee><h3>Total Anggota Tersedia : <?php echo $jumlah_anggota; ?></h3></marquee>
            <!-- menampilkan data buku -->
        <a href="add_anggota.php" class="btn btn-info" style="margin-bottom: 10px">TAMBAH ANGGOTA</a>
        <!-- <a href="../logout.php" class="btn btn-primary" aria-current="page" style="margin-bottom:10px">LOGOUT</a> -->
        <table class="table table-bordered" id="myTable">
        
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>No.Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <!-- menampilkan data anggota -->
        <?php 
        include '../koneksi-db.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $rows){
            echo "<tr>";
            echo "<td>". $rows['id_anggota']."</td>";
            echo "<td>". $rows['nama']."</td>";
            echo "<td>". $rows['no_telp']."</td>";
            echo "<td>". $rows['alamat']."</td>";
            echo "<td>". $rows['email']."</td>";
            echo "<td>". $rows['password']."</td>";
            ?>
            
            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
        </div>
        </div>
        </div>
        </body>
</html>