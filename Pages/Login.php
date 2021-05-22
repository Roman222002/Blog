<?php
include '../Blocks/navigation.php';
include '../Blocks/libs.php';
//TODO CHECK IF USER LOGGED IN -> REDIRECT TO HOMEPAGE BY heared()
?>
<html lang="en">
<head>
    <link href="../css/form.css" rel="stylesheet">
    <script type="application/javascript" src="../js/login.js"></script>
    <title>Login</title>
</head>
<body>
<div class="container form-container">
<form id="formLogin">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="emailLogin" name="emailLogin" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/Pages/Registration.php">Register</a>
</form>
</div>
</body>
</html>

<?php

