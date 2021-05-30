<?php

require("../Core/DB.php");
require("../Model/User.php");

use Core\DB;
use Model\User;

/**
 * @var User
 */
$user = new User();

$user->setName($_POST['nameRegister']);
$user->setLogin($_POST['emailRegister']);
$user->setPassword(md5($_POST['passwordRegister']));

Registration::register($user);

class Registration
{

    public static function register(User $user)
    {
        $conn = DB::getConnection();

        $res = $conn->query
        (
            "INSERT INTO user" .
            "(login, password, name) values" .
            "('" . $user->getLogin() . "', '" . $user->getPassword() . "', '" . $user->getName() . "'" . ")"
        );

        echo json_encode([
            'success' => $res,
            'user' => $user->getUserData(),
            'error' => mysqli_error($conn)
        ]);

        $conn->close();
    }
}