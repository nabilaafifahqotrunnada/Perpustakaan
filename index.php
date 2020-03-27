<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content = "id-edge">
    <title>Login</title>
    <style>
    .form{
        margin: 10% 0 0 25%;
        float: left;
        width: 60%;
    }
    .input{
        padding: 1%;
        color: #777777;
        font-size: 14pt;
        float: left;
        width: 80%;
        margin-bottom: 1%;
        font-family: courier;
    }
    .submit{
        padding: 1.5%;
        color: #fff;
        background-color: #010A43;
        font-size: 14pt;
        float: left;
        width: 15%;
        margin-right: 10px;
    }
    .welcome{
        color: #010A43;
        font-size: 30pt;
        font-weight: 900;
        margin-bottom: 10px;
        font-family: tahoma;
    }
    .bg{
        background: #ffffdd;
    }
    </style>
</head>
<body class = "bg">
    <div class = "form">
        <span class = "welcome"> HALAMAN AWAL </span>
            <form action = "login.php" method = "post">
                <input class = "input" type = "text" name = "nama" placeholder = "Nama"><br>
                <input class = "input" type = "text" name = "kelas" placeholder = "Kelas"><br>
                <input class = "input" type = "text" name = "username" placeholder = "Username"><br>
                <input class = "input" type = "email" name = "email" placeholder = "Email"><br>
                <input class = "input" type = "password" name = "password" placeholder = "Password">
                <input class = "input" type = "text" name = "idlevel" placeholder = "Idlevel">
                <br><br><br><br><br>
                <br><br>
                <input class = "submit" type = "submit" name = "login" value = "Login">
                <a href = "register.php" class = "submit" align = "center">Daftar</a>
            </form>
    </div>
</body>
</html>
<?php
    include 'koneksi.php';
    if(@$_POST['simpan']){
        $username = @$_POST['username'];
        $email = @$_POST['email'];
        $password = @$_POST['password'];
        $pass = md5($password);

        $query = mysqli_query($koneksi, "INSERT INTO `user` (username,email,password) VALUES ('$username', '$email', '$pass')");

        if($query){
            echo "<div class = 'form'>
            <h3> Berhasil Login Akun </h3> 
            <br/> Klik untuk <a href = 'login.php'>Login</a>
            </div>";
        }else{
            echo "data gagal di input";
        }
    }
?>
