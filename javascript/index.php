<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | Javascript";
	$description = "Javascript is one of the three core technologies of the World Wide Web. It is used to program the behavior of web pages.";
	$urlDir = "javascript"; 
	$image = "images/javascriptPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="javascriptPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="javascriptLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/javascript.jpg" alt="Javascript Logo" title="Javascript Logo">
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
		                    <p>Javascript is a dynamic computer programming language. Where it is most commonly used as a part of web pages, that allows client-side script to interact with the user and make dynamic pages. It is also designed for creating network-centric applications.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="https://www.nodejs.org/en/">Node Js</a></li>
		                    	<li><a target="_blank" href="https://www.meteor.com">Meteor</a></li>
		                    	<li><a target="_blank" href="http://www.netflix.com">Netflix</a></li>
		                    	<li><a target="_blank" href="https://www.uber.com">Uber</a></li>
		                    </ol>
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="http://www.walmart.com">Walmart</a></li>
		                    	<li><a target="_blank" href="https://www.paypal.com">Paypal</a></li>
		                    	<li><a target="_blank" href="http://www.netflix.com">Netflix</a></li>
		                    	<li><a target="_blank" href="https://www.uber.com">Uber</a></li>
		                    </ol>		
							<h2 class="section-heading">Sample Code:</h2>
							<code>								
								&lt;!DOCTYPE HTML&gt; <br>	
								&lt;html&gt; <br>	
									&nbsp; &nbsp; &lt;body&gt; <br>	
										&nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;Header...&lt;/p&gt; <br>	
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;script&gt; alert('Hello, World!') &lt;/script&gt; <br>	
										&nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;...Footer&lt;/p&gt; <br>	
									&nbsp; &nbsp; &lt;/body&gt; <br>	
								&lt;/html&gt;
							</code>
							<h2 class="section-heading">Pros/Cons:</h2>
		                    <h3>Pros:</h3>	
		                    <ul>
			                    <li>It's very fast because any code function can be run immediately instead of having to contact the server and wait for an answer.</li>
			                    <li>Is relatively simple to learn and implement.</li>
			                    <li>Plays nicely with other languages and can be used in a huge variety of applications.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>Can be easily exploited without much trouble.</li>
			                    <li>Can be disabled by the user so the page can render differently than what it's supposed to.</li>
			                    <li>Different layout engines may render Javascript differently resulting in inconsistency in terms of functionality and interface.</li>
			                </ul>
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $93,000 a year (<a target="_blank" href="http://www.indeed.com/salary/Javascript-Developer.html">via Indeed</a>)</p>	
		                    <h2 class="section-heading">Difficulty Rating:</h2>
		                    <div class="star-rating text-center">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
		                    <h2 class="section-heading">Resources to learn the language:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="https://www.codecademy.com/learn/javascript">Codecademy</a> (Free)</li>
		                    	<li><a target="_blank" href="http://htmldog.com/guides/javascript/">HTML Dog</a> (Free)</li>
		                    	<li><a target="_blank" href="https://www.udemy.com/javascript-essentials/">Udemy</a> (Free)</li>
		                    	<li><a target="_blank" href="https://teamtreehouse.com/tracks/full-stack-javascript">Team Treehouse</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>   
