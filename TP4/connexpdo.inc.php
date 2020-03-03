<?php

require_once 'js.php';

function connexpdo (string $db)
{
	$sgbd = "mysql";
	$host = "localhost";
	$charset = "utf8";
	$user = "rakl";
	$pass = "4079871724";

	try
	{
		$pdo = new PDO("$sgbd:host=$host;dbname=$db;charset=$charset", $user, $pass);
		// Pour que PDO relaie sous forme d'exception PHP les erreurs SQL :
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	catch (PDOException $e)
	{
		displayException($e);
		exit;
	}
}

?>