<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'head.php') ?>


<div class="login__wrapper">
	<div class="container">
		<div class="row">
			<div class="col-6 offset-md-3">
				<h1 class="login__title"><?php echo lang('login_heading'); ?> / <a href="/auth/register"><?php echo lang('create_user_heading'); ?></a></h1>

				<div id="infoMessage" class="login__messages"><?php echo $message; ?></div>

				<?php echo form_open('auth/login') ?>
				<div class="mb-3">
					<label for="identity" class="form-label">Login</label>
					<?php echo form_input($identity, '', 'class="form-control" '); ?>
					<!-- aria-describedby="identityHelp" <div id="identityHelp" class="form-text">Don't use your real name as a nickname for login.</div> -->
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<?php echo form_input($password, '', 'class="form-control"'); ?>
				</div>
				<div class="mb-3">
					<?php echo lang('login_remember_label', 'remember'); ?>
					<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
				</div>
				<?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary w-100"'); ?>
				</form>
			</div>
		</div>
	</div>
</div>