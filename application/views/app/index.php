<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link type="text/plain" rel="author" href="<?php echo base_url('humans.txt') ?>" />
		<title>Masinfo</title>
		
		<?php if(ENVIRONMENT=='production'): ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<?php elseif(ENVIRONMENT=='development'): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('estaticos/css/bootstrap.min.css') ?>">
		<?php endif; ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('estaticos/css/mague.css') ?>">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-2"></div>
			<div class="col-xs-10">
				<iframe style="border-radius: 10px" width="420" height="315" src="https://www.youtube.com/embed/xFutjZEBTXs?list=PLgFPSBWI2ATvMcpv8z61cipCaA67Edz0E" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-xs-2"></div>
			<div class="col-xs-8">
					<div class="input-group">
				    	<input type="text" class="form-control" placeholder="Search for...">
			    		<span class="input-group-btn">
			    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
			    		</span>
				    </div><!-- /input-group -->
				<form role="search">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
		<?php if(ENVIRONMENT=='production'): ?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<?php elseif(ENVIRONMENT=='development'): ?>
		<!-- jQuery -->
		<script src="<?php echo base_url('estaticos/js/jquery.js') ?>"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('estaticos/js/bootstrap.min.js') ?>"></script>
 		<?php endif; ?>
	</body>
</html>