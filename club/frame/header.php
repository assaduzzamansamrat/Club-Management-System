<header>
	<div class="headbar">
		<div class="row">
		<?php include 'menu.php'; ?>
		</div>
	</div>
	<div class="clear"></div>
</header>

<?php 

$expiry = 1800;//session expiry required after 30 mins (30*60)
    if (isset($_SESSION['LAST']) && (time() - $_SESSION['LAST'] > $expiry)) {
        session_unset();
        session_destroy();
    }
    $_SESSION['LAST'] = time();


 ?>