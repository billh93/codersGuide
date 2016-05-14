<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | Ruby";
	$description = "Ruby is a powerful, flexible programming language that focuses on simplicity and productivity where you can use it in Web/Internet development.";
	$urlDir = "ruby";  
	$image = "images/rubyPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="rubyPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="rubyLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/ruby.png" alt="Ruby Logo" title="Ruby Logo">
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
		                    <p>Ruby is a blend of other languages such as Perl, Smalltalk, Eiffel, Ada, and Lisp to form a new language. It is mostly used in two popular areas such as web programming with the popular framework Ruby on Rails and in system administration with programs such as Chef and Puppet, which are both written in Ruby.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>		
		                    <ol>
		                    	<li><a target="_blank" href="https://twitter.com">Twitter</a></li>
		                    	<li><a target="_blank" href="https://shopify.com">Shopify</a></li>
		                    	<li><a target="_blank" href="https://github.com">Github</a></li>
		                    	<li><a target="_blank" href="https://airbnb.com">Airbnb</a></li>
		                    </ol>
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="https://square.com">Square</a></li>
		                    	<li><a target="_blank" href="https://groupon.com">Groupon</a></li>
		                    	<li><a target="_blank" href="https://hulu.com">Hulu</a></li>
		                    	<li><a target="_blank" href="https://heroku.com">Heroku</a></li>
		                    </ol>	
							<h2 class="section-heading">Sample Code:</h2>
		                    <code>	
		                    	puts &quot;Hello World!&quot;
		                    </code>
							<h2 class="section-heading">Pros/Cons:</h2>
		                    <h3>Pros:</h3>
		                    <ul>
			                    <li>Great community that supports beginners.</li>
			                    <li>Simple and easy syntax that minimizes amount of code needed to build something compared to other languages.</li>
			                    <li>Plenty of online resources to get started.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>The performance is not as fast as on PHP or Javascript.</li>
			                    <li>Development might turn out to be more expensive than in other languages.</li>
			                    <li>Can be difficult to install/navigate for beginners (using the command line).</li>
			                </ul>
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $102,000 a year (<a target="_blank" href="http://www.indeed.com/salary/Ruby-Developer.html">via Indeed</a>)</p>
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
		                    	<li><a target="_blank" href="https://www.codecademy.com/learn/ruby">Codecademy</a> (Free)</li>
		                    	<li><a target="_blank" href="https://rubymonk.com">Ruby Monk</a> (Free)</li>
		                    	<li><a target="_blank" href="https://teamtreehouse.com/tracks/learn-ruby">Team Treehouse</a> (Paid)</li>
		                    	<li><a target="_blank" href="https://www.udemy.com/learn-ruby-programming-in-ten-easy-steps/">Udemy</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>
