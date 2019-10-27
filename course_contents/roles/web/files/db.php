<?php

$connection = new PDO('mysql:host=db1;dbname=demo', 'demo', 'demo');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn(); 

