<?php

error_reporting(-1);

ini_set('display_errors', 'On');

//Connect code
$db = new PDO('mysql:host=localhost;dbname=employees;charset=utf8', 'root', 'protodrake124', array(PDO::ATTR_EMULATE_PREPARES => false,

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$firstname = ($_REQUEST["firstname"]);
$lastname = ($_REQUEST["lastname"]);
$birthdate = ($_REQUEST["birthdate"]);
$hiredate = ($_REQUEST["hiredate"]);
$gender = ($_REQUEST["gender"]);


$sql1 = "select * from employees order by emp_no desc limit 1;";

//get the last emp_no
foreach($db->query($sql1) as $row)
{
$emp_no = (($row['emp_no'])) +1;
}

$sql2 = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES ($emp_no, $firstname, $lastname, $birthdate, $hiredate, $gender);";
echo $sql2;

?>
