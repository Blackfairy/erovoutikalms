<?php
$dbusername = 'root';
$dbpassword = '';
try {
$pdo = new PDO("mysql:host=localhost;dbname=erovoutikalms", $dbusername, $dbpassword);
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
