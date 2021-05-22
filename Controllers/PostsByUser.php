<?php


namespace Controller;

require ("../Core/DB.php");
require("../Model/Post.php");
require("../Repository/PostRepository.php");

use Repository\PostRepository;
use Model\Post;
use Core\DB;

$user_id = $_POST['admin_id'];

echo json_encode(array('success' => 1, 'posts'=>PostRepository::getPostsByUser($user_id)));