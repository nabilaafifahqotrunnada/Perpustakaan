<?php include('../config.php'); ?>
<!-- Delete -->
<div class="modal fade" id="del<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Buku</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($koneksi,"SELECT * FROM t_buku WHERE id='".$data['id']."'");
					$deleteData=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Judul Buku: <strong><?php echo $deleteData['judul']; ?></strong></center></h5>
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
                        <h5 class="modal-title">Edit Keranjang</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Judul Buku:</label>
                            <input type="text" name="judul" class="form-control" value="<?php echo $editData['judul']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Penerbit:</label>
                            <input type="text" name="penerbit" class="form-control" value="<?php echo $editData['penerbit']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pengarang:</label>
                            <input type="text" name="pengarang" class="form-control" value="<?php echo $editData['pengarang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ringkasan:</label>
                            <input type="text" name="ringkasan" class="form-control" value="<?php echo $editData['ringkasan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cover:</label>
                            <input type="text" name="cover" class="form-control" value="<?php echo $editData['cover']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Stok:</label>
                            <input type="text" name="stok" class="form-control" value="<?php echo $editData['stok']; ?>" required>
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
