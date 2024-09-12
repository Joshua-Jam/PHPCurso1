<?php

require_once("config.php");

sql = new Sql();

$usuarios = sql->select("SELECT + FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

echo implode(",", $headers)

$file = fopen("datalog.txt", "w+");

fwrite($file, date("y-m-d H:i:s"));

?>