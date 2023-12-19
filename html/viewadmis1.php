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
$txtMobile=$_POST['txtMobile'];


if($con->connect_errno)
{
	echo $con->	connect_errno;
	die("Sorry Database connection fails...");
}


$sql="SELECT * FROM tbl_contact WHERE fldMobile=$txtMobile";
$data = mysqli_query($con,$sql);

$total = mysqli_num_rows($data);

echo $total;

if($total!=0)
	{
		?>
	<table class="dbresult">
	<tr>
					<th>Course Name</th>
					<th>Session</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>Father Occupation</th>
					<th>Income</th>
					<th>DOB</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Educational Qualification</th>
					<th>Religion</th>
					<th>Caste Category</th>
					<th>Caste</th>
					<th>Candidate Occupation</th>
					<th>College/School/Concern Name</th>
					<th>Address</th>
					<th>Mobile Number</th>
					<th>WhatsApp</th>
					<th>Email</th>
					<th>Id Proof</th>
					<th>Id Number</th>
					<th>Date</th>
					<th>Time</th>
					<th>Total Fee</th>
					<th>Method of Payment</th>
					<th>Initial Pay</th>
					<th>Scheme</th>
			</tr>

<?php
		while($result = mysqli_fetch_assoc($data))
		{
		echo "<tr>
					<td>".$result['fldCName']."</td>
					<td>".$result['fldSession']."</td>
					<td>".$result['fldName']."</td>
					<td>".$result['fldFname']."</td>
					<td>".$result['fldOccu']."</td>
					<td>".$result['fldIncome']."</td>
					<td>".$result['fldDob']."</td>
					<td>".$result['fldAge']."</td>
					<td>".$result['fldGender']."</td>
					<td>".$result['fldEduqua']."</td>
					<td>".$result['fldReligion']."</td>
					<td>".$result['fldCastecat']."</td>
					<td>".$result['fldCaste']."</td>
					<td>".$result['fldCanoccu']."</td>
					<td>".$result['fldColl']."</td>
					<td>".$result['fldAddress']."</td>
					<td>".$result['fldMobile']."</td>
					<td>".$result['fldWtmobile']."</td>
					<td>".$result['fldEmail']."</td>
					<td>".$result['fldId']."</td>
					<td>".$result['fldNum']."</td>
					<td>".$result['fldDate']."</td>
					<td>".$result['fldTime']."</td>
					<td>".$result['fldTfee']."</td>
					<td>".$result['fldMpay']."</td>
					<td>".$result['fldInitial']."</td>
					<td>".$result['fldScheme']."</td>
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