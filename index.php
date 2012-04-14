<?php require_once('inc/config.php');?>
<?php include_once('inc/top.php'); ?>

<?php
//page specific logic here

  $page_name='home';
  $extra_js='j/extra.js';
  $extra_css='c/extra.css';
 
	if(isset($_GET['shout']))
	{
 		$input =  $_GET['shout']; 
	}
	else
	{
		$input = 'git.png';
	}
 
 ?>


<body id="demo">

<?php include_once('inc/header.php'); ?>

<div id="main">

  <h1>ASSIGNMENTS:</h1>

   <div id="content">
	 <p>
		<img src="<?php echo 'i/' . $input; ?>" alt="" align="left"/>
		GitHub is a web-based hosting service for software development projects that use the Git revision control system. Our class will be using this repository to help us code and save our php files. GitHub has grown into an application used by over a million people to store over two million code repositories. GitHub is one of the largest code host in the world.		
	 </p>
     
     <ul id="menu">
     	<li><a href="#">Assignment 1: Jump Page</a> Due 4/11/2012</li>
        <li><a href="#">Assignment 2: Research Article</a> Due 5/08/2012</li>
        <li><a href="#">Assignment 3: Site Map,Wireframes, &amp; DB Structure</a> Due 5/15/2012</li>
        <li><a href="#">Assignment 4: Web Application</a> Due 6/06/2012</li>
     </ul>
     
  </div>

	
	<?php include_once('inc/sidebar.php'); ?>
	
	<?php include_once('inc/bottom.php'); ?>
	