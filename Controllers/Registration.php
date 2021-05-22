<?php

require("../Core/DB.php");
require("../Model/User.php");

use Core\DB;
use Model\User;

/**
 * @var User
 */
$user = new User();
if (isset($_POST['iaAdminRegister']))
    $user->setIsAdmin($_POST['iaAdminRegister']);
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
            "(login, password, name, is_admin) values" .
            "('" . $user->getLogin() . "', '" . $user->getPassword() . "', '" . $user->getName() . "'," . (int)$user->getIsAdmin() . ")"
        );

        echo json_encode([
            'success' => $res,
            'user' => $user->getUserData(),
            'error' => $res ? $conn : ''
        ]);

        $conn->close();
    }
}