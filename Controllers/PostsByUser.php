<?php

namespace Controller;

require("../Core/DB.php");
require("../Model/Post.php");
require("../Repository/PostRepository.php");

use Repository\PostRepository;

$user_id = $_POST['admin_id'];

echo json_encode([
    'success' => true,
    'posts' => json_encode(PostRepository::getPostsByUser($user_id))
]);