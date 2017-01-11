<div class="outlets form">
<?php echo $this->Form->create('Outlet', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Outlet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('category', array('options' => $categories));
		echo $this->Form->input('outlet_user', array('options' => $users));
		echo $this->Form->input('email_id',array('type' => 'text'));
		echo $this->Form->input('mobile1');
		echo $this->Form->input('mobile2');
		echo $this->Form->input('landline');
		echo $this->Form->input('doorno');
		echo $this->Form->input('street');
		echo $this->Form->input('address');
		echo $this->Form->input('pincode');
		echo $this->Form->input('landmark');
		echo $this->Form->input('prefered_contact_name');
		echo $this->Form->input('prefered_contact_number');
		echo $this->Form->input('prefered_contact_time');
		echo $this->Form->input('geo_latitude');
		echo $this->Form->input('geo_longitude');
		//echo $this->Form->input('unique_id');
		echo $this->Form->input('subscription_date');
		echo $this->Form->input('subscription_duration');
		echo $this->Form->input('subscription_amount');
		echo $this->Form->input('subscription_expiry');
		echo $this->Form->input('status', array('options' => array('1'=>'Active', '0'=>'Inactive')));
		echo $this->Form->input('created_by', array('options' => $users));
		echo $this->Form->input('created_date');
		echo $this->Form->input('modified_by', array('options' => $users));
		echo $this->Form->input('modified_date');
		echo $this->Form->input('image',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Outlet.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Outlet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Outlets'), array('action' => 'index')); ?></li>
	</ul>
</div>
