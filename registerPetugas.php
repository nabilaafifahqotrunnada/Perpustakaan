<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Petugas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form">
        <img src="icon.png" class="avatar"><br>
        <span class="welcome"><h2>Registrasi</h2></span>
        <form action=" " method="post">
            <input class="input" type="text" name="nama_petugas" placeholder="Nama Lengkap"><br>
            <input class="input" type="text" name="telp" placeholder="No.Telp"><br>
            <input class="input" type="text" name="username" placeholder="Username"><br>
            <input class="input" type="password" name="password" placeholder="Password"><br>
            <input class="submit" type="submit" name="simpan" value="Daftar"><br>
            <br>
            <a href="indexPetugas.php" class="">Sudah Punya akun? Login </a>
        </form>
    </div>
</body>
</html>

<?php
    include 'config.php';
    if(@$_POST ['simpan']){
        $nama_petugas=@$_POST['nama_petugas'];
        $telp=@$_POST['telp'];
        $username= @$_POST['username'];
        $Password= @$_POST['password'];
        // $pass = md5($password);

        $query = mysqli_query($koneksi, "INSERT INTO `t_petugas` (nama_petugas, telp, username, password)
                        VALUES('$nama_petugas', '$telp', '$username', '$Password')");

        if($query){
            echo "<div class='form'>
            <h3> Berhasil Registrasi Akun</h3>
            <br/> Klik untuk <a href = 'indexPetugas.php'>Login</a>
            </div>";
        }else{
            echo "data gagal di input";
        }
    }
    ?>
