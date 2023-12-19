<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
  // $dbhost = 'localhost:3306';
  // $dbuser = 'root';
  // $dbpass = '';
  // $conn = mysql_connect($dbhost, $dbuser, $dbpass);
// Instead using above four lines use the next line script for getting connection   
//$con = mysql_connect();

//<?php
$con=new mysqli("localhost","root","","mydatabase2");
//mysqli_set_charset($con,'utf8');
if($con->connect_errno)
{
	echo $con->	connect_errno;
	die("Sorry Database connection fails...");
}
else
{
echo "Connected successfully";	
}
?>


<?
//if(! $conn )
//{
//  die('Could not connect: ' . mysql_error());
//}
//echo 'Connected successfully';
//mysql_close($conn);
?>
</body>
</html>
