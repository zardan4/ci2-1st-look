<!-- <?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'head.php') ?>
<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'navbar.php') ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-md-3">
            <?php echo validation_errors() ?>

            <?php echo form_open('auth/login') ?>
                <div class="mb-3">
                    <label for="loginInput" class="form-label">Login</label>
                    <input type="text" class="form-control" id="loginInput" aria-describedby="loginHelp" name="login">
                    <div id="loginHelp" class="form-text">Don't use your real name as a nickname for login.</div>
                </div>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordInput" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'footer.php') ?> -->