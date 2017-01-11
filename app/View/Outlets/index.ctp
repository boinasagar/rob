<div class="outlets index">
	<h2><?php echo __('Outlets'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<thead>
	<tr>
			<th class="actions"><?php echo __('Actions'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('outlet_user'); ?></th>
			<th><?php echo $this->Paginator->sort('email_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile1'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile2'); ?></th>
			<th><?php echo $this->Paginator->sort('landline'); ?></th>
			<th><?php echo $this->Paginator->sort('doorno'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('pincode'); ?></th>
			<th><?php echo $this->Paginator->sort('landmark'); ?></th>
			<th><?php echo $this->Paginator->sort('prefered_contact_name'); ?></th>
			<th><?php echo $this->Paginator->sort('prefered_contact_number'); ?></th>
			<th><?php echo $this->Paginator->sort('prefered_contact_time'); ?></th>
			<th><?php echo $this->Paginator->sort('geo_latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('geo_longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('unique_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subscription_date'); ?></th>
			<th><?php echo $this->Paginator->sort('subscription_duration'); ?></th>
			<th><?php echo $this->Paginator->sort('subscription_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('subscription_expiry'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_date'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($outlets as $outlet): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $outlet['Outlet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $outlet['Outlet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $outlet['Outlet']['id']), array(), __('Are you sure you want to delete # %s?', $outlet['Outlet']['id'])); ?>
		</td>
		<td><?php echo h($outlet['Outlet']['id']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['name']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['category']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['outlet_user']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['email_id']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['mobile1']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['mobile2']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['landline']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['doorno']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['street']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['address']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['pincode']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['landmark']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['prefered_contact_name']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['prefered_contact_number']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['prefered_contact_time']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['geo_latitude']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['geo_longitude']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['unique_id']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['subscription_date']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['subscription_duration']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['subscription_amount']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['subscription_expiry']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['status']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['modified_date']); ?>&nbsp;</td>
		<td><?php echo h($outlet['Outlet']['image']); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Outlet'), array('action' => 'add')); ?></li>
	</ul>
</div>
