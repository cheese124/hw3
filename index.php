<?php

error_reporting(-1);

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=localhost;dbname=employees;charset=utf8', 'root', 'protodrake124', array(PDO::ATTR_EMULATE_PREPARES => false,

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$sql = 'SELECT * FROM departments LIMIT 5';

foreach($db->query($sql) as $row) {
print_r($row);
print("<br> /");

}

print_r($db);
?>
