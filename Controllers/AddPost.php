<?php
require ("../Core/DB.php");
require("../Model/Post.php");

use Model\Post;
use Core\DB;

$post = new Post();
$post->setAdminId($_POST['admin_id']);
$post->setColor($_POST['color']);
$post->setImage($_POST['image']);
$post->setTitle($_POST['title']);
$post->setContent($_POST['content']);
AddPost::createPost($post);

class AddPost
{
    public static function createPost(Post $post)
    {
        $conn = DB::getConnection();
        $res = $conn->query
        (
            "INSERT INTO post" .
            "(title, content, image, color, admin_id) values" .
            "('" . $post->getTitle() . "', '" . $post->getContent() . "', 
            '" . $post->getImage() . "', '" . $post->getColor() . "'," . $post->getAdminId() . ")"
        );
        if($res == false)
            echo json_encode(array('success' => 0, 'error'=>mysqli_error($conn)));
        else
            echo json_encode(array('success' => 1, 'post'=>$post));

        $conn->close();
    }
}