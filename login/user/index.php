<html>
    <head>
        <title>Anggota Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
        <center> <h3>Halaman Anggota</h3> </center>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <br>
        <center><h4>Selamat Datang <?php
        include '../koneksi-db.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi,"SELECT * FROM anggota where email = '$email'");
        foreach($anggota as $nama){
            echo $nama ['nama'];
        }
        ?> anda telah Login</h4></center>
        <!-- END -->    

        <body class="bg-info bg-opacity-25">
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>BUKU YANG TERSEDIA</h2></marquee>
            </div>
            <div class="card-body">
            <!-- menampilkan data buku -->
            <a href="../logout.php" class="btn btn-primary" aria-current="page" style="margin-bottom:10px">LOGOUT</a>
            <a href="update-anggota.php?id_anggota=<?php echo $nama['id_anggota'] ?>" class="btn btn-md btn-warning" style="margin-bottom: 10px">Customize</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Aksi</th>
        </tr>

        <!-- menampilkan data buku -->
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
            ?>

            <td>
                <a href="keranjang.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">ADD TO CART</a>
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

        </body>
</html>