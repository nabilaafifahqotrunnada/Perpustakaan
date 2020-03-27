<?php
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "";
    $db_name = "moklet_perpustakaan";
    $koneksi = mysqli_connect("127.0.0.1", "root", "", "moklet_perpustakaan");

    if(mysqli_connect_errno()){
        echo "koneksi gagal : " .mysqli_connect_error();
    }else{
        echo " ";
    }
?>
