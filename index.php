<?php
require ("Core/DB.php");

use Core\DB;
DB::getConnection();

header('Location: Pages/home.php');