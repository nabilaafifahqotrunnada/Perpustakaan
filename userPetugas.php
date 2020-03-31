<?php
include('config.php');
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: indexPetugas.php?access_denied");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Page</title>
    <style>
    .a{
            margin-top: 20px;
            color: #000839;
            font-size: 70pt;
            font-weight: bold;
            text-align: center;
            font-family: courier;
        }
        .b{
            color: #42240c;
            font-size: 15pt;
            font-weight: bold;
            text-align: center;
            font-family: verdana;
        }
        .c{
            color: #fe346e;
            font-size: 20pt;
            font-weight: bold;
            text-align: center;
            align: center;
            font-family: courier;
        }
        .d{
          background-color: #d1f5d3;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class = "a">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#" style="color:white; font-family:blockletter;">
            Admin
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="t_buku/tampil_buku.php" style="color:white">Book</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="t_petugas/tampil_petugas.php" style="color:white">profile</a>
                </li>

            </ul>
            <li class="nav-item active">
                <a class="nav-link" href="logoutPetugas.php" style="color:white">Logout</a>
            </li>
        </div>
    </nav>
    <h1 class="welcome">Selamat Datang, <?php echo $_SESSION ['username'];?></h1>
    <p style="font-family:arial black;">Anda adalah Admin!</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-danger" style="width: 18rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Buku</h5>
                        <p class="card-text" style="font-size:60px" align="center">
                            <?php

                          $table ="t_buku";
                          $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table");
                          $result = mysqli_fetch_array($sql);
                          echo $result['jumlah'];
                        ?>
                        </p>
                        <a href="t_buku/tampil_buku.php" class="text-white">lebih detail <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning" style="width: 18rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Petugas</h5>
                        <p class="card-text" style="font-size:60px" align="center">
                        <?php

                            $table ="t_petugas";
                            $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table");
                            $result = mysqli_fetch_array($sql);
                            echo $result['jumlah'];
                          ?>

                      </p>
                        <a href="t_petugas/tampil_petugas.php" class="text-white">lebih detail <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
