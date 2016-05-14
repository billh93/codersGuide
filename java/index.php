<?php
	include_once('../inc/config.php');
	$title = "Coders Guide | Java";
	$description = "Java is a programming language that developers use to create applications on your computer.";
	$urlDir = "java";  
	$image = "images/javaPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');		
?>
	<body id="javaPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>	    
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="javaLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/java.png" alt="Java Logo" title="Java Logo">
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
		                    <p>Java is a programming language that developers use to create applications on your computer. Chances are you've downloaded a program that required the Java runtime, so you already probably have it installed. It's also a web plug-in that allows you to run apps in your browser.</p>		
		                    <h2 class="section-heading">Products that use the language:</h2>		
		                    <ul>
		                    	<li><a target="_blank" href="https://www.android.com">Android</a></li>
		                    	<li><a target="_blank" href="https://www.amazon.com">Amazon</a></li>
		                    	<li><a target="_blank" href="https://www.ebay.com">Ebay</a></li>
		                    	<li><a target="_blank" href="https://www.linkedin.com">LinkedIn</a></li>
		                    </ul>
		                    <h2 class="section-heading">Companies that use them:</h2>		                    
							<ul>
		                    	<li><a target="_blank" href="https://www.google.com/intl/en/about/">Google</a></li>
		                    	<li><a target="_blank" href="https://www.amazon.com">Amazon</a></li>
		                    	<li><a target="_blank" href="https://www.ebay.com">Ebay</a></li>
		                    	<li><a target="_blank" href="https://www.linkedin.com">LinkedIn</a></li>
		                    </ul>
							<h2 class="section-heading">Sample Code:</h2>
							<code>	
								public class Main { <br>	
									&nbsp; &nbsp; public static void main(String[] args) { <br>	
										&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hello, World!&quot;); <br>	
									&nbsp; &nbsp; } <br>	
								}
							</code>
							<h2 class="section-heading">Pros/Cons:</h2>
		                    <h3>Pros:</h3>	
		                    <ul>
			                    <li>Most popular language in enterprise applications.</li>
			                    <li>Googles Android uses Java so it's highly relevant in mobile.</li>
			                    <li>Lots of available code and third-party libraries.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>The only way to write functions is to make them class methods.</li>
			                    <li>The language allows for very little syntactic sugar (harder to read etc).</li>
			                    <li>If you aren't careful you can write slow programs (this can happen in any language though).</li>
			                </ul>	
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $102,000 a year (<a target="_blank" href="http://www.indeed.com/salary/Java-Developer.html">via Indeed</a>)</p>	
		                    <h2 class="section-heading">Difficulty Rating:</h2>
		                    <div class="star-rating text-center">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
		                    <h2 class="section-heading">Resources to learn the language:</h2>
		                    <ol>
			                    <li><a target="_blank" href="https://www.codecademy.com/learn/learn-java">Codecademy</a> (Free)</li>
			                    <li><a target="_blank" href="http://www.learnjavaonline.org">Learn Java Online</a> (Free)</li>
			                    <li><a target="_blank" href="https://www.udemy.com/java-tutorial/">Udemy</a> (Free)</li>
			                    <li><a target="_blank" href="https://teamtreehouse.com/tracks/learn-java">Team Treehouse</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>