<!doctype html>
<html lang="en">
<head>
    <?php include '../Blocks/headerLibs.php'; ?>
    <script type="application/javascript" src="../lib/js/registration.js"></script>
    <title>Register</title>
</head>

<body class="bg-instant">
<?php include '../Blocks/navigation.php'; ?>

<div class="jumbotron bg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="display-4 text-white">Register</h1>
            </div>
        </div>
    </div>
</div>

<div class="container text-white">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" id="formRegistration" method="POST">
                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">E-mail Address</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="emailRegister" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nameRegister" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="passwordRegister" required>
                        <span class="help-block error-short-pass">
                            <strong>The password must be at least 8 characters.</strong>
                        </span>
                        <span class="help-block error-different-pass">
                            <strong>The password confirmation does not match.</strong>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="form-control" name="passwordRegisterRepeat" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary btnpoint">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../Blocks/footerLibs.php'; ?>
</body>
</html>