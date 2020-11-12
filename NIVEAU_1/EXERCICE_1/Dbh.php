<?php
require_once 'Medoo.php';

use Medoo\Medoo;

$database = new Medoo ([
    'database_type' => 'mysql',
    'database_name' => 'BDDNIV2EXE1',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',

    //'port' => 3306,

    //'charset' => 'utf8mb4',
   // 'Socket' =>  '/Applications/MAMP/tmp/mysql/mysql.sock'
]);
?>