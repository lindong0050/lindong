<?php
//require "comm/functions.php";
require "vendor/autoload.php";

$connection = new PDO("mysql:host=localhost;dbname=php001", 'root', 'Lindong123!');
$orm = new NotORM($connection);

if ($orm) {
	echo "aaaaaaaaa";
}

foreach ($orm->user_tables() as $user) {
	// get all applications ordered by title
	echo "$user[user_name]\n"; // print application title
}

?>