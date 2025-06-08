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
			<h1>Metode SAW</h1>
			<p>Berikut adalah penjelasan metode yang digunakan dalam sistem ini:</p>

			<h2>Simple Additive Weighting</h2>
			<p>
				Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode penjumlahan terbobot. 
				Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut (Fishburn 1967). 
				SAW dapat dianggap sebagai cara yang paling mudah dan intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM, 
				karena fungsi linear additive dapat mewakili preferensi pembuat keputusan (Decision-Making, DM). Hal tersebut dapat dibenarkan, 
				namun, hanya ketika asumsi preference independence (Keeney & Raiffa 1976) atau preference separability (Gorman 1968) terpenuhi.
			</p>
			</div>
		</div>
	
	</div><!-- .container -->
</div><!-- .main-content-row -->

<?php require_once('template-parts/footer.php'); ?>
