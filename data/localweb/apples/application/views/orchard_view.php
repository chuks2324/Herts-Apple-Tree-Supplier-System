<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { text-align: center;}
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

	<h1>Orchard</h1>
	<div class="container-md">
		<div class= "row justify-content-md-center">
			<div class= "col-7" >
				<?php echo $output; ?>
			</div>
			
		</div>
		
    </div>
</body>
</html>
