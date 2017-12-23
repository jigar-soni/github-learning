<?php
//require('csv.php');
require('di.php');
$con=mysqli_connect('localhost','root','','amazon');
$data=csv_to_array('file.csv',true,',');
//$lenght=sizeof($data);
for($i=0;$i<78;$i++)
{
	$csvno=1;
$q=	"INSERT INTO 'main'('attributes in csv') VALUES('$data[$i]')";
$result = mysqli_query($con,$q);
}
if($result)
	echo "inserted sucessfully";
else
	echo"error";

?>
