<div class="outlets view">
<h2><?php echo __('Outlet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outlet User'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['outlet_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Id'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['email_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile1'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['mobile1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile2'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['mobile2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landline'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['landline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doorno'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['doorno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pincode'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['pincode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landmark'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['landmark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefered Contact Name'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['prefered_contact_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefered Contact Number'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['prefered_contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefered Contact Time'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['prefered_contact_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geo Latitude'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['geo_latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geo Longitude'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['geo_longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unique Id'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['unique_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Date'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['subscription_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Duration'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['subscription_duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Amount'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['subscription_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Expiry'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['subscription_expiry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($outlet['Outlet']['modified_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php
			$filePath = '/uploads/outlets/logos/'.$outlet['Outlet']['image'];						
			?>
			<img src="<?php echo $filePath;?>">			
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Outlet'), array('action' => 'edit', $outlet['Outlet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Outlet'), array('action' => 'delete', $outlet['Outlet']['id']), array(), __('Are you sure you want to delete # %s?', $outlet['Outlet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Outlets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outlet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
