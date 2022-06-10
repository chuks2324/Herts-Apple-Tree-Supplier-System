<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/orders/assets/grocery_crud/css/custom.css">
	<!--
	<style>
	#nav { font-family: Arial; font-size: 14px; width: 100%; float: left; margin: 0 0 1em 0; padding: 0; list-style: none;}
	#nav {list-style: none; border:0;}
	#rightnav { list-style: none; }
	#nav li { float: left; }
	#rightnav li { float: right; }
	#nav li a { margin: 0 3px 0 0; font-size: 15px; display: block; padding: 8px 15px; text-decoration: none; color: #000; background-color: #f2f2f2; border: 1px solid #c1c1c1;}
	#nav li a:hover {background-color: #f2e4d5;}
	#nav a:link, a:visited {border-radius: 12px 12px 12px 12px; }		
	</style>
	-->
</head>

<body>
	<header>
		<div id=loginbar>

		</div>
		<div id="top">
			<img id="logo" src="/apples /assets/grocery_crud/css/ui/simple/images/logo.jpg" alt="logo">
			<h1> Herts Apple Tree Management System</h1>
		</div>
		<div class="navbar">
			<ul class="nav">
				<li><a class="nav-link" href='<?php echo site_url('')?>'>Home</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/tree')?>'>Trees</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/variety')?>'>Variety</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/orchard')?>'>Orchard</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/treesplanted')?>'>Planting Information</a></li>
					<ul class="nav">
						<li><a class="nav-link" href='<?php echo site_url('main/help')?>'>Help</a></li>
						<li><a class="nav-link" href='<?php echo site_url('main/querynav')?>'>Queries</a></li>
					</ul>
			</ul>
		</div>
	</header>
	
</body>
</html>
