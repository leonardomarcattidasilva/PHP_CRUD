<?php
$server = 'localhost';
$DB = 'b7web_mod6';
$user = 'leo';
$password = 'Aa119539$';

try {
   $conection = new PDO("mysql:dbname=$DB;host=$server", "$user", "$password");
} catch (Throwable $th) {
   echo 'Erro linha: ' . $th->getLine() . "<br>";
   echo ('Código: ' . $th->getMessage());
};
