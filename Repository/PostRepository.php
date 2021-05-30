<?php

namespace Repository;

use Core\DB;
use Model\Post;
use Repository\UserRepository;

class PostRepository
{
    public static function getAll(): array
    {
        $posts = [];
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from post"
        );
        /**
         * @var Post $post
         */
        while ($obj = $res->fetch_object()) {
            $post = new Post($obj);
            $post->setUserName(UserRepository::getById($post->getUserId())->getName());
            $post->setLikes(PostRepository::getLikesByPost($post->getId()));
            array_push($posts, $post);

        }
        return $posts;
    }

    public static function getPostsByUser($user_id): array
    {
        $posts = [];
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from post where admin_id=" . $user_id . " "
        );
        /**
         * @var Post $post
         */
        while ($post = $res->fetch_object()) {
            array_push($posts, $post);

        }
        return $posts;
    }

    public static function getPostById($id): Post
    {
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT * from post where id=" . $id . " "
        );
        /**
         * @var Post $post
         */
        $obj = $res->fetch_object();
        $post = new Post($obj);
        $post->setUserName(UserRepository::getById($post->getUserId())->getName());
        $post->setLikes(PostRepository::getLikesByPost($post->getId()));
        return $post;
    }

    public static function getLikesByPost($post_id)
    {
        $conn = DB::getConnection();
        $res = $conn->query(
            "SELECT count(id) as 'count' 
        from likes where post_id='$post_id'"
        );
        $count = $res->fetch_row();
        $conn->close();
        return $count[0];
    }
}