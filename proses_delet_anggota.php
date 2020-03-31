<?php
	include('../config.php');
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_anggota WHERE id='$id'");
	header('location:tampil_anggota.php');

?>
