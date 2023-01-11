<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="page">
            <div class="container">
                <div class="content-left">
                    <div class="login">Login</div>
                        <div class="text">Selamat Datang di Masuk Sebagai Anggota, Jangan Lupa Untuk Masukan Email dan Password Kamu Ya. Agar Kamu Bisa Masuk Sebagai Anggota.</div>
                        </div>
                        <!-- Catatan Ini Batasnya ya terpisah oki!! -->
                        
                        <!-- Start dari sini ya ingat! -->
                        <!-- Ingat ini hanya percobaan saja jadi kamu test ya! -->
                        <!-- Kita mulai ya! -->
                        <div class="content-right">
                            <div class="form">
                                <form action="proses.php" method="post">
                                    <label for="email" class="form-control1">Email</label>
                                    <input class="form-control" autocomplete="off" type="email" name="email" id="email">
                                    <label for="password" id="password" class="form-control1">Password</label>
                                    <input class="form-control" type="password" name="pass" id="pass">
                                    <br>
                                    <button type="submit" id="submit" class="submit">Login</button>
                                    <p>Admin Klik?
                                    <a href="../admin/login_admin.php">Here</a></p> 
                                </form>
                                <tr>
                                    <td>
                                        <h4>Anda belum punya akun ? Daftar <a href="daftar.php">Disini</a></h4>
                                    </td>
                                </tr>
                            </div>    
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>