<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Anggota</title>
</head>
<body>
    <div class="form">
    <img src="login.png" class="avatar"><br>
        <span class="welcome"><h2>Halaman Login</h2></span>
        <form action="loginAnggota.php" method="post">
            <br><br>
            <input class="input" type="text" name="username" placeholder="Username"><br>
            <input class="input" type="password" name="password" placeholder="Password"><br><br>
            <input class="submit" type="submit" name="login" value="Login"><br>
            <br><br>
            <a href="registerAnggota.php" class=""> Daftar </a>
        </form>
    </div>
</body>
</html>
