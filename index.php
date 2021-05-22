<?php
require ("Core/DB.php");

use Core\DB;
DB::getConnection();

include 'Pages/Login.php';