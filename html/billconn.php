<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
   $txtBill=$_POST['txtBill'];
   $txtDate=$_POST['txtDate'];
   $txtWtmobile=$_POST['txtWtmobile'];
   $txtName=$_POST['txtName'];
   $txtAmount=$_POST['txtAmount'];
   $txtRupee=$_POST['txtRupee'];
   $txtCourse=$_POST['txtCourse'];
   $txtOpay=$_POST['txtOpay'];
   $txtH1=$_POST['txtH1'];
   $txtA1=$_POST['txtA1'];
   $txtH2=$_POST['txtH2'];
   $txtA2=$_POST['txtA2'];
   $txtH3=$_POST['txtH3'];
   $txtA3=$_POST['txtA3'];
   $txtH4=$_POST['txtH4'];
   $txtA4=$_POST['txtA4'];
   $txtH5=$_POST['txtH5'];
   $txtA5=$_POST['txtA5'];
   $txtH6=$_POST['txtH6'];
   $txtA6=$_POST['txtA6'];
   $txtH7=$_POST['txtH7'];
   $txtA7=$_POST['txtA7'];
   $txtTot=$txtAmount;
   
// database insert SQL code
$sql = "INSERT INTO `tbl_bill` (`fldBill`,`fldDate`,`fldWtmobile`, `fldName`, `fldAmount`,`fldRupee`, `fldCourse`,`fldOpay`, `fldH1`,`fldA1`, `fldH2`, `fldA2`,`fldH3`, `fldA3`, `fldH4`,`fldA4`, `fldH5`, `fldA5`,`fldH6`, `fldA6`, `fldH7`,`fldA7`, `fldTot`)
VALUES ('$txtBill','$txtDate','$txtWtmobile', '$txtName', ' $txtAmount', '$txtRupee',' $txtCourse', ' $txtOpay', '$txtH1','$txtA1', '$txtH2', '$txtA2','$txtH3', '$txtA3', '$txtH4','$txtA4', '$txtH5', '$txtA5','$txtH6', ' $txtA6', '$txtH7','$txtA7', '$txtTot')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: http://localhost/siva/cenpro/html/bill.html");
	exit();
}
else
{
	echo "You Loose";
}

?>