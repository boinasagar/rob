<div class="userLevelAccesses view">
<h2><?php echo __('User Level Access'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Table Name'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['table_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Table Alias'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['table_alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Field Name'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['field_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Field Alias'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['field_alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['edit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['delete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emp Id'); ?></dt>
		<dd>
			<?php echo h($userLevelAccess['UserLevelAccess']['emp_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Level Access'), array('action' => 'edit', $userLevelAccess['UserLevelAccess']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Level Access'), array('action' => 'delete', $userLevelAccess['UserLevelAccess']['id']), array(), __('Are you sure you want to delete # %s?', $userLevelAccess['UserLevelAccess']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Level Accesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Level Access'), array('action' => 'add')); ?> </li>
	</ul>
</div>
