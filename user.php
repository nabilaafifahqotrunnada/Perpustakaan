<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: index.php?access_denied");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <style>
    .welcome{
        color: #ff2e63;
        font-size: 35pt;
        font-weight: 900;
        font-family: Courier;
        margin-top: 15px;
    }
    .bg{
        background: #ffffdd;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class = "bg">
<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #010A43;">
  <a class="navbar-brand" href="#">Beranda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"> Home </a>
      <a class="nav-item nav-link" href="buku/tampil_buku.php"> Book </a>
      <a class="nav-item nav-link" href="#"> Profile </a>
    </div>
    <form class = "form-inline ml-auto">
        <div class = "navbar-nav">
        <a href = "logout.php" class = "nav-item nav-link active"> Logout </a>
        </div>
    </form>
  </div>
</nav>
    <h1 class = "welcome" align = "center"> Selamat Datang, <?php echo $_SESSION['email'];?> </h1>
</body>
</html>
