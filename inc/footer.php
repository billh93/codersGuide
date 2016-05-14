<!-- Footer -->
	    <footer> 
	        <strong>&copy; <?php date_default_timezone_set('America/Chicago'); echo date("Y"); ?> Coders Guide, Inc <br> All Rights Reserved.</strong>  
	    </footer>
	    <!-- jQuery -->
	    <script src="<?php echo BASE_URL; ?>js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
	    <!-- Konami Code JavaScript -->
	    <script src="<?php echo BASE_URL; ?>js/konami.js"></script>
	    <script>
		    var easter_egg = new Konami('https://www.youtube.com/watch?v=bFEoMO0pc7k');
	    </script>
	    <?php include_once(ROOT_PATH . 'inc/googleTracking.js'); ?>
	</body>
</html>