<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<script src="https://www.alexandercardosi.com/js/bug-min.js"></script>
<title><!--[site_name]--></title>
<style type="text/css">
	body {
	background-image: 
url(https://media.giphy.com/media/Q9aBxHn9fTqKs/giphy.gif);
	}
	#creds {
	display: none;
	}
	a {
	color: lime;
	}
	body {
	color: lime;
	}
	html, body {
	   text-align: center;
	}
	#wrapper {
	   width: 700px;
	   margin: 0 auto 0 auto;
	   text-align: left;
	   padding: 10px;
	   background: black;
	   border: 4px solid lime;
	}
	#footer {
	   margin: 10px 0 0 0; 
	   font-size: 80%;
	   color: #ccc;
	}
	#error {
	   border: 1px solid red;
	   padding: 2px;
	   margin: 5px 0 15px 0;
	   background: #eee;
	}
	.center { text-align: center; }
	
	/* TOOLTIP HOVER EFFECT */
	#tooltip{ 
	   width:20em; background: #fff;
	}
</style>
<?=injectionJS();?>
</head>
<body>
<div id="wrapper">

	<h1 class="center"><a href="index.php"><!--[site_name]--></a></h1>
	
	<!--[error]-->
	
	<h2>About</h2>
	
	<!--[description]-->
	
	<h2>Enter URL</h2>
	
	<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
		<input type="text" name="u" id="input" size="40">
		<input type="submit" value="Go">
	
		<h3>Options</h3>
		<ul id="options">
			<?php foreach ($toShow as $option) echo '<li><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'><label for="'.$option['name'].'" class="tooltip" onmouseover="tooltip(\''.$option['escaped_desc'].'\')" onmouseout="exit();">'.$option['title'].'</label></li>';?>
		</ul>
	</form>
	<div id="creds">
	<p class="center">Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.</p>  
	</div>
</div>
<script type='text/javascript'>
// load the fruit flies:
new BugController();
// load the spiders
new SpiderController();
</script>
</body>
</html>
