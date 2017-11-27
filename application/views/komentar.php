
            <!-- Tambah Komentar Column -->
            
                <h3 class="page-header">Silahkan tinggalkan komentar</h3>
				
				<form class="form-horizontal" action="<?php echo base_url('home/tambah_komentar/kirim_komentar');?>" method="POST">
				<input type="hidden" name="ID" value="<?php echo $row['ID']; ?>" />
					<div class="form-group">
						<label class="control-label col-sm-2">Nama Anda:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="comment_name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Email Anda:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="comment_email" >
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-sm-2">Komentar:</label>
						<div class="col-sm-10">
							<textarea class="form-control"name="comment_body"></textarea>
						</div>
					</div>						
					<button type="submit" value="tambah_komentar" class="btn btn-danger">Kirim</button>
				</form>						