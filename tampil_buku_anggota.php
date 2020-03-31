<?php
//memasukkan file config.php
include('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
    <!-- CSS online dari bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </script>
    <style>
    .bs-example {
        margin: 20px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../userAnggota.php" class="navbar-brand" style="font-family:blockletter;">PerpusMoklet</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../userAnggota.php" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Book</a>
                <a href="../t_anggota/tampil_anggota.php" class="nav-item nav-link active">Profile</a>
            </div>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="../logoutAnggota.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>

    <div class="container" style="margin-top:20px">
        <h2>Keranjang Buku</h2>
        <hr>
        <table class="table table-striped table-hover table-sm table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO.</th>
                    <th>JUDUL BUKU</th>
                    <th>PENERBIT</th>
                    <th>PENGARANG</th>
                    <th>RINGKASAN</th>
                    <th>COVER</th>
                    <th>STOK</th>
                </tr>
            </thead>
            <tbody>
                <?php
				//query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM t_buku ORDER BY id DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
                    while($data = mysqli_fetch_array($sql)){
                        ?>
                <!--menampilkan data perulangan -->

                <tr>
                    <td><?php echo $no; ?></td>

                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td><?php echo $data['pengarang']; ?></td>
                    <td><?php echo $data['ringkasan']; ?></td>
                    <td><?php echo $data['cover']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                </tr>

                <?php
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
            <tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>
