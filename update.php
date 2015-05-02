<?php
error_reporting(-1);

ini_set('display_errors', 'On');

//Connect code
$db = new PDO('mysql:host=localhost;dbname=employees;charset=utf8', 'root', 'protodrake124', array(PDO::ATTR_EMULATE_PREPARES => false,

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$emp = ($_REQUEST["emp"]);

$sql = "select * from employees where emp_no =$emp";

echo "<table border='1' style='width:100%' table-layout: fixed>";
foreach($db->query($sql) as $row)
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
echo "<br><br>";
echo "Please enter the new information below. Note emp_no can not be changed";
echo "<form name='Insert Employee' action='update2.php' method='get'>";
echo "<input type='hidden' name='emp' value='$emp'>";
echo "First Name <input type=text name='firstname' placeholder='First Name'><br>";
echo "Last Name <input type=text name='lastname' placeholder='Last Name'><br>";
echo "Birth data <input type=text name='birthdate' placeholder='yyyy-mm-dd'><br>";
echo "Hire data <input type=text name=hiredate placeholder='yyyy-mm-dd'><br>";
echo "<input type='radio' name='gender' value='M'>Male<br>";
echo "<input type='radio' name='gender' value='F'>Female<br>";

echo "<input type=submit id='Insert' value='Add Employee'>";
echo "</form>";

echo "<br><a href='index.php'>Click here to retuen to the home page</a><br>";

?>
