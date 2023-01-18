<?php 

require_once("vendor/DB/Sql.php");

    
$sql = new Sql();

$results = $sql->select("SELECT * FROM tb_users");

echo json_encode($results);