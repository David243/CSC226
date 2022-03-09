<?php
$name = 'David';
$credits = 15;
$decimal = 2.5;
var_dump($name);
echo "<br>";
var_dump($credits);
echo "<br>";
var_dump($decimal);
echo "<br>";
echo "Welcome ".$name."<br>";
if($credits >= 12)
{
    echo 'FULL TIME STUDENT';
}
else
{
    echo 'PART TIME STUDENT';
}
echo "<br><br><br><br><br>"."File Name: ";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>"."Server Software: ";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>"."Host ip address: ";
echo $_SERVER['HTTP_HOST'];
echo "<br>"."Browser Name: ";
echo $_SERVER['HTTP_USER_AGENT'];
?>
