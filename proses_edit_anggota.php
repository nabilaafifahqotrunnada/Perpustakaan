<?php
	include('../config.php');
	
	$id = @$_GET['id'];
	$nama_petugas          = @$_POST['nama_petugas'];
    $telp      		= @$_POST['telp'];
    $username             = @$_POST['username'];
    $password           = @$_POST['password'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_petugas SET nama_petugas='$nama_petugas', 
    telp='$telp', username='$username', password='$password' where id='$id'");
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_petugas.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
    // header('location:tampil_buku.php');

?>
