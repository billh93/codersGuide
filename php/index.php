<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | PHP";
	$description = "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.";
	$urlDir = "php";  
	$image = "images/phpPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="phpPost">
		<?php include_once(ROOT_PATH . 'inc/nav.php'); ?>
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="phpLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/php.jpg" alt="PHP Logo" title="PHP Logo">
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
		                    <p>PHP is a server-side scripting language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>		
		                    <ol>
		                    	<li><a target="_blank" href="https://www.facebook.com">Facebook</a></li>
		                    	<li><a target="_blank" href="https://www.wordpress.com">Wordpress</a></li>
		                    	<li><a target="_blank" href="http://www.mailchip.com">MailChimp</a></li>
		                    	<li><a target="_blank" href="https://www.baidu.com">Baidu</a></li>
		                    </ol>
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="https://www.facebook.com">Facebook</a></li>
		                    	<li><a target="_blank" href="https://www.wordpress.com">Wordpress</a></li>
		                    	<li><a target="_blank" href="http://www.mailchip.com">MailChimp</a></li>
		                    	<li><a target="_blank" href="https://www.baidu.com">Baidu</a></li>
		                    </ol>		
							<h2 class="section-heading">Sample Code:</h2>
		                    <code>
		                    	&lt;!DOCTYPE HTML&gt; <br>	
		                    	&lt;html&gt; <br>	
		                    		&nbsp; &nbsp;  &lt;body&gt; <br>	
										&nbsp; &nbsp; &nbsp; &nbsp; &lt;?php echo &quot;&lt;h1&gt;Hello, World!&lt;/h1&gt;&quot;; ?&gt; <br>	
									&nbsp; &nbsp; &lt;/body&gt; <br>	
								&lt;/html&gt; <br>	
		                    </code>			
							<h2 class="section-heading">Pros/Cons:</h2>
							<h3>Pros:</h3>
		                    <ul>
			                    <li>Easy to quickly create a small, dynamic web page.</li>
			                    <li>The ecosystem around PHP is huge. A lot of this is due to the popularity of WordPress, Magento and Facebook.</li>
			                    <li>Large community, widely used. Most problems faced by a web developer have pre-existing solutions.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>There is a lot of bad code out there.</li>
			                    <li>There are a lot of bad developers who never learned to do much more than search the internet for examples and stitch them together.</li>
			                    <li>PHP is viewed as an insecure and entry level language to corporations due to it's simplicity and ease of use.</li>
			                </ul>
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $87,000 a year (<a target="_blank" href="http://www.indeed.com/salary/PHP-Developer.html">via Indeed</a>)</p>		
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
		                    	<li><a target="_blank" href="https://www.codecademy.com/learn/php">Codecademy</a> (Free)</li>
		                    	<li><a target="_blank" href="http://www.tutorialspoint.com/php/">Tutorials Point</a> (Free)</li>
		                    	<li><a target="_blank" href="https://www.lynda.com/PHP-tutorials/Introducing-PHP/418256-2.html">Lynda</a> (Paid)</li>
		                    	<li><a target="_blank" href="https://teamtreehouse.com/tracks/php-development">Team Treehouse</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>
