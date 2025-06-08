<?php require_once('includes/init.php'); ?>
<?php cek_login($role = array(1, 2)); ?>

<?php
$ada_error = false;
$result = '';

$id_sapi = (isset($_GET['id'])) ? trim($_GET['id']) : '';

if(!$id_sapi) {
	$ada_error = 'Maaf, data tidak dapat diproses.';
} else {
	$query = $pdo->prepare('SELECT id_sapi FROM sapi WHERE id_sapi = :id_sapi');
	$query->execute(array('id_sapi' => $id_sapi));
	$result = $query->fetch();
	
	if(empty($result)) {
		$ada_error = 'Maaf, data tidak dapat diproses.';
	} else {
		
		$handle = $pdo->prepare('DELETE FROM nilai_sapi WHERE id_sapi = :id_sapi');				
		$handle->execute(array(
			'id_sapi' => $result['id_sapi']
		));
		$handle = $pdo->prepare('DELETE FROM sapi WHERE id_sapi = :id_sapi');				
		$handle->execute(array(
			'id_sapi' => $result['id_sapi']
		));
		redirect_to('list-sapi.php?status=sukses-hapus');
		
	}
}
?>

<?php
$judul_page = 'Hapus sapi';
require_once('template-parts/header.php');
?>

	<div class="main-content-row">
	<div class="container clearfix">
	
		<?php include_once('template-parts/sidebar-sapi.php'); ?>
	
		<div class="main-content the-content">
			<h1><?php echo $judul_page; ?></h1>
			
			<?php if($ada_error): ?>
			
				<?php echo '<p>'.$ada_error.'</p>'; ?>	
			
			<?php endif; ?>
			
		</div>
	
	</div><!-- .container -->
	</div><!-- .main-content-row -->


<?php
require_once('template-parts/footer.php');