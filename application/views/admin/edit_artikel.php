<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php require_once('adminheader.php'); ?>
<?php require_once('adminsidebar.php'); ?>

			<div class="col-md-8">
            <!-- Tambah Testi Column -->
            
                <h3 class="page-header">Edit Artikel</h3>
				<?php echo form_open_multipart(base_url("front/update_artikel"), 'class="form-horizontal"', 'method="POST"');?>	
				
					<div class="form-group">
						<label class="control-label col-sm-2">Judul Artikel:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="title" value="<?php echo $record->title;?>" >
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Penulis:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="author" value="<?php echo $record->author;?>" >
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-sm-2">Isi Artikel:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="content" value="<?php echo $record->content;?>" ></textarea>
						</div>
					</div>					
					<div class="form-group">
						<label class="control-label col-sm-2">Featured Image:</label>
						<div class="col-sm-10">
							<input type="file" class="" name="userfile" size="20">
										<img src="<?php echo $record->featured_image;?>" width="500" height="300" />
						</div>
					</div>			
					<input type="hidden" name="ID" value="<?php echo $record->ID;?>" />
					<button type="submit" name="submit" value="Update Artikel" class="btn btn-danger">Update Artikel</button>
				<?php echo form_close();?>
			</div>	
				
<?php require_once('adminfooter.php'); ?>