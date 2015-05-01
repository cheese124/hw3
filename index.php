<?php

error_reporting(-1);

ini_set('display_errors', 'On');

//Connect code
$db = new PDO('mysql:host=localhost;dbname=employees;charset=utf8', 'root', 'protodrake124', array(PDO::ATTR_EMULATE_PREPARES => false,

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//Pages
echo '<a href="index.php?page=1">Who is the highest paid employee?</a><br>';
echo '<a href="index.php?page=2">Who is the highest paid employee between 1985 and 1981?</a><br>';
echo '<a href="index.php?page=3">Which department currently has highest paid department manager?</a><br>';
echo '<a href="index.php?page=4">What are the titles of all the departments?</a><br>';
echo '<a href="index.php?page=5">Who are the current department heads?</a><br>';
echo '<a href="index.php?page=6">Who is highest paid employee that is not a department head?</a><br>';
echo '<a href="index.php?page=7">Who is currently the lowest paid employee?</a><br>';
echo '<a href="index.php?page=8">How many employees currently work in each department?</a><br>';
echo '<a href="index.php?page=9">How much does each department currently spend on salaries? </a><br>';
echo '<a href="index.php?page=10">How much is currently spent for all salaries?</a><br>';


//Page 1
if($_GET['page']==1)
{
	print($_GET['page']);
}

/*
$sql = 'SELECT * FROM departments LIMIT 5';

foreach($db->query($sql) as $row) {
print_r($row);
print("<br> /");

}

print_r($db);
*/

?>
