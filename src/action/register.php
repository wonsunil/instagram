<?php

include_once("../model/user.php");
include_once("../lib/function.php");
include_once("../core/DB.php");

use \src\core\DB;

if(session_status() == PHP_SESSION_NONE) session_start();

if($_SERVER["REQUEST_METHOD"] !== "POST") header("Location: http://localhost/instagram/src/main.php");

DB::fetch("insert into user_info values(?, ?, ?, ?)", [...array_values($_POST)]);

alert("회원가입되었습니다");
move("/instagram/src/main.php");