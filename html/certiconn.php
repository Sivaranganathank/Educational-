<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
   $txtMobile=$_POST['txtMobile'];
   $txtEnroll=$_POST['txtEnroll'];
   $txtName=$_POST['txtName'];
   $txtCourse=$_POST['txtCourse'];
   $txtCerti=$_POST['txtCerti'];
   $txtDate=$_POST['txtDate'];
   $txtIssued=$_POST['txtIssued'];
   $txtGrade=$_POST['txtGrade'];
  
// database insert SQL code
$sql = "INSERT INTO `tbl_certi` (`fldMobile`,`fldEnroll`,`fldName`,  `fldCourse`,`fldCerti`, `fldDate`,`fldIssued`, `fldGrade`)
VALUES ('$txtMobile','$txtEnroll','$txtName',  ' $txtCourse', '$txtCerti',' $txtDate', ' $txtIssued', '$txtGrade')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: http://localhost/siva/cenpro/html/certificate.html");
	exit();
}
else
{
	echo "You Loose";
}

?>