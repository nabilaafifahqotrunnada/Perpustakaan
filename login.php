<?php
include 'koneksi.php';
$email = ($_POST['email']);
$password = (md5($_POST['password']));

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$sql = mysqli_query($koneksi, $query);

if($sql->num_rows > 0){
    session_start();
    $_SESSION['email'] = $email;
    header("Location: user.php");
} else {
    echo "<h1> Username atau password salah </h1>";
    echo "<div class = 'form'> <h3>
    <br/> Klik untuk <a href = 'index.php'> Login lagi </a></h3> </div>";
}
?>
