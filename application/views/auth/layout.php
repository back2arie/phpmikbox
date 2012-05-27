<!DOCTYPE html>
<html lang="en">
<head>
	<title>phpmikbox / Login</title>
	<link href="<?php echo $this->config->item('base_url');?>media/bootstrap/css/docs.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_url');?>media/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_url');?>media/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>
    <div class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
    		<div class="container">
    			<a href="#" class="brand">phpmikbox</a>
		   		<ul class="nav pull-right">
		            <li><a href="#">About</a></li>
	          	</ul>
    		</div>
    	</div>
    </div>

    <div class="container">  
	    <!--S:Content-->
	    	<!--S:Alert-->
			<?php $this->load->view('alert');?>
			<!--E:Alert-->

	    	<!--S:Main-->
			<?php $this->load->view($main);?>
			<!--E:Main-->
	    <!--E:Content-->
    </div>

    <script src="<?php echo $this->config->item('base_url');?>media/bootstrap/js/jquery.js"></script>
    <script src="<?php echo $this->config->item('base_url');?>media/bootstrap/js/bootstrap-dropdown.js"></script>

</body>
</html>