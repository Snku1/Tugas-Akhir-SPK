<?php
require_once('includes/init.php');
$judul_page = 'Home';
require_once('template-parts/header.php');
?>

<div class="main-content-row">
    <div class="container clearfix">
        <?php include_once('template-parts/sidebar-penjelasan.php'); ?>

        <div class="main-content">
            <div class="the-content" style="max-width: 700px; line-height: 1.6; text-align: justify;">
                <h1>Selamat Datang di Sistem Pendukung Keputusan</h1>
                <p>Web SPK Pemilihan Sapi ini adalah sebuah sistem berbasis web yang dirancang untuk membantu pengguna, 
                    seperti panitia kurban atau pembeli, dalam memilih sapi terbaik berdasarkan beberapa kriteria penting. 
                    Sistem ini menggunakan metode pengambilan keputusan berbasis multi-kriteria, yaitu SAW dan TOPSIS, 
                    untuk menyaring dan merekomendasikan sapi yang paling optimal untuk dijadikan hewan kurban.</p>
            <ul>
				<li>Memberikan alternatif pilihan terbaik berdasarkan perhitungan ilmiah.</li>
				<li>Membantu dalam memilih sapi yang sesuai syariat dan berkualitas.</li>
                <li>Mengurangi subjektivitas dalam pemilihan sapi.</li>
			</ul>

            <p>Silakan pilih menu di samping untuk melanjutkan.</p>

            </div>
        </div><!-- .main-content -->
    </div><!-- .container -->
</div><!-- .main-content-row -->


<?php
require_once('template-parts/footer.php');