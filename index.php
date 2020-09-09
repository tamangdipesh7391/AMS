
<?php
ob_start();
session_start();
require_once ("config/config.php");
require_once ("config/db.php");



$url=isset($_GET['url']) ? $_GET['url'] :'home';

$url=str_replace('.php', '', $url);

$url.='.php';

$pagePath=root('pages/'.$url);

require_once root('includes/header.php');
 

if(file_exists($pagePath) && is_file($pagePath)){ 
	if(isset($_SESSION['semester'])){
		
			
		 ?>
	 <div class="container"><hr>
	 	<div class="row">
	 	<div class="col-md-6">
			 <h1 class="mobile-text" style="color: purple">You are in <?php
			 	if (isset($_SESSION['semester'])) {
			 		echo $_SESSION['semester'];
			 	}

			 	?></h1>
	 	</div>
	 	<div class="col-md-6">
	 		<a href="<?=base_url('change_semester.php')?>" class="btn btn-primary">Change Semester</a>
	 	</div>
	 	</div>

	 </div>


	<?php 
}
	require_once $pagePath;

	
}else {
	
	echo "<h1>Page not found 404</h1>";
}
require_once root('includes/footer.php');
