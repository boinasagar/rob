<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title_for_layout ?></title>
	<?php 
    echo $this->Html->css('bootstrap.min'); 
    echo $this->Html->css('bootstrap-select.min');
    echo $this->Html->css('common-styles');
    echo $this->Html->css('font-awesome.min');
	echo $this->Html->css('stacktable'); 
    echo $this->Html->css('build');
    echo $this->Html->css('component');

	
    ?>
  

	<?php   echo $this->Html->script('jquery.min');	
            echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('bootstrap-select.min');
			//echo $this->Html->script('stacktable.js');			
            //echo $this->Html->script('script.js');

    ?>
	<!--<script src="/demos/js/jquery-ui-1.11.4/jquery-ui.js" type="text/javascript" /></script>
	<link href="/demos/js/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<link href="/demos/js/jtable/themes/lightcolor/red/jtable.css" rel="stylesheet" type="text/css" />
<script src="/demos/js/jtable/jquery.jtable.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		/*$(window).load(function() {
			$("#ajaxstatus, #cover").fadeOut("slow");
		});*/
	</script>-->
	
  </head>
  <body>
  <noscript>
  <div style='margin: 50px; font-size: 110%;'>
	  <h1>You need to change a setting in your web browser</h1>
	  <p>Application requires a browser feature called <strong>JavaScript</strong>. All modern browsers support JavaScript. You probably just need to change a setting in order to turn it on.</p>
	  <p>Please see: <a href="http://www.google.com/support/bin/answer.py?answer=23852" target="_blank">How to enable JavaScript in your browser</a>.</p>
	  <p>Once you've enabled JavaScript you can <a href="">try loading this page again</a>.</p>
	  <p>Thank you.</p>
  </div>
</noscript>
  <div class="navbar navbar-inverse navbar-fixed-top header-bar" role="navigation">
        <div class="container">
		<div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".user-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php  //echo $this->Html->image('/images/logo.png', array('class'=>'navbar-brand','width' => '70','url' => array('controller' => 'Dashboards'))); ?>
		  <h1><a href="/">ROB</a></h1>
        </div>
        <div class="navbar-collapse collapse user-menu">
         <ul class="nav navbar-nav navbar-right user-nav">
			<li class="dropdown profile_menu">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
			<?php echo $this->Html->image('user-icon.png', array('alt' => 'User', 'width' => '20')); ?><?php echo $this->Session->read('username');?> <b class="caret"></b></a>
			
        <ul class="dropdown-menu">
          <!--<li><a href="#">My Account</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Messages</a></li>
          <li class="divider"></li>-->
          <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">Sign Out</a></li>
        </ul>
      </li>
		 </ul>
		 <div class="site_date"><?php echo date('l, F d, Y')?></div>
		  
        </div><!--/.navbar-collapse -->
		 </div>
      </div>
    </div>
	
<div role="navigation" class="navbar navbar-default navbar-static-top main-menu color-bar">
      <div class="container">
		 <div class="row">
        <div class="navbar-header">
          <button data-target=".main-menu-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse main-menu-collapse">
          <ul class="nav navbar-nav">
            <li class="menu2"><a></a></li>
            <li class="menu3"><a></a></li>
			<li class="menu4"><a></a></li>
            <li class="menu5"><a></a></li>
			<li class="menu6"><a></a></li>
          </ul>
        </div>
		 </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<?php
	if ($this->session->check('Message.flash')){
	echo $this->session->flash();
	}
	?>
	
		


<div class="container wrapper">
<?php echo $this->fetch('content');  ?>
	
</div>
<footer>
	<div class="container">
		<p>Copyright &copy; <?php echo date('Y');?> by ROB.</p>
	</div>
</footer>
<div id='ajaxstatus' style='display:none;'><nobr><img src="<?php echo $this->html->url.'/images/loading.gif'; ?>" border=0 ></nobr></div>
<div id="cover" > </div>

  </body>
  </html>
