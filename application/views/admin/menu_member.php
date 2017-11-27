<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php require_once('adminheader.php'); ?>
<?php require_once('adminsidebar.php'); ?>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
				<div class="jumbotron">
				  <h2>Selamat Datang Admin</h2>
				  <p>Silahkan mengakses menu dibawah ini</p>
				  <p><a class="btn btn-primary btn-lg" href="<?=base_url('front/tambah_artikel');?>" role="button">Tambah Artikel</a>
				  <a class="btn btn-primary btn-lg" href="<?=base_url('front/daftar_artikel');?>" role="button">Daftar Artikel</a>
				</div>
			</div>
		
<?php require_once('adminfooter.php'); ?> 