<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
   $txtName=$_POST['txtName'];
   $txtEnroll=$_POST['txtEnroll'];
   $txtDadmis=$_POST['txtDadmis'];
   $txtCourse=$_POST['txtCourse'];
   $txtFee=$_POST['txtFee'];
   $txtAddress=$_POST['txtAddress'];
   $txtSchm=$_POST['txtSchm'];
   $txtTime=$_POST['txtTime'];
   $txtWtmobile=$_POST['txtWtmobile'];
   $txtTotfee=$_POST['txtTotfee'];
   $txtNexpay=$_POST['txtNexpay'];
   $txtDate1=$_POST['txtDate1'];
   $txtAmt1=$_POST['txtAmt1'];
   $txtSno=$_POST['txtSno'];
   $txtBill=$_POST['txtBill'];
   $txtDpay=$_POST['txtDpay'];
   $txtAmount=$_POST['txtAmount'];
   $txtTax= $txtTotfee * (9/100);
   $txtBalance=($txtTax+$txtTotfee)-$txtAmount;
   $txtBdat=$_POST['txtBdat'];
   $txtBname=$_POST['txtBname'];
   $txtDescri=$_POST['txtDescri'];
   $txtCertino=$_POST['txtCertino'];
   $txtIdat=$_POST['txtIdat'];
   $txtIssue=$_POST['txtIssue'];
   $txtGrade=$_POST['txtGrade'];
 
// database insert SQL code
$sql = "INSERT INTO `tbl_studel` (`fldName`,`fldEnroll`, `fldDateofAdmis`,`fldCname`,`fldFee`, `fldAddress`, `fldScheme`,`fldTime`, `fldWtmobile`, `fldTotfee`,`fldNpay`, `fldDate1`, `fldAmt1`,`fldSno`, `fldBno`, `fldDpay`,`fldAmount`, `fldTax`, `fldBalance`,`fldBdate`, `fldBName`, `fldDescri`,`fldCno`, `fldIssuedat`, `fldIssby`,`fldGrade`)
VALUES ('$txtName', '$txtEnroll', ' $txtDadmis', '$txtCourse',' $txtFee', ' $txtAddress', '$txtSchm','$txtTime', '$txtWtmobile','$txtTotfee', '$txtNexpay','$txtDate1', '$txtAmt1', '$txtSno','$txtBill', '$txtDpay', '$txtAmount','$txtTax', ' $txtBalance', '$txtBdat','$txtBname', '$txtDescri', '$txtCertino','$txtIdat', '$txtIssue', '$txtGrade')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: http://localhost/siva/cenpro/html/studel.html");
	exit();
}
else
{
	echo "You Loose";
}

?>