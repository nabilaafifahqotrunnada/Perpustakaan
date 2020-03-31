<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Petugas</title>
</head>
<body>
    <div class="form">
    <img src="icon.png" class="avatar"><br>
        <span class="welcome"><h2>Halaman Login</h2></span>
        <form action="loginPetugas.php" method="post">
            <br><br>
            <br>
            <input class="input" type="text" name="username" placeholder="Username"><br>
            <input class="input" type="password" name="password" placeholder="Password"><br><br><br>
            <input class="submit" type="submit" name="login" value="Login"><br>
            <br><br>
            <a href="registerPetugas.php" class="">Belum Punya akun? Register </a>
        </form>
    </div>
</body>
</html>
