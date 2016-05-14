<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | Easter Egg";
	$description = "You found the easter egg!";
	$urlDir = "easteregg"; 
	$image = "images/easterEgg.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="easterEgg">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>	   
	    <!-- Post Content -->
	    <article id="post-info">
	        <div id="post-container">
	            <div class="row text-center">
	                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		                <h3>You've Found it!</h3>
		                <p>Now follow the instructions and become surprised.</p>
		                <img class="img-responsive center-img" src="<?php echo BASE_URL; ?>images/konamiCode.jpg" alt="Konami Code" title="Konami Code" />
		                <p>P.S. This actually works on every page of the site. More easter eggs will be added. Stay Tuned!</p>				
	                </div>
	            </div>
	        </div>
	    </article>
	    </main>		    
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>