<?php include('../koneksi.php'); ?>
<!-- Delete -->
<div class="modal fade" id="del<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($koneksi,"SELECT * FROM t_buku WHERE id='".$data['id']."'");
					$deleteData=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
                    <h5><center>Kode Buku: <strong><?php echo $deleteData['kode_buku']; ?></strong></center></h5> 
					<h5><center>Judul Buku: <strong><?php echo $deleteData['judul_buku']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="proses_delete_buku.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- /EndmodalDelete -->
 
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"SELECT * FROM t_buku WHERE id='".$data['id']."'");
					$editData=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
                <form method="POST" action="proses_edit_buku.php?id=<?php echo $editData['id']; ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Buku</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">       
                        <div class="form-group">
                            <label class="control-label">Kode Buku:</label>
                            <input type="text" name="kode_buku"class="form-control" value="<?php echo $editData['kode_buku']; ?>" readonly>
                        </div>                 
                        <div class="form-group">
                            <label class="control-label">Judul Buku:</label>
                            <input type="text" name="judul_buku" class="form-control" value="<?php echo $editData['judul_buku']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jenis Buku:</label>
                            <input type="text" name="jenis_buku" class="form-control" value="<?php echo $editData['jenis_buku']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Stok:</label>
                            <input type="number" name="stok" class="form-control" value="<?php echo $editData['stok']; ?>" required>
                        </div>
                        <div class="form-group">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="<?php echo $editData['penerbit']; ?>" required>
                        </div>                              
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                    </div>
				</form>
            </div>
        </div>
    </div>
<!-- /EndmodalEdit -->
