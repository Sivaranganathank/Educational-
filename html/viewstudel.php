<html>
<body>
<style>

body
{
	background-image:url('../image/bg14n1.jpg');
	background-repeat:no-repeat;
}	


.dbresult,.dbresult td,.dbresult th
{
	border: 1px Solid Black;
	border-collapse:collapse;
	padding:8px;
}
.dbresult
{
	width:800px;
	margin:auto;
}

.dbresult tr:nth-child(odd)
{
	background-color:White;
}

.dbresult tr:nth-child(even)
{
	background-color:lightcyan;
}

button 
{
  font-size: 20px;
  border: solid #76A89D;
  cursor: pointer;
  text-align: center;
  width:160px;
  height:40px;
  color:white;
  border-radius: 25px;
  background-color:#76A89D;
  margin-top:20px;
}

a
{
	 text-decoration:none;
	 color:white;
}
</style>
<?php
$con=new mysqli("localhost","root","","db_contact");

$txtName=$_POST['txtName'];
$txtWtmobile=$_POST['txtWtmobile'];


if($con->connect_errno)
{
	echo $con->	connect_errno;
	die("Sorry Database connection fails...");
}


$sql="SELECT * FROM tbl_studel WHERE fldWtmobile=$txtWtmobile";
$data = mysqli_query($con,$sql);

$total = mysqli_num_rows($data);

echo $total;

if($total!=0)
	{
		?>
	<table class="dbresult">
	<tr>
					<th>Name</th>
					<th>Enroll NO</th>
					<th>Date of Admission</th>
					<th>Course</th>
					<th>NetFees</th>
					<th>Address</th>
					<th>Scheme</th>
					<th>Time</th>
					<th>Whatsapp No</th>
					<th>Total Fees</th>
					<th>Balance Pay Amount</th>
					<th>Next Pay Date</th>
					<th>Next Pay Amount</th>
					<th>S.No</th>
					<th>Bill No</th>
					<th>Date of payment</th>
					<th>Amount</th>
					<th>Tax</th>
					<th>Balance</th>
					<th>Date of Book Issue</th>
					<th>Book Name</th>
					<th>Description</th>
					<th>Certificate No </th>
					<th>Date of Issue</th>
					<th>Issued By</th>
					<th>Overall Grade</th>
			</tr>

<?php
		while($result = mysqli_fetch_assoc($data))
		{
		echo "<tr>
					<td>".$result['fldName']."</td>
					<td>".$result['fldEnroll']."</td>
					<td>".$result['fldDateofAdmis']."</td>
					<td>".$result['fldCname']."</td>
					<td>".$result['fldFee']."</td>
					<td>".$result['fldAddress']."</td>
					<td>".$result['fldScheme']."</td>
					<td>".$result['fldTime']."</td>
					<td>".$result['fldWtmobile']."</td>
					<td>".$result['fldTotfee']."</td>
					<td>".$result['fldNpay']."</td>
					<td>".$result['fldDate1']."</td>
					<td>".$result['fldAmt1']."</td>
					<td>".$result['fldSno']."</td>
					<td>".$result['fldBno']."</td>
					<td>".$result['fldDpay']."</td>
					<td>".$result['fldAmount']."</td>
					<td>".$result['fldTax']."</td>
					<td>".$result['fldBalance']."</td>
					<td>".$result['fldBdate']."</td>
					<td>".$result['fldBName']."</td>
					<td>".$result['fldDescri']."</td>
					<td>".$result['fldCno']."</td>
					<td>".$result['fldIssuedat']."</td>
					<td>".$result['fldIssby']."</td>
					<td>".$result['fldGrade']."</td>
	</tr>
		";
		}
}
else
{
	echo"NO Records Found";
}
?>
	</table> 
	<div >
			<a href="..\html\viewdel.html"><button type="button"><span></span>Back</button></a>
     </div>
	 
</body>
</html>