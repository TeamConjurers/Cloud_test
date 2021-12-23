<?php 
// DB credentials.
define('DB_HOST','remotemysql.com');
define('DB_USER','HDXEzB93Nu');
define('DB_PASS','asb94fnJLA');
define('DB_NAME','HDXEzB93Nu');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
