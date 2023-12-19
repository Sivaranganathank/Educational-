<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
   $txtCname=$_POST['txtCname'];
   $txtSess=$_POST['txtSess'];
   $txtName=$_POST['txtName'];
   $txtFname=$_POST['txtFname'];
   $txtOccu=$_POST['txtOccu'];
   $txtIncome=$_POST['txtIncome'];
   $txtDOB=$_POST['txtDOB'];
   $txtAge=$_POST['txtAge'];
   $txtGender=$_POST['txtGender'];
   $txtEduqua=$_POST['txtEduqua'];
   $txtReligion=$_POST['txtReligion'];
   $txtCastecat=$_POST['txtCastecat'];
   $txtCaste=$_POST['txtCaste'];
   $txtCanoccu=$_POST['txtCanoccu'];
   $txtColl=$_POST['txtColl'];
   $txtAddress=$_POST['txtAddress'];
   $txtMobile=$_POST['txtMobile'];
   $txtWtmobile=$_POST['txtWtmobile'];
   $txtEmail=$_POST['txtEmail'];
   $txtId=$_POST['txtId'];
   $txtNum=$_POST['txtNum'];
   $txtDate=$_POST['txtDate'];
   $txtTime=$_POST['txtTime'];
   $txtTfee=$_POST['txtTfee'];
   $txtMpay=$_POST['txtMpay'];
   $txtInitial=$_POST['txtInitial'];
   $txtScheme=$_POST['txtScheme'];
   $url = "https://www.google.com/";

   
 
 
// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`fldCName`, `fldSession`, `fldName`, `fldFname`,`fldOccu`, `fldIncome`, `fldDob`,`fldAge`, `fldGender`, `fldEduqua`,`fldReligion`, `fldCastecat`, `fldCaste`,`fldCanoccu`, `fldColl`, `fldAddress`,`fldMobile`, `fldWtmobile`, `fldEmail`,`fldId`, `fldNum`, `fldDate`,`fldTime`, `fldTfee`, `fldMpay`,`fldInitial`, `fldScheme`)VALUES ('$txtCname', '$txtSess', ' $txtName', '$txtFname',' $txtOccu', ' $txtIncome', '$txtDOB','$txtAge', '$txtGender', '$txtEduqua','$txtReligion', '$txtCastecat', '$txtCaste','$txtCanoccu', '$txtColl', '$txtAddress','$txtMobile', ' $txtWtmobile', '$txtEmail','$txtId', '$txtNum', '$txtDate','$txtTime', '$txtTfee', '$txtMpay','$txtInitial', '$txtScheme')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: http://localhost/siva/cenpro/html/admisfinal.html");
	exit();
}
else
{
	echo "You Loose";
}

?>