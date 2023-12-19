<head>
   <title>Bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" type="text/css" href="..\css\certificate.css"></link>
</head>
<style>
body
{
	background-image:url('../image/bg14n2.jpg');

}

.mob
{
	color:orange;
	margin-left:45px;
}

.en
{
	color:orange;
	margin-left:10px;
}
</style>
<?php
$con = new mysqli("localhost", "root", "", "db_contact");
$txtName = $_POST['txtName'];
$txtMobile = $_POST['txtMobile'];


if ($con->connect_errno) {
    echo $con->connect_errno;
    die("Sorry, the database connection failed...");
}

$sql="SELECT * FROM tbl_certi WHERE fldMobile='$txtMobile'  AND fldName='$txtName'";
$data = mysqli_query($con, $sql);

$total = mysqli_num_rows($data);

echo $total;

if ($total != 0) {
    while ($result = mysqli_fetch_assoc($data)) {
				   $Mobile=$result['fldMobile'];
				   $Enroll=$result['fldEnroll'];
				   $Name=$result['fldName'];
				   $Course=$result['fldCourse'];
				   $Certi=$result['fldCerti'];
				   $Date=$result['fldDate'];
				   $Issued=$result['fldIssued'];
				   $Grade=$result['fldGrade'];
        ?>
				<center>
						<div>
						<table>
						<td>
						<form>
						<h1>Certificate Issued Details</h1><br>

						 <label for="enrol" class="mob">Mobile Number:</label>
						 <input type="text"  name="txtMobile"  value='<?=$Mobile?>' size="10px" class="mobile" >
						  
						  <label for="enrol" class="en">Enroll Number:</label>
						  <input type="text"  name="txtEnroll"  value='<?=$Enroll?>' size="10px" class="enroll" ><br>
						  
						  <label for="name" class="nam">Name:</label>
						  <input type="text"  name="txtName"  value='<?=$Name?>' size="20px" class="name" ><br>
						  
						  <label for="cou" class="cou">Course:</label>
						  <input type="text"  name="txtCourse"  value='<?=$Course?>' size="20px" class="course" ><br>
						  
						   <label for="cer" class="cer">Certificate No:</label>
						  <input type="text"  name="txtCerti"  value='<?=$Certi?>' size="20px" class="certi" ><br>
						  
						   <label for="dat" class="dat">Date of issue:</label>
						  <input type="text"  name="txtDate"  value='<?=$Date?>' size="20px" class="date" ><br>
						  
						   <label for="issu" class="issu">Issued By:</label>
						  <input type="text"  name="txtIssued"  value='<?=$Issued?>' size="20px" class="issued" ><br>
						  
						   <label for="gra" class="gra">Overall Grade:</label>
						  <input type="text"  name="txtGrade" value='<?=$Grade?>' size="20px" class="grade" ><br>
						</form>
						</td>
						</table> 
						</div>
				</center>
        <?php
    }
} else {
    echo "NO Records Found";
}
?>
<div class="noPrint">
    <a href="../html/viewdel.html"><button type="button"><span></span>Back</button></a>
</div>
