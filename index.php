<?php

define('__ROOT__', dirname(dirname(__FILE__)));

require_once("Core/DB.php");
require_once("Core/AbstractModel.php");
require_once("Model/User.php");
require_once("Model/Post.php");
require_once("Model/Like.php");
require_once("Repository/UserRepository.php");
require_once("Repository/PostRepository.php");


use Core\DB;

//Autoloader::register();

DB::getConnection();

header('Location: Pages/home.php');