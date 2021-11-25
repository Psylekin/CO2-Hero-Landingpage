<?php

$ref = array_key_exists("HTTP_REFERER", $_SERVER) ? $_SERVER['HTTP_REFERER'] : null;

if($ref) {
	require_once '../backend/config.php';
	require_once '../backend/core/db/DB.php';


	DB::init(DB_HOST, DB_USER, DB_PASSWORD, 'analytics');

	DB::insert("app_referrer", [
		"referrer" => $ref,
		"timestamp" => time()
	]);
}

header('Location: https://www.subscribepage.com/klimapunks');
exit;

?>