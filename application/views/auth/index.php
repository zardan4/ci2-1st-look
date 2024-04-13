<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'head.php') ?>
<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'navbar.php') ?>

<div class="container">
	<h1><?php echo lang('index_heading'); ?></h1>
	<p><?php echo lang('index_subheading'); ?></p>


	<table cellpadding=0 cellspacing=10 class="w-100 border border-secondary">
		<tr class="bg-info border-bottom border-secondary">
			<th class="p-2"><?php echo lang('index_fname_th'); ?></th>
			<th class="p-2"><?php echo lang('index_lname_th'); ?></th>
			<th class="p-2"><?php echo lang('index_email_th'); ?></th>
			<th class="p-2"><?php echo lang('index_groups_th'); ?></th>
			<!-- <th class="p-1"><?php echo lang('index_status_th'); ?></th>
			<th class="p-1"><?php echo lang('index_action_th'); ?></th> -->
		</tr>
		<?php foreach ($users as $user) : ?>
			<tr>
				<td class="p-2"><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
				<td class="p-2"><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
				<td class="p-2"><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
				<td class="p-2">
					<?php foreach ($user->groups as $group) : ?>
						<?php echo htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8') ?><br />
						<!-- <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br /> -->
					<?php endforeach ?>
				</td>
				<!-- <td class="p-1"><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td> -->
				<!-- <td class="p-1"><?php echo anchor("auth/edit_user/" . $user->id, 'Edit'); ?></td> -->
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'footer.php') ?>