<?php 
	include_once('inc/config.php');
	$title = "Coders Guide | Uh Oh 404";
	$description = "Seems like you gone to uncharted territory.";
	$urlDir = "404.php"; 
	$image = "images/404.jpg";
	include_once('inc/head.php'); 
?>
	<body id="error">
		<?php include_once('inc/nav.php'); ?>    
	    <!-- Page Content -->
	    <div class="container">
		    <main>
		        <div class="row text-center">				    
			          <h1>Uh Oh 404</h1>
			          <hr>
			          <p>Seems like you're in uncharted territory click <a href="<?php echo BASE_URL; ?>index.php">here</a> to go home.</p>	
			          <img class="img-responsive" id="lostImg" src="http://i.giphy.com/mPytjcsG3XS4o.gif" alt="Lost" title="Lost"/>	      			        
		        </div>
	        </main>
	    </div>
	<?php include_once('inc/footer.php'); ?>