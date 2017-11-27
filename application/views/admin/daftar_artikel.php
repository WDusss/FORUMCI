<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php require_once('adminheader.php'); ?>
<?php require_once('adminsidebar.php'); ?>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
				<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading"><h3>Daftar Artikel</h3></div>
					<table class="table">
						<thead>
							<tr>
								<th>Judul</th>
								<th>Gambar</th>					
								<th>Penulis</th>
								<th>Tanggal</th>
								<th>Aksi</th>					
							</tr>
						</thead>
						<tbody>
							<?php if(!empty($record)):?>
								<?php foreach($record as $row):?>
									<tr>
										<td><?php echo $row['title'];?></td>
										<td>
											<img src="<?php echo $row['featured_image'];?>" width="50" />
										</td>
										<td><?php echo $row['author'];?></td>
										<td><?php echo $row['date'];?></td>
										<td><a href="<?php echo base_url('front/edit_artikel/'.$row['ID']);?>"><span class="label label-success">Edit</span></a> | 
											<a href="<?php echo base_url('front/delete_artikel/'.$row['ID']);?>"><span class="label label-danger">Hapus</span></a></td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>
						</tbody>
					</table>
					</div>
				<ul class="pager">
                    <?php echo $pagination ;?>
                </ul>
			</div>
		
<?php require_once('adminfooter.php'); ?>