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
		<div id="top">
			<img id="logo" src="/orders/assets/grocery_crud/css/ui/simple/images/logo.jpg" alt="logo">
			<h1> Herts Apple Tree Management System</h1>
		</div>
		<div class="navbar">
			<ul class="nav">
				<li><a class="nav-link" href='<?php echo site_url('')?>'>Home</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/orders')?>'>Orders</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/items')?>'>Items</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/customers')?>'>Customers</a></li>
				<li><a class="nav-link" href='<?php echo site_url('main/orderline')?>'>Order Line</a></li>
					<ul class="nav">
						<li><a class="nav-link" href='<?php echo site_url('main/blank')?>'>Blank Page</a></li>
						<li><a class="nav-link" href='<?php echo site_url('main/querynav')?>'>Queries</a></li>
					</ul>
			</ul>
		</div>
	</header>
	
</body>
</html>
