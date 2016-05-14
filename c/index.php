	<?php 
		include_once('../inc/config.php');
		$title = "Coders Guide | C";
		$description = "C is often called a \"Middle Level\" programming language. It's known for it's capability to access the system's low level functions.";
		$urlDir = "c";  
		$image = "images/cPost.jpg"; 
		include_once(ROOT_PATH . 'inc/head.php')	
	?>
	<body id="cPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img id="cLogo" class="img-responsive" src="<?php echo BASE_URL; ?>images/c.png" alt="C Logo" title="C Logo">
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
		                    <p>C is used for system development work, particularly the programs that make-up the operating system. C is considered a system development language because it produces code that runs nearly as fast as the code written in assembly language.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>
		                    <ul>
			                    <li><a target="_blank" href="http://www.apple.com/osx/">Apple</a> (OSX, iOS)</li>
			                    <li><a target="_blank" href="https://www.microsoft.com/en-us/windows/features">Microsoft</a> (Windows)</li>
			                    <li><a target="_blank" href="http://www.oracle.com/technetwork/server-storage/solaris11/overview/index.html">Oracle</a> (Solaris)</li>
			                    <li><a target="_blank" href="http://www.ubuntu.com">Ubuntu</a> (Ubuntu)</li>
		                    </ul>		
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ul>
			                    <li><a target="_blank" href="http://www.apple.com/osx/">Apple</a></li>
			                    <li><a target="_blank" href="https://www.microsoft.com/">Microsoft</a></li>
			                    <li><a target="_blank" href="http://www.oracle.com/">Oracle</a></li>
			                    <li><a target="_blank" href="http://www.canonical.com">Canonical</a></li>
		                    </ul>			
							<h2 class="section-heading">Sample Code:</h2>		                    
		                    <code>	
			                    #include &lt;stdio.h&gt; <br> <br>	
			                    int main() { <br> 
			                    	&nbsp; &nbsp; printf(&quot;Hello, World!&quot;); <br>	 
			                    	&nbsp; &nbsp; return 0; <br>	
			                    }
		                    </code>	
							<h2 class="section-heading">Pros/Cons:</h2>
		                    <h3>Pros:</h3>	
		                    <ul>
			                    <li>Best/generally used for lower-level system stuff (OS, Device Drivers etc).</li>
			                    <li>Extremely fast run time performance.</li>
			                    <li>Very popular in game development.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>Not ideal for developing ordinary applications and seldom use for web development.</li>
			                    <li>Very easy to create security flaws (particularly buffer overflows).</li>
			                    <li>It takes a lot of code & development time.</li>
			                </ul>		
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $99,000 a year (<a target="_blank" href="http://www.indeed.com/salary/C-Developer.html">via Indeed</a>)</p>	
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
			                    <li><a target="_blank" href="http://www.learn-c.org">Learn C</a> (Free)</li>
			                    <li><a target="_blank" href="http://c.learncodethehardway.org/book/">Learn C The Hard Way</a> (Free)</li>
			                    <li><a target="_blank" href="https://www.udemy.com/c-programming-for-beginners/">Udemy</a> (Paid)</li>
			                    <li><a target="_blank" href="https://www.lynda.com/C-training-tutorials/1249-0.html">Lynda</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>
