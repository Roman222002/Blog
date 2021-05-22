<?php
include 'Blocks/navigation.php';
include 'Blocks/libs.php';

?>
    <html lang="en">
    <head>
        <link href="/css/form.css" rel="stylesheet">
        <script type="application/javascript" src="/js/login.js"></script>
        <title>Login</title>
    </head>
    <body>
    <div class="container form-container">
        <form id="formRegistration">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                <small id="nameHelp" class="form-text text-muted">You should use your real name</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
    </html>

<?php

