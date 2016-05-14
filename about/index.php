<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | About";
	$description = "Who is behind Coders Guide and why did they make this?";
	$urlDir = "about"; 
	$image = "images/aboutPage.jpg";
	include_once(ROOT_PATH . 'inc/head.php');
?>
	<body id="about">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>	   
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
		            <h1>About</h1>
	                <img class="img-responsive img-circle" src="<?php echo BASE_URL; ?>images/bill.jpg" alt="Bill Hinostroza" title="Bill Hinostroza">
	                <h2>Bill Hinostroza</h2>
	            </div>
	        </div>
	    </header>
	    <main>
		    <!-- Post Content -->
		    <article id="post-info">
		        <div id="post-container">
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			                <h3 class="section-heading">Who is behind Coders Guide?</h3>
		                    <p>My name is <a target="_blank" href="http://billhinostroza.com">Bill Hinostroza</a> and I live in Chicago. I've been an on and off web developer for about 4 years mostly just doing front-end work which I specialize in. I however hope to continue on creating great sites like the one you are on right now.</p>
		                    <h3 class="section-heading">Why did you make this?</h3>
		                    <p>I made this for my web development class but the inspiration came from was when I was as a beginner I struggled on what language to start with and which languages were the most popular. So, I took the initiative and researched the web to find all the information I can and post it on here. So, beginners can easily start with the language they find most appealing to them.</p>
		                    <h3 class="section-heading">How can I contact you?</h3>
		                    <p>
			                    Email: <a href="mailto:bill@codersguide.xyz">bill@codersguide.xyz</a> <br>
			                    Twitter: <a target="_blank" href="http://twitter.com/djhiphop23">@djhiphop23</a> <br>
			                    Facebook: <a target="_blank" href="http://fb.com/djhiphop23">Bill</a>	
			                </p>		                    
		                    <h3 class="section-heading">I have some edits/suggestions for you. Are you open to them?</h3>				                    							<p>Yes, I'm totally open for corrections, modifications or suggestions on the content. I believe that there is much more I can include. So anything is welcomed!</p>
		                    <h3 class="section-heading">Are there any easter eggs?</h3>
		                    <p>Yes, there are. Find it! (Hint: There is only 1 at the moment)</p>	
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>	    
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>