<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		.page-title{ text-align: center;
		color: red;}
	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>

<h2 class="page-title" >Variety</h2>
    <div class="container-md">
		<div class= "row justify-content-md-center">
			<div class= "col-10" >
				<?php echo $output; ?>
			</div>
			
		</div>
		
    </div>
</body>
</html>
