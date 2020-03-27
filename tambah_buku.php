<?php
//memasukkan file config.php
    include('../koneksi.php');
    if(isset($_POST['submit'])){
        $kode_buku			= @$_POST['kode_buku'];
        $judul_buku			= @$_POST['judul_buku'];
        $jenis_buku			= @$_POST['jenis_buku'];
        $stok	            = @$_POST['stok'];
        $penerbit	    	= @$_POST['penerbit'];
        
        $cek = mysqli_query($koneksi, "SELECT * FROM t_buku WHERE kode_buku='$kode_buku'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO t_buku(kode_buku, judul_buku, jenis_buku, stok, penerbit) VALUES('$kode_buku', '$judul_buku', '$jenis_buku', '$stok','$penerbit')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="tampil_buku.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, kode_buku sudah terdaftar.</div>';
        }
    }
?>
