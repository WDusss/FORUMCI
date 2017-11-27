<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php require_once('adminheader.php'); ?>
<?php require_once('adminsidebar.php'); ?>

			<div class="col-md-8">
            <!-- Tambah Testi Column -->
            
                <h3 class="page-header">Tambah Artikel</h3>
				<?php echo form_open_multipart(base_url("front/tambah_artikel/kirim"), 'class="form-horizontal"', 'method="POST"');?>	
				
					<div class="form-group">
						<label class="control-label col-sm-2">Judul Artikel:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="title">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Penulis:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="author" >
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-sm-2">Isi Artikel:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="content"></textarea>
						</div>
					</div>					
					<div class="form-group">
						<label class="control-label col-sm-2">Featured Image:</label>
						<div class="col-sm-10">
							<input type="file" class="" name="userfile" size="20">
						</div>
					</div>						
					<button type="submit" name="submit" value="Tambah Artikel" class="btn btn-danger">Tambah Artikel</button>
				<?php echo form_close();?>
			</div>	
				
<?php require_once('adminfooter.php'); ?>