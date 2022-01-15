<?php
if(file_exists("install/index.php")){
	//perform redirect if installer files exist
	//this if{} block may be deleted once installed
	header("Location: install/index.php");
}

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}

?>
		<div class="jumbotron">
			<h1 align="center"><?=lang("JOIN_SUC");?> <?php echo $settings->site_name;?></h1>
			<p align="center" class="text-muted"><?=lang("MAINT_OPEN")?></p>
			<p align="center">
				<?php
				if($user->isLoggedIn()){?>
					<a class="btn btn-primary" href="users/account.php" role="button"><?=lang("ACCT_HOME");?> &raquo;</a>
				<?php }else{?>
					<a class="btn btn-warning" href="users/login.php" role="button"><?=lang("SIGNIN_TEXT");?> &raquo;</a>
					<a class="btn btn-info" href="users/join.php" role="button"><?=lang("SIGNUP_TEXT");?> &raquo;</a>
				<?php }?>
			</p>
			<br>
			<p align="center"><?=lang("MAINT_PLEASE");?></p>
			<h4 align="center"><a href="https://userspice.com/getting-started/">https://userspice.com/getting-started/</a></h4>
			<?php if (hasPerm(2)){   ?> 
			<h4 align="center"><a href="readqr/index.php">Display QR</a></h4>
			<?php } ?> 

			<?php if (hasPerm(1)){   ?> 
			<h4 align="center"><a href="scanqr/index.php">Scan QR</a></h4>
			<?php } ?> 
			<p align="center">admin password</p><p align="center">user1 123123</p><p align="center">user2 123123</p>
			<p align="center">location :</p><p align="center" id="latt"></p><p align="center" id="long"></p>
			<p align="center"><a href="@" id="linkDom">_map_</a></p>
		</div>
<?php  languageSwitcher();?>
<script>
	if('geolocation' in navigator) {
		navigator.geolocation.getCurrentPosition((position) => {
  
  document.getElementById('latt').textContent = position.coords.latitude;
  document.getElementById('long').textContent = position.coords.longitude;
  document.getElementById('linkDom').href="https://www.google.com/maps/@"+position.coords.latitude+","+position.coords.longitude+",18z";

});		} else {
		/* geolocation IS NOT available */
		}
</script>


<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
