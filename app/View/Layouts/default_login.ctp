<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROB</title>

    <!-- Bootstrap -->
	<?php 
    echo $this->Html->css('bootstrap.min'); 
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('styles');
    echo $this->Html->css('common-styles');
    ?>
	<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>	

	</style>
	<?php  
	echo $this->Html->script('jquery.min'); 
	
    ?>
	<script type="text/javascript">
$(window).load(function() {
			$("#ajaxstatus, #cover").fadeOut("slow");
		});
		
		$( document ).ready(function() {
			$( "form" ).submit(function( event ) {
				$("#ajaxstatus, #cover").show();
			});
		});
	</script>
</head>
<body class="dashboard rmglogin">
	<div class="navbar navbar-default navbar-static-top main-menu color-bar" role="navigation">
      <div class="container">
		 <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-menu-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
		 </div><!--/.nav-collapse -->
      </div>
    </div>
	<?php echo $content_for_layout; ?>     
	<div class="footer">
    </div>
	<div id='ajaxstatus' style='display:none;'><nobr><?php echo $this->Html->image('/images/loading.gif', array('border' => "0")); ?></nobr></div>
<div id="cover" > </div>
	</body>
</html>
