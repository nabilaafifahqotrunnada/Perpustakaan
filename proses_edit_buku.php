<?php
	include('<div class="">
    <koneksi></koneksi>.php');
	
	$id = @$_GET['id'];
	
	$JudulBuku = @$_POST['judul_buku'];
	$JenisBuku = @$_POST['jenis_buku'];
    $Stok = @$_POST['stok'];
    $Penerbit = @$_POST['penerbit'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_buku SET judul_buku='$JudulBuku', jenis_buku='$JenisBuku', stok='$Stok', penerbit='$Penerbit' where id='$id'");
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_buku.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
    header('location:tampil_buku.php');

?>
