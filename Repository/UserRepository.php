<?php

namespace Repository;


use Core\DB;
use Model\User;

class UserRepository
{
    /**
     * @param $id
     * @return User|null
     */
    public static function getById($id){
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from user where id='$id';"
        );
        $obj = $res->fetch_object();
        if($obj == null) return null;
        return new User($obj);
    }
}