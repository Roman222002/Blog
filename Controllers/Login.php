<?php
require("../Core/DB.php");

use Core\DB;
use Model\User;

$login = $_POST['emailLogin'];
$password = $_POST['passwordLogin'];

Login::LoginUser($login, $password);

class Login
{

    public static function LoginUser($login, $password)
    {
        $conn = DB::getConnection();

        /**
         * @var User $user
         */
        $user = $conn->query(
            "SELECT * from user where login='" . $login . "' and password='" . md5($password) . "'"
        )->fetch_object();

        echo json_encode([
            'success' => !!$user,
            'user' => !!$user ? json_encode($user) : ''
        ]);

        $conn->close();
    }
}
