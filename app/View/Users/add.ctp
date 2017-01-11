<div class="users form useraddForm" id="useraddForm">
 
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username', array('label' => 'Username *', 'class' => "form-control"));
        echo $this->Form->input('mail', array('label' => 'Email', 'class' => "form-control"));
        echo $this->Form->input('password', array('label' => 'Password *', 'class' => "form-control", 'title' => 'Password', 'type'=>'password'));
        echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'class' => "form-control", 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array( '1' => 'Admin', '2' => 'Accountant'),
			'class' => "form-control"
        ));
         
        echo $this->Form->submit('Add User', array('class' => 'btn form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){ ?>
<a href="<?php echo $this->Html->url('/Dashboards') ?>" >Return to Dashboard</a>	
<?php
echo "<br>";
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
}
?>