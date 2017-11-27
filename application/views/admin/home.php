<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php require_once('header.php'); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    Welcome to FIKIR
                </h1>
								<?php if(!empty($record)):?>
									<?php foreach($record as $row): ?>
										<!-- First Blog Post -->
										<h2>
											<a href="<?php echo base_url()?>home/read/<?php echo $row['ID']?>"><?php echo $row['title'];?></a>
										</h2>
										<p class="lead">
											by <?php echo $row['author'];?>
										</p>
										<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo tgl_indo($row['date']);?></p>
										<hr>
										<img class="img-responsive" src="<?php echo $row['featured_image'];?>" width="900" height="300"alt="">
										<hr>
										<p><?php echo $row['content'];?></p>
										<div class="alert alert-success" role="alert">Ada <?php echo count($komentar);?> komentar.<br></div>
										<!--<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->
										<a class="btn btn-primary" href="<?php echo base_url()?>home/read/<?php echo $row['ID']?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
										<hr>
									<?php endforeach;?>
								<?php endif;?>					


                <!-- Pager -->
                <ul class="pager">
                    <?php echo $pagination ;?>
                </ul>
				
            </div>

<?php require_once('sidebar.php'); ?>			
<?php require_once('footer.php'); ?>
