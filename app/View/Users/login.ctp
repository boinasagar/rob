
<div class="container">
		<?php echo $this->Session->flash(); ?>
		<div id="LoginScreen">
		<div class="panel panel-default">
		<div class="panel-heading">
			          <?php  //echo $this->Html->image('/images/logo.png', array('alt' => 'ROB')); ?><h2>ROB</h2>
		</div>
		<div class="panel-body">
		
		<form class="form-horizontal" role="form" accept-charset="utf-8" method="post" id="UserLoginForm" action="<?php echo $this->Html->url('/users/login'); ?>">
			<div class="form-group">
				<div class="col-sm-12">
						<input id="UsersUsername" name="data[User][username]" type="text" class="form-control" placeholder="Username">
					
				</div>
			</div>
			<hr>
			<div class="form-group">
				<div class="col-sm-12">
						<input id="UsersPassword" name="data[User][password]" type="password" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="form-group marginBottom0">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default btn-lg btn-block">Login</button>
				</div>
			</div>
		</form>
		</div>
		</div>
		<p class="copy">Copyright &copy; <?php echo date('Y');?> by ABC.</p>
	</div>
	
	</div>


    
	<?php  
	echo $this->Html->script('bootstrap.min');             			
    ?>
	<script>
		$(document).ready(function(){
		$('input,textarea').focus(function(){
			$(this).data('placeholder',$(this).attr('placeholder'))
			$(this).attr('placeholder','');
			});
			$('input,textarea').blur(function(){
			$(this).attr('placeholder',$(this).data('placeholder'));
		});
		});
	</script>