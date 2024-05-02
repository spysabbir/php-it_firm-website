<base href="../">
<?php
$user = true;
$create_user = true;
require_once('../header.php');
require_once('../db.php');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <span class="breadcrumb-item active">Admin</span>
      <span class="breadcrumb-item active">Create User</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper pd-25 pd-xs-40 bg-white rounded shadow-base">
        <form action="admin/create_user_post.php" method="post">

          <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Full name</label>
            <input type="text" class="form-control" name="full_name" placeholder="Enter your full name" value="<?= (isset($_SESSION['old_full_name'])) ? $_SESSION['old_full_name'] : ''; unset($_SESSION['old_full_name']) ?>">
            <?php if (isset($_SESSION['full_name_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['full_name_error'] ?></small>
            <?php endif;
            unset($_SESSION['full_name_error']) ?>
          </div><!-- form-group -->

          <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Email Address</label>
            <input type="email" class="form-control" name="email_address" placeholder="Enter your email address" value="<?= (isset($_SESSION['old_email_address'])) ? $_SESSION['old_email_address'] : ''; unset($_SESSION['old_email_address']) ?>">
            <?php if (isset($_SESSION['email_address_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['email_address_error'] ?></small>
            <?php endif;
            unset($_SESSION['email_address_error']) ?>
            <?php if (isset($_SESSION['same_email_check_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['same_email_check_error'] ?></small>
            <?php endif;
            unset($_SESSION['same_email_check_error']) ?>
          </div><!-- form-group -->

          <div class="form-group">
            <label> Gender: </label>
            <div class="d-flex justify-content-around">
              <label>
                <input type="radio" name="gender" value="male" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'male') ? 'checked' : '' ?>>
                <span>Male</span>
              </label>
              <label>
                <input type="radio" name="gender" value="female" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'female') ? 'checked' : '' ?>>
                <span>Female</span>
              </label>
              <label>
                <input type="radio" name="gender" value="others" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'others') ? 'checked' : '';
                                                                  unset($_SESSION['old_gender'])  ?>>
                <span>Others</span>
              </label>
            </div>
            <?php if (isset($_SESSION['gender_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['gender_error'] ?></small>
            <?php endif;
            unset($_SESSION['gender_error']) ?>
          </div><!-- form-group -->

          <div class="form-group">
            <label>Role:</label>
            <select name="role" class="form-control custom-select">
              <option value="">Choose your role</option>
              <option value="admin" <?= (isset($_SESSION['old_role']) && $_SESSION['old_role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
              <option value="user" <?= (isset($_SESSION['old_role']) && $_SESSION['old_role'] == 'user') ? 'selected' : '';
                                    unset($_SESSION['old_eole']) ?>>User</option>
            </select>
            <?php if (isset($_SESSION['role_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['role_error'] ?></small>
            <?php endif;
            unset($_SESSION['role_error'])
            ?>
          </div><!-- form-group -->

          <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
            <?php if (isset($_SESSION['password_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['password_error'] ?></small>
            <?php endif;
            unset($_SESSION['password_error']) ?>
          </div><!-- form-group -->

          <button type="submit" class="btn btn-info btn-block">Create Account</button>

        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

  </div><!-- br-pagebody -->

  <?php
  require_once('../footer.php');
  require_once('../../status.php')
  ?>