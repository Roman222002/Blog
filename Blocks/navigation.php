<!-- Navigation menu start -->
<nav class="navbar navbar-expand-md navbar-dark bg-nav">
    <a class="navbar-brand" href="">
        <img alt="" class="d-inline-block align-top" src="../media/images/logo.png">
    </a>
    <button aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler collapsed"
            data-target="#navbarsDefault" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link mr-3 d-none d-md-block" data-placement="bottom" data-toggle="tooltip"
                   href="../Pages/home.php" title="Home">
                    <i class="icon-home icons nav-icon"></i>
                </a>
                <a class="nav-link d-md-none" href="../Pages/home.php"><i class="icon-home icons"></i> Home</a>
            </li>

            <!--Maybe feature-->
            <li class="nav-item ">
                <a class="nav-link mr-3 d-none d-md-block" href="/popular" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Popular"><i class="icon-rocket icons nav-icon"></i></a>
                <a class="nav-link d-md-none" href="/popular"><i class="icon-rocket icons"></i> Popular</a>
            </li>
            <!--Maybe feature-->
            <li class="nav-item ">
                <span data-toggle="modal" data-target="#searchModal">
                    <a class="nav-link mr-3 d-none d-md-block" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Search"><i class="icon-magnifier icons nav-icon"></i></a>
                    <a class="nav-link d-md-none" href="#"><i class="icon-magnifier icons"></i> Search</a>
                </span>
            </li>

            <?php echo $_COOKIE["user"] ?
                '
                <li class="nav-item dropdown">
                    <a class="nav-link mr-3 dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="avatar-xs img-fluid rounded-circle" src="../media/images/defaultuser.png"> ' .
                            $_COOKIE["user"]["name"] . '
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../Pages/postCreate.php">Add Post</a>
                        <btn class="dropdown-item" href="../Pages/home.php"
                            onclick="document.cookie = `user= ; expires = Thu, 01 Jan 1970 00:00:00 GMT`">
                            Logout
                        </btn>
                    </div>
                </li>
                ' :
                '
                <li class="nav-item active">
                    <a class="nav-link mr-3 d-none d-md-block" data-placement="bottom" data-toggle="tooltip" href="../Pages/login.php" title="Login">
                        <i class="icon-user icons nav-icon"></i>
                    </a>
                    <a class="nav-link d-md-none" href="../Pages/login.php"><i class="icon-user icons"></i> Login</a>
                </li>
                ';
            ?>
        </ul>
    </div>
</nav>
<!-- Navigation menu end -->

<?php include 'modal.php'; ?>