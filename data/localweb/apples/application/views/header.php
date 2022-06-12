<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/apples/assets/grocery_crud/css/css/bootstrap.css">
	<style>
		#title{ 
			color: #8DA8C2;
			text-align: center; 
			padding: 0.5em; 
		}
		body {
			background-color: white;
			}
		.test {
			transition: .4s;
			}
			.test:hover {
			transition: .4s;
			background-color: rgba(3, 169, 40, 0.7) ;
			}
	</style>
</head>

<body>
	<header>
		<div class="container-fluid justify-content-end text-light bg-dark">
			<div class="row">
				<div class="col-md-2 ms-auto"><p>You are signed in</p></div>
			</div>
			
		</div>
		<div class="container-fluid">
			<img style="width: 80px; height: 80px; float:left;" src="/apples/assets/grocery_crud/css/ui/simple/images/logo2.jpg" alt="logo">
			<h1 id="title"> Herts Apple Tree Management System</h1>
		</div>
		<div class="container-fluid" style="margin-bottom: 50px;">
			<div class="row ">
				<div class="col-md-8 col-sm-12">
					<ul class="nav nav-left justify-content-center">
						<li class="nav-item">
							<a class="nav-link link-dark test" href='<?php echo site_url('')?>'>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link link-dark test" href='<?php echo site_url('main/tree')?>'>Trees</a>
						</li>
						<li class="nav-item">
							<a class="nav-link link-dark test" href='<?php echo site_url('main/variety')?>'>Variety</a>
						</li>
						<li class="nav-item">
							<a class="nav-link link-dark test" href='<?php echo site_url('main/orchard')?>'>Orchard</a></li>
						</li>
						<li class="nav-item">
							<a class="nav-link link-dark test" href='<?php echo site_url('main/treesplanted')?>'>Planting Info</a></li>
						</li>

					</ul>
				</div>
				<div class="col-md-4 col-sm-12">
					<ul class="nav nav-right justify-content-center">
						<li class="nav-item">
							<a class="nav-link nav-right link-info" href='<?php echo site_url('main/help')?>'>Help</a></li>
						</li>
						<li class="nav-item">
							<a class="nav-link link-dark test" href='<?php echo site_url('main/querynav')?>'>Queries</a></li>
						</li>
					</ul>
				</div>
			</div>
			
			
			
		</div>
	</header>
	
</body>
</html>
