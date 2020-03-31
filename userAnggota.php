<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: indexAnggota.php?access_denied");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Page</title>
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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class = "d">
<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #000; font-family: verdana">  <a class="navbar-brand" href="#" style="color:white; font-family:blockletter;">TelkomLibrary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" >
        <a class="nav-link" href="#"style="color:white">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="t_buku/tampil_buku_anggota.php" style="color:white">Book</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="t_anggota/tampil_anggota.php" style="color:white">profile</a>
      </li>
    </ul>
    <li class="nav-item active">
        <a class="nav-link" href="logoutAnggota.php" style="color:#fff">Logout</a>
      </li>
  </div>
</nav>
    <h1 class="a">Welcome Back,  <?php echo $_SESSION ['username'];?></h1>
    <p>
    <h4 class = "b">Today is a great day to read :)</h4>
    <h3 class = "c">“Books are the ultimate Dumpees: put them down and they’ll wait for you forever</h3>
    <h3 class = "c">pay attention to them and they always love you back."</h3>
    <h3 class = "c">-John Green</h3>
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
