<?php


namespace Repository;

require_once ("../Core/DB.php");
require_once("../Model/Post.php");

use Model\Post;
use Core\DB;

class PostRepository
{
    public static function getAll():array
    {
        $posts = [];
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from post"
        );
        while ($post = $res->fetch_object())
            array_push($posts, $post);

        return $posts;
    }
    public static function getPostsByUser($user_id): array
    {
        $posts = [];
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from post where admin_id=".$user_id." "
        );
        while ($post = $res->fetch_object())
            array_push($posts, $post);

        return $posts;
    }
}