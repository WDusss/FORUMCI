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
							<h2><?php echo $row['title'];?></h2>
							<p class="lead">
								by <?php echo $row['author'];?>
							</p>
							<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo tgl_indo($row['date']);?></p>
							<hr>
							<img class="img-responsive" src="<?php echo $row['featured_image'];?>" width="900" height="300" alt="">
							<hr>
							<p><?php echo $row['content'];?></p>
							<!--<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->
							<hr>
							<div class="media">
								<div class="alert alert-success" role="alert">Ada <?php echo count($komentar)?> komentar.<br></div>
								<?php foreach($komentar as $komen){ ?>
									<div class="media-left">
										<a href="#"><img class="media-object" src="<?=base_url('assets\images\guest.png')?>" alt="..."></a>
									</div>
									<div class="media-body">
										<strong>Komentar <?php echo $komen->comment_name;?></strong><br>
										<small>Posted on <?php echo tgl_indo($komen->comment_date);?></small><br>
										<p><?php echo $komen->comment_body;?></p>
									</div><br>
								<?php } ?>
							</div>							
							

							<hr>
							<?php require_once('komentar.php'); ?>		
						<?php endforeach;?>
					<?php endif;?>					
						
            </div>
				
			<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>


                <!-- Side Widget Well -->
                <div class="well">
                    <h4>About FIKIR</h4>
                    <p>Forum yang dibuat untuk membahas tentang game android <h3><b>Mobile Legend</b></h3> Pembahasan berisi tips, trick, ditur-fitur game dan lain-lain.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->


        <hr>
<?php require_once('footer.php'); ?>
