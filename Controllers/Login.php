<?php
require ("../Core/DB.php");

use Core\DB;
use Model\User;
$login = $_POST['emailLogin'];
$password = $_POST['passwordLogin'];

LoginHelper::Login($login, $password);

class LoginHelper{
    public static function Login($login, $password){
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from user where login='" . $login . "' and password='" . $password . "'"
        );
        /**
         * @var User $user
         */
        $user = $res->fetch_object();

        if($user === null)
            echo json_encode(array('success' => 0));
        else
            echo json_encode(array('success' => 1, 'user'=>$user));

        $conn->close();
    }
}
