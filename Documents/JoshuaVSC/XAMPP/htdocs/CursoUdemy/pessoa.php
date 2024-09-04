<?php

$pessoa = array();

array_push($pessoa, array(
    'nome' => 'Joshua',
    'idade' => '20'
));

array_push($pessoa, array(
    'nome' => 'Arthur',
    'idade' => '22'
));

echo json_encode($pessoa);

?>