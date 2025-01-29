<?php
require_once 'conection.php';

$sql_select_all = "select id, nome, idade, ifnull(email, '-') as email from usuarios";
$prep = $conection->prepare($sql_select_all);
$prep->execute();
