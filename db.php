<?php
	# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = '';
	const DB_NAME = 'apis';
	const DB_TABLENAME = 'users';
	
	try{
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		die('Connection faild');
	}
?>