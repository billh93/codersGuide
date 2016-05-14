<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | Python";
	$description = "Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable.";
	$urlDir = "python";  
	$image = "images/pythonPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="pythonPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="pythonLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/python.jpg" alt="Python Logo" title="Python Logo">
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
		                    <p>Python is a general purpose programming language that’s used by thousands of people to do things from testing microchips at Intel, to powering Instagram, to building video games. It’s lightweight and its syntax closely resembles the English language.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>	
		                    <ol>
		                    	<li><a target="_blank" href="http://reddit.com/">Reddit</a></li>
		                    	<li><a target="_blank" href="http://bitbucket.org/">Bitbucket</a></li>
		                    	<li><a target="_blank" href="http://udemy.com/">Udemy</a></li>
		                    	<li><a target="_blank" href="https://youtube.com">Youtube</a></li>
		                    </ol>
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ol>
		                    	<li><a target="_blank" href="http://reddit.com/">Reddit</a></li>
		                    	<li><a target="_blank" href="http://bitbucket.org/">Bitbucket</a></li>
		                    	<li><a target="_blank" href="http://udemy.com/">Udemy</a></li>
		                    	<li><a target="_blank" href="https://youtube.com">Youtube</a></li>
		                    </ol>		
							<h2 class="section-heading">Sample Code:</h2>
		                    <code>	
		                    	print &quot;Hello, World!&quot;
		                    </code>
							<h2 class="section-heading">Pros/Cons:</h2>
		                    <h3>Pros:</h3>
		                    <ul>
			                    <li>It is easy to read, write, and maintain code making the syntax as elegant as possible.</li>
			                    <li>Requires less effort and code to build applications compared to lower-level languages (C++, Java) making it a productive way to write code.</li>
			                    <li>Python is becoming more popularized due to the IOT(Internet of Things) which is considered the next big tech trend alongside virtual reality.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>Its speed of execution is slow compared to compiled languages such as C/C++.</li>
			                    <li>Absent from mobile computing and browsers because code is hard to secure in those environments.</li>
			                    <li>Forces programmers to follow certain conventions such as indenting and whitespaces.</li>
			                </ul>
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $102,000 a year (<a target="_blank" href="http://www.indeed.com/salary/Python-Developer.html">via Indeed</a>)</p>	
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
		                    	<li><a target="_blank" href="http://www.learnpython.org">Learn Python</a> (Free)</li>
		                    	<li><a target="_blank" href="https://www.codecademy.com/learn/python">Codecademy</a> (Free)</li>
		                    	<li><a target="_blank" href="https://www.udemy.com/python-and-python-django-for-beginners-2-course-package/">Udemy</a> (Paid)</li>
		                    	<li><a target="_blank" href="https://teamtreehouse.com/tracks/learn-python">Team Treehouse</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>