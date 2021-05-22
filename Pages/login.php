<!doctype html>
<html lang="en">
<head>
    <?php include '../Blocks/headerLibs.php'; ?>
    <script type="application/javascript" src="../lib/js/login.js"></script>
    <title>Login</title>
</head>

<body class="bg-instant">
<?php include '../Blocks/navigation.php'; ?>

<div class="jumbotron bg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="display-4 text-white">Login</h1>
            </div>
        </div>
    </div>
</div>

<div class="container text-white">
    <div class="row">
        <div class="col-md-4">
            <form id="formLogin" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="emailLogin">Enter email:</label>
                    <input autofocus class="form-control" id="emailLogin" name="emailLogin" placeholder="Email" required
                           type="email" value="">
                </div>

                <div class="form-group">
                    <label for="passwordLogin">Enter password:</label>
                    <input class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Password" required
                           type="password">
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            Dont have an account? <a href="registration.php"><strong> Sign up</strong></a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btnpoint" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../Blocks/footerLibs.php'; ?>
</body>
</html>
