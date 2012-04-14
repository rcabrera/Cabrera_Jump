<div id="sidebar">
	<h2><?php echo 'COURSE DESCRIPTION';?></h2>
    
    <p>
    	Students apply user-centered designed principles, database structures, and server-side scripting to design and develop content for server-based dynamic delivery.
	</p>
    
	<p>
    	<?php

			echo "<h3>". date('l jS \of F Y h:i:s A') ."</h3>" . "<br />";
			echo $_SERVER['HTTP_USER_AGENT'] . "<br />";
    		echo $_SERVER['PHP_SELF'] . "<br />";
    		echo $_SERVER['SERVER_SOFTWARE'] . "<br />";
			echo $_SERVER['REMOTE_ADDR'] . "<br />";
    	?>
    </p>

	<ul id="menu_links">
     	<li><a href="info.php">PHP info page</a></li>
        <li><a href="http://www.ipage.com/ipage/index.html">iPage Web Hosting</a></li> 
     </ul>
</div>