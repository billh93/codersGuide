<?php 
	include_once('../inc/config.php');
	$title = "Coders Guide | ASP Net";
	$description = "ASP.NET is a open-source server-side web application framework designed for web development.";
	$urlDir = "asp"; 
	$image = "images/aspPost.jpg";
	include_once(ROOT_PATH . 'inc/head.php');	
?>
	<body id="aspPost">
	    <?php include_once(ROOT_PATH . 'inc/nav.php'); ?>	   
	    <!-- Page Header -->
	    <header class="intro-header">
		    <!-- Page Content -->
	        <div class="container" id="image-container">
	            <div class="row text-center"> 
	                <img class="img-responsive" src="<?php echo BASE_URL; ?>images/asp.jpg" alt="ASP.Net Logo" title="ASP.Net Logo">
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
			                <h2 class="section-heading">What does the language(framework) do:</h2>
		                    <p>ASP.NET is a development framework for building web pages and web sites with HTML, CSS, JavaScript and server scripting. ASP.NET supports three different development models that are Web Pages, MVC (Model View Controller), and Web Forms.</p>
		                    <h2 class="section-heading">Products that use the language:</h2>		
		                    <ul>	
			                    <li><a target="_blank" href="http://www.dell.com/en-us/">Dell</a></li>
			                    <li><a target="_blank" href="http://www.vistaprint.com">VistaPrint</a></li>
			                    <li><a target="_blank" href="http://www.break.com">Break</a></li>
			                    <li><a target="_blank" href="http://www.gettyimages.com">Getty Images</a></li>
		                    </ul>
		                    <h2 class="section-heading">Companies that use them:</h2>
		                    <ul>	
			                    <li><a target="_blank" href="http://www.dell.com/en-us/">Dell</a></li>
			                    <li><a target="_blank" href="http://www.vistaprint.com">VistaPrint</a></li>
			                    <li><a target="_blank" href="http://www.break.com">Break</a></li>
			                    <li><a target="_blank" href="http://www.gettyimages.com">Getty Images</a></li>
		                    </ul>
							<h2 class="section-heading">Sample Code:</h2>
		                    <code>	
			                    &lt;!DOCTYPE html&gt; <br>
			                    &lt;html&gt; <br>	
			                    	&nbsp; &nbsp; &lt;body&gt; <br>	
			                    		&nbsp; &nbsp; &nbsp; &nbsp; &lt;% response.write(&quot;Hello World!&quot;)%&gt; <br>
			                    	&nbsp; &nbsp; &lt;/body&gt; <br>	
			                    &lt;/html&gt;
		                    </code>
							<h2 class="section-heading">Pros/Cons:</h2>
							<h3>Pros:</h3>	
		                    <ul>
			                    <li>Quick drag-and-drop controls.</li>
			                    <li>Uses object oriented programming for the design and controls of pages which allows lesser input leading to more output.</li>
			                    <li>Validation and AJAX are pretty easy.</li>	
		                    </ul>
		                    <h3>Cons:</h3>
		                    <ul>
			                    <li>Expensive and resource intensive to keep code maintainable/working.</li>
			                    <li>Windows and IIS have a documented history of bugs and vulnerabilities.</li>
			                    <li>Harder to find cheap programmers.</li>
			                </ul>		
							<h2 class="section-heading">How much does a developer get paid:</h2>
		                    <p class="text-center">On average $89,000 a year (<a target="_blank" href="http://www.indeed.com/salary/ASP-Net-Developer.html">via Indeed</a>)</p>	
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
			                    <li><a target="_blank" href="http://www.asp.net/get-started">ASP.Net</a> (Free)</li>
			                    <li><a target="_blank" href="http://www.tutorialspoint.com/asp.net/">Tutorials Point</a> (Free)</li>
			                    <li><a target="_blank" href="https://www.lynda.com/ASP-NET-training-tutorials/157-0.html">Lynda</a> (Paid)</li>
		                    </ol>
		                </div>
		            </div>
		        </div>
		    </article>
	    </main>	    
	<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>
