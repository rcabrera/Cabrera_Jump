<?php require_once('inc/config.php');?>
<?php include_once('inc/top.php'); ?>

<?php $input = $_GET['shout']; ?>


<body id="demo">

<?php include_once('inc/header.php'); ?>

<div id="main">

  <h1>ASSIGNMENTS:</h1>

   <div id="content" class="">
		<h3>ASSIGNMENTS:</h3>
		<p>
		<img src="<?php echo 'i/' . $input; ?>" alt="" />
		Lorem ipsum dolor sit amet, consectetur adipisicing <a href="index.php?shout=jag.jpg">jag</a> <a href="index.php?shout=jagg.jpg">jaguar</a>
		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
		nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
		reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
		pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
		culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
		nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
		reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
		pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
		culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	
	<?php include_once('inc/sidebar.php'); ?>
	
	<?php include_once('inc/bottom.php'); ?>
	