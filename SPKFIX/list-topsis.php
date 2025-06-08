<?php require_once('includes/init.php'); ?>

<?php
$judul_page = 'Beranda';
require_once('template-parts/header.php');
?>

<div class="main-content-row">
	<div class="container clearfix">
	
		<?php include_once('template-parts/sidebar-penjelasan.php'); ?>
	
		<div class="main-content the-content">
			<div class="the-content" style="max-width: 700px; line-height: 1.6; text-align: justify;">
			<h1>Metode TOPSIS</h1>
			<p>Berikut adalah penjelasan metode yang digunakan dalam sistem ini:</p>

			<h2>Technique for Order Preference by Similarity to Ideal Solution</h2>
			<p>
				TOPSIS (Technique For Others Reference by Similarity to Ideal Solution) adalah salah satu metode pengambilan keputusan multikriteria yang pertama kali diperkenalkan oleh Yoon dan Hwang (1981). 
				TOPSIS menggunakan prinsip bahwa alternatif yang terpilih harus mempunyai jarak terdekat dari solusi ideal positif dan terjauh dari solusi ideal negatif 
				dari sudut pandang geometris dengan menggunakan jarak Euclidean untuk menentukan kedekatan relatif dari suatu alternatif dengan solusi optimal. 
				Solusi ideal positif didefinisikan sebagai jumlah dari seluruh nilai terbaik yang dapat dicapai untuk setiap atribut, 
				sedangkan solusi negatif-ideal terdiri dari seluruh nilai terburuk yang dicapai untuk setiap atribut.
			</p>
			</div>
		</div>
	
	</div><!-- .container -->
</div><!-- .main-content-row -->

<?php require_once('template-parts/footer.php'); ?>
