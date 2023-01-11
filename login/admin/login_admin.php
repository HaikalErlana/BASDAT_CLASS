<html>
    <head>
        <title>Login Bro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="bg-info bg-opacity-25">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                    <div class="col-md-10 mx-auto rounded shadow bg-white">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="m-5 text-center">
                                    <h1>Login Admin</h1>
                                </div>
                                <form class="m-5" action="proses_admin.php" method="post">
                                    <table>
                                            <div class="mb-3">
                                                <label class="form-label">Admin : </label>
                                                <input class="form-control" type="text" name="admin" id="admin">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password : </label>                                      
                                                <input class="form-control" type="password" name="pass" id="pass">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                                    <label class="form-check-label" for="remember-me">Remember Me</label>
                                                </div>
                                            </div>
                                            <div>
                                                <input type="submit" class="form-control btn btn-primary mt-2" value="Login">
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <td>User Klik? <a href="../user/login.php">Here</a></td>
                                                </div>
                                            </div>
                                    </table>
                                </form>
                                </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="fototo.png" alt="login" class="img-fluid p-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </body>
</html>