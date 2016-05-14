<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | Swift";
	$description = "Swift is a new programming language created by Apple for building iOS, OS X, watchOS and tvOS apps.";
	$urlDir = "swift";  
	$image = "images/swiftPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="swiftPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="swiftLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/swift.jpg" alt="Swift Logo" title="Swift Logo">
	                <h3 class="meta white-text">Posted by <a href="<?php echo BASE_URL; ?>about">Bill</a> on April 20, 2016</h3>
	            </div>
	        </div>
	    </header>
	    <main>
		    <!-- Post Content -->
		    <article id="post-info">
		        <div id="post-container">
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			                <h2 class="section-heading">What does the language do:</h2>
		                    <p>Swift is a programming language developed by Apple for iOS, OSX and watchOS development. The language adopts the best of C and Objective-C, without having the constraints of C compatibility. Swift designers took ideas from various other popular languages such as Objective-C, Rust, Haskell, Ruby, Python, C#, and CLU to make it what it is today.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>		
		                    <ol>
		                    	<li><a target="_blank" href="https://www.lyft.com">Lyft</a></li>
		                    	<li><a target="_blank" href="http://linkedin.com">LinkedIn</a></li>
		                    	<li><a target="_blank" href="https://www.hipmunk.com"></a>Hipmunk</li>
		                    	<li><a target="_blank" href="https://www.strava.com/mobile">Strava</a></li>
		                    </ol>	
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="https://www.lyft.com">Lyft</a></li>
		                    	<li><a target="_blank" href="http://linkedin.com">LinkedIn</a></li>
		                    	<li><a target="_blank" href="https://www.hipmunk.com"></a>Hipmunk</li>
		                    	<li><a target="_blank" href="https://www.strava.com/mobile">Strava</a></li>
		                    </ol>
							<h2 class="section-heading">Sample Code:</h2>
		                    <code>	
		                    	println(&quot;Hello world!&quot;)
		                    </code>
							<h2 class="section-heading">Pros/Cons:</h2>
		                    <h3>Pros:</h3>
		                    <ul>
			                    <li>Swift is easier and simpler to write than its counterpart (Objective C).</li>
			                    <li>Swift can result in shorter overall code length. Less code to do the same job compared to (Objective C).</li>
			                    <li>Swift is 'safer' due to its safe memory management feature.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>It doesn't do everything Objective-C does.</li>
			                    <li>You need to know Objective-C to debug the code/framework.</li>
			                    <li>Since, the language is new the pool of Swift developers is very limited.</li>
			                </ul>
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $112,000 a year (<a target="_blank" href="http://www.indeed.com/salary/Swift-Developer.html">via Indeed</a>)</p>			
		                    <h2 class="section-heading">Difficulty Rating:</h2>
		                    <div class="star-rating text-center">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
		                    <h2 class="section-heading">Resources to learn the language:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="http://www.tutorialspoint.com/swift/">Tutorials Point</a> (Free)</li>
		                    	<li><a target="_blank" href="https://www.hackingwithswift.com/read/0/overview">Hacking With Swift</a> (Free)</li>
		                    	<li><a target="_blank" href="https://www.udemy.com/the-complete-ios-9-developer-course/">Udemy</a> (Paid)</li>
		                    	<li><a target="_blank" href="https://teamtreehouse.com/tracks/ios-development-with-swift">Team Treehouse</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>