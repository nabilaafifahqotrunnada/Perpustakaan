<?php
	include('../connect.php');
	
	$id = @$_GET['id'];
	$nama = @$_POST['nama'];
    $kelas = @$_POST['kelas'];
    $telp = @$_POST['telp'];
    $username  = @$_POST['username'];
    $password = @$_POST['password'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_anggota SET nama='$nama', 
    kelas='$kelas',telp='$telp', username='$username', password='$password' where id='$id'");
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_anggota.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
    // header('location:tampil_buku.php');

?>
