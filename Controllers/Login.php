<?php
require ("../Core/DB.php");

use Core\DB;
use Model\User;
$login = $_POST['emailLogin'];
$password = $_POST['passwordLogin'];

Login::LoginUser($login, $password);

class Login{
    public static function LoginUser($login, $password){
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from user where login='" . $login . "' and password='" . md5($password) . "'"
        );
        /**
         * @var User $user
         */
        $user = $res->fetch_object();

        if($user === null)
            echo json_encode(array('success' => 0));
        else
            echo json_encode(array('success' => 1, 'user'=>json_encode($user)));

        $conn->close();
    }
}
