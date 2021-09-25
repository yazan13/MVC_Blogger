<?php include_once APPROOT . '/views/inc/header.inc.php'; ?>


<div class="row">
    <div class="col-md-6 mx-auto mt-4">
        <div class="card card-body p-3">
            <h2>Create Account</h2>
            <span class="mb-2">*Please fill all the information to create your account</span>
            <form action="<?php echo URLROOT; ?>users/register" method="post">
                <!-- name input  -->
                <div class="form-group">
                    <span for="name">Name <sup>*</sup></span>
                    <input type="text" name="userName" value="<?php echo $data['name'] ?>" class="form-control form-control-lg <?php echo (!empty($data['name_err']) ? 'is-invalid' : '') ?>">
                    <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
                </div>
                <!-- email input  -->
                <div class="form-group">
                    <span for="email">Email <sup>*</sup></span>
                    <input type="email" name="userEmail" value="<?php echo $data['email'] ?>" class="form-control form-control-lg <?php echo (!empty($data['email_err']) ? 'is-invalid' : '') ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                </div>
                <!-- passowrd input  -->
                <div class="form-group">
                    <span for="password">Password <sup>*</sup></span>
                    <input type="password" name="userPassword" value="<?php echo $data['password'] ?>" class="form-control form-control-lg <?php echo (!empty($data['password_err']) ? 'is-invalid' : '') ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
                </div>
                <!-- confirm-passowrd input  -->
                <div class="form-group">
                    <span for="conffirm-password">Confirm password <sup>*</sup></span>
                    <input type="password" name="userConfirmPassword" value="<?php echo $data['confirm-password'] ?>" class="form-control form-control-lg <?php echo (!empty($data['confirm-password_err']) ? 'is-invalid' : '') ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm-password_err'] ?></span>
                </div>
                <div>
                    <input type="submit" value="Register" class="btn btn-success">
                    <a href="<?php echo URLROOT; ?>users/login" class="btn btn-secondary">Have you an account? Log in</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include_once APPROOT . '/views/inc/footer.inc.php'; ?>