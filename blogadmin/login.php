<?php if (!isset($Translation)) {
    @header('Location: index.php?signIn=1');
    exit;
} ?>
<?php include_once("$currDir/header-login.php"); ?>

<?php if ($_GET['loginFailed']) {
    ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php
} ?>
<main id="tg-main" class="tg-main tg-haslayout">
      <!--************************************
          Contact Us Start
      *************************************-->
      <div class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="tg-contactus">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                  <h2><span>Please <?php echo $Translation['sign in here']; ?></span></h2>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="container">
    <div class="row justify-content-md-center align-items-center">
      <div class="col-sm-offset-3 col col-md-6">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="login">
          <form method="post" action="index.php">
            <div class="ajax-message">
            </div>
              <div class="form-group">
				<label class="control-label" for="username"><?php echo $Translation['username']; ?></label>
				<input class="form-control" name="username" id="username" type="text" placeholder="<?php echo $Translation['username']; ?>" required>
			  </div>
              <div class="form-group">
				<label class="control-label" for="password"><?php echo $Translation['password']; ?></label>
				<input class="form-control" name="password" id="password" type="password" placeholder="<?php echo $Translation['password']; ?>" required>
				<span class="help-block"></span>
				</div>
              	<p class="text-lg-right"><?php echo $Translation['forgot password']; ?></p>
              
				<div class="form-group">
					<label class="control-label" for="rememberMe">
						<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
						<?php echo $Translation['remember me']; ?>
					</label>
				</div>

				<div class="row">
					<div class="">
						<button name="signIn" type="submit" id="submit" value="signIn" class="tg-btn btn-sm btn-block"><?php echo $Translation['sign in']; ?></button>
					</div>
				</div>
				<p class="text-lg-right" style="margin-top:15px">Not Registered? <?php if (sqlValue("select count(1) from membership_groups where allowSignup=1")) {
        ?>
					<a class="nav-link" href="membership_signup.php"><?php echo $Translation['sign up']; ?></a>
				<?php
    } ?></p>
            </form>
          </div>
          <?php if (is_array(getTableList()) && count(getTableList())) { /* if anon. users can see any tables ... */ ?>
				<div class="panel-footer">
					<?php echo $Translation['browse as guest']; ?>
				</div>
			<?php
    } ?>
        </div>
        <div> </div>
      </div>
  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--************************************
        Main End
    *************************************-->

<script>document.getElementById('username').focus();</script>
<?php include_once("$currDir/footer.php"); ?>
