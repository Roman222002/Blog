<?php
require ("../Core/DB.php");
require("../Model/Post.php");

use Model\Post;
use Core\DB;

/**
 * @var Post $post
 */
$post = new Post();
$post->setId($_POST['id']);
$post->setColor($_POST['color']);
$post->setImage($_POST['image']);
$post->setTitle($_POST['title']);
$post->setContent($_POST['content']);
UpdatePost::updatePosts($post);

class UpdatePost
{
    public static function updatePosts(Post $post)
    {
        /**
         * @var Post $post
         */
        $conn = DB::getConnection();
        $res = $conn->query
        (
            "UPDATE post SET " .
            "title='".$post->getTitle()."', content='".$post->getContent()."', ".
            "image='".$post->getImage()."', color='".$post->getColor()."'".
            " WHERE id=".$post->getId()." "
        );
        if($res == false)
            echo json_encode(array('success' => 0, 'error'=>mysqli_error($conn)));
        else
            echo json_encode(array('success' => 1, 'post'=>json_encode($post)));

        $conn->close();
    }
}