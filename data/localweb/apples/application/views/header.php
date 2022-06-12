<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/apples/assets/grocery_crud/css/custom.css">
	<style>
		#title{ 
			color: green;
			text-align: center; 
			padding: 0.5em; 
		}
	</style>
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
		<div class="container">

		</div>
		<div class="container">
			<img id="logo" src="/apples /assets/grocery_crud/css/ui/simple/images/logo.jpg" alt="logo">
			<h1 id="title"> Herts Apple Tree Management System</h1>
		</div>
		<div class="container-fluid">
			<div class="row ">
				<div class="col-md-8 col-sm-12">
					<ul class="nav nav-left justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" href='<?php echo site_url('')?>'>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href='<?php echo site_url('main/tree')?>'>Trees</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href='<?php echo site_url('main/variety')?>'>Variety</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href='<?php echo site_url('main/orchard')?>'>Orchard</a></li>
						</li>
						<li class="nav-item">
							<a class="nav-link" href='<?php echo site_url('main/treesplanted')?>'>Planting Info</a></li>
						</li>

					</ul>
				</div>
				<div class="col-md-4 col-sm-12">
					<ul class="nav nav-right justify-content-center">
						<li class="nav-item">
							<a class="nav-link nav-right" href='<?php echo site_url('main/help')?>'>Help</a></li>
						</li>
						<li class="nav-item">
							<a class="nav-link" href='<?php echo site_url('main/querynav')?>'>Queries</a></li>
						</li>
					</ul>
				</div>
			</div>
			
			
			
		</div>
	</header>
	
</body>
</html>
