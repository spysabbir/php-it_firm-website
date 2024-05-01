<?php
require_once('header.php');
require_once('db.php');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel br-profile-page">

  <div class="card shadow-base bd-0 rounded-0 widget-4">
    <div class="card-header ht-75">
      <div class="hidden-xs-down text-white">
        <h3><?= spy_sabbir_update('theme_default', 'company_name'); ?></h3>
      </div>
      <div class="tx-24 hidden-xs-down text-white">
        <h3><?= spy_sabbir_update('theme_default', 'company_name'); ?></h3>
      </div>
    </div>
    <div class="card-body">
      <div class="card-profile-img">
        <img src="img/<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_img'] ?>" alt="">
      </div><!-- card-profile-img -->
      <h4 class="tx-normal tx-roboto tx-white"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></h4>
      <p class="mg-b-25"><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['designation']) ?></p>
    </div><!-- card-body -->
  </div><!-- card -->

  <div class="row">
    <div class="col-lg-12">
      <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
        <form method="POST" action="change_password_post.php" id="edit_form">
          <div class="form-layout">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                <input type="hidden" name="user_id" class="form-control" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['id'] ?>">
                  <label class="form-control-label">Current Password<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="user_current_password" value="" placeholder="Current Password">
                  <?php if (isset($_SESSION['user_current_password_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['user_current_password_error'] ?></small>
                  <?php endif;
                    unset($_SESSION['user_current_password_error'])
                  ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">New Password<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="user_new_password" value="" placeholder="New Password">
                  <?php if (isset($_SESSION['user_new_password_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['user_new_password_error'] ?></small>
                  <?php endif;
                    unset($_SESSION['user_new_password_error'])
                  ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Confirm Password<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="user_confirm_password" value="" placeholder="Confirm Password">
                  <?php if (isset($_SESSION['user_confirm_password_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['user_confirm_password_error'] ?></small>
                  <?php endif;
                    unset($_SESSION['user_confirm_password_error'])
                  ?>
                </div>
              </div>
            </div><!-- row -->
            <div class="form-layout-footer text-center mt-3">
              <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Password</a>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
      </div>
    </div>
  </div>

  <?php
  require_once('footer.php');
  require_once('status.php');
  ?>