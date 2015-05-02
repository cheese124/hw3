<?php

error_reporting(-1);

ini_set('display_errors', 'On');

//Connect code
$db = new PDO('mysql:host=localhost;dbname=employees;charset=utf8', 'root', 'protodrake124', array(PDO::ATTR_EMULATE_PREPARES => false,

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$emp_no = ($_REQUEST["emp"]);
$firstname = ($_REQUEST["firstname"]);
$lastname = ($_REQUEST["lastname"]);
$birthdate = ($_REQUEST["birthdate"]);
$hiredate = ($_REQUEST["hiredate"]);
$gender = ($_REQUEST["gender"]);

echo "<br>Update successful<br>";

$sql1 = "select * from employees where emp_no =$emp_no";

echo"<br>Old Data<br>";

echo "<table border='1' style='width:100%' table-layout: fixed>";
foreach($db->query($sql1) as $row)
{

	//remove duplicates     
	$remove=0;
	foreach($row as $x)
	{
		unset($row[$remove]);
                $remove++;
        }
	foreach ($row as $key => $value)
	{
		echo "<tr>";
		echo "<td>";
		echo ($key);
		echo "</td>";
		echo "<td>";
		echo ($value);
		echo "</td>";
		echo "</tr>";
	}
}
echo "</table>";


$sql2 = "update employees set birth_date = :birthdate, first_name = :firstname, last_name = :lastname, gender = :gender, hire_date = :hiredate where emp_no=:emp_no; ";
$q = $db->prepare($sql2);
$q->execute(array(':birthdate'=>$birthdate, ':firstname'=>$firstname, ':lastname'=>$lastname, ':gender'=>$gender, ':hiredate'=>$hiredate, ':emp_no'=>$emp_no));

echo"<br>New data<br>"; 

echo "<table border='1' style='width:100%' table-layout: fixed>";
foreach($db->query($sql1) as $row)
{       

        //remove duplicates     
        $remove=0;
        foreach($row as $x)
        {       
                unset($row[$remove]);
                $remove++;
        }          
        foreach ($row as $key => $value) 
        {       
                echo "<tr>"; 
                echo "<td>"; 
                echo ($key); 
                echo "</td>";
                echo "<td>"; 
                echo ($value);
                echo "</td>";
                echo "</tr>";
        }
}
echo "</table>";

echo "<br><a href='index.php'>Click here to retuen to the home page</a><br>";

?>
