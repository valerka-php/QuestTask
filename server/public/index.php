<?php

require_once '../vendor/autoload.php';

use Src\Router;

Router::run($_SERVER['REQUEST_URI']);


//$db = new PDO('mysql:host=mysql;dbname=quest_db','root','0000');
//$query = $db->query('SELECT * FROM new_table');
//
//var_dump($query->fetchAll());
//echo 'test';

