<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
   $txtName=$_POST['txtName'];
   $txtAddress=$_POST['txtAddress'];
   $txtMobile=$_POST['txtMobile'];
   $txtWtmobile=$_POST['txtWtmobile'];
   $txtQua=$_POST['txtQua'];
   $txtCourse=$_POST['txtCourse'];
   $txtDate=$_POST['txtDate'];
   $txtTime=$_POST['txtTime'];
   
   $txtKnown=$_POST['txtKnown'];
   $Known=implode($txtKnown);
   
   $txtEnq=$_POST['txtEnq'];
   
   $txtAbout=$_POST['txtAbout'];
   $About=implode($txtAbout);
   
   $txtDetail=$_POST['txtDetail'];
   $txtFee=$_POST['txtFee'];
   $txtFoll1=$_POST['txtFoll1'];
   $txtFoll2=$_POST['txtFoll2'];
   $txtFoll3=$_POST['txtFoll3'];

// database insert SQL code
$sql = "INSERT INTO `tbl_enq` (`fldName`,`fldAddress`,`fldMobile`, `fldWtmobile`,`fldQua`,`fldCourse`,`fldDate`,`fldTime`, `fldKnown`,`fldEnq`,`fldAbout`,`fldDetail`,`fldFee`,`fldFoll1`,`fldFoll2`,`fldFoll3`)VALUES 
( '$txtName','$txtAddress','$txtMobile', ' $txtWtmobile','$txtQua', '$txtCourse','$txtDate','$txtTime','$Known','$txtEnq', '$About','$txtDetail','$txtFee','$txtFoll1','$txtFoll2','$txtFoll3')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: http://localhost/siva/cenpro/html/enqform.html");
	exit();
}
else
{
	echo "You Loose";
}

?>


