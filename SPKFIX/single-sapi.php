<?php require_once('includes/init.php'); ?>

<?php
$ada_error = false;
$result = '';

$id_sapi = (isset($_GET['id'])) ? trim($_GET['id']) : '';

if(!$id_sapi) {
	$ada_error = 'Maaf, data tidak dapat diproses.';
} else {
	$query = $pdo->prepare('SELECT * FROM sapi WHERE id_sapi = :id_sapi');
	$query->execute(array('id_sapi' => $id_sapi));
	$result = $query->fetch();
	
	if(empty($result)) {
		$ada_error = 'Maaf, data tidak dapat diproses.';
	}
}
?>

<?php
$judul_page = 'Detail sapi';
require_once('template-parts/header.php');
?>

	<div class="main-content-row">
	<div class="container clearfix">
	
		<?php include_once('template-parts/sidebar-sapi.php'); ?>
	
		<div class="main-content the-content">
			<h1><?php echo $judul_page; ?></h1>
			
			<?php if($ada_error): ?>
			
				<?php echo '<p>'.$ada_error.'</p>'; ?>
				
			<?php elseif(!empty($result)): ?>
			
				<h4>Nomor Kalung</h4>
				<p><?php echo $result['no_kalung']; ?></p>
				
				<h4>Ciri Khas</h4>
				<p><?php echo nl2br($result['ciri_khas']); ?></p>
				
				<h4>Tanggal Input</h4>
				<p><?php
					$tgl = strtotime($result['tanggal_input']);
					echo date('j F Y', $tgl);
				?></p>
				
				<?php
				$query2 = $pdo->prepare('SELECT nilai_sapi.nilai AS nilai, kriteria.nama AS nama FROM kriteria 
				LEFT JOIN nilai_sapi ON nilai_sapi.id_kriteria = kriteria.id_kriteria 
				AND nilai_sapi.id_sapi = :id_sapi ORDER BY kriteria.urutan_order ASC');
				$query2->execute(array(
					'id_sapi' => $id_sapi
				));
				$query2->setFetchMode(PDO::FETCH_ASSOC);
				$kriterias = $query2->fetchAll();
				if(!empty($kriterias)):
				?>
					<h3>Nilai Kriteria</h3>
					<table class="pure-table">
						<thead>
							<tr>
								<?php foreach($kriterias as $kriteria ): ?>
									<th><?php echo $kriteria['nama']; ?></th>
								<?php endforeach; ?>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php foreach($kriterias as $kriteria ): ?>
									<th><?php echo ($kriteria['nilai']) ? $kriteria['nilai'] : 0; ?></th>
								<?php endforeach; ?>
							</tr>
						</tbody>
					</table>
				<?php
				endif;
				?>

				<p><a href="edit-sapi.php?id=<?php echo $id_sapi; ?>" class="button"><span class="fa fa-pencil"></span> Edit</a> &nbsp; <a href="hapus-sapi.php?id=<?php echo $id_sapi; ?>" class="button button-red yaqin-hapus"><span class="fa fa-times"></span> Hapus</a></p>
			
			<?php endif; ?>			
			
		</div>
	
	</div><!-- .container -->
	</div><!-- .main-content-row -->


<?php
require_once('template-parts/footer.php');