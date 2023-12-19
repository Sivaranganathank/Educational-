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


$sql="SELECT * FROM tbl_enq WHERE fldMobile=$txtMobile";
$data = mysqli_query($con,$sql);

$total = mysqli_num_rows($data);

echo $total;

if($total!=0)
	{
		?>
	<table class="dbresult">
	<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Mobile Number</th>
					<th>WhatsApp</th>
					<th>Qualification</th>
					<th>Course</th>
					<th>Time</th>
					<th>Known About CGS Infotech</th>
					<th>Enquiry Handled By</th>
					<th>About Enquiry</th>
					<th>Details About Enquiry</th>
					<th>Course and Fee Details</th>
					<th>Follow Up 1</th>
					<th>Follow Up 2</th>
					<th>Follow Up 3</th>
			</tr>

<?php
		while($result = mysqli_fetch_assoc($data))
		{
		echo "<tr>
					<td>".$result['fldName']."</td>
					<td>".$result['fldAddress']."</td>
					<td>".$result['fldMobile']."</td>
					<td>".$result['fldWtmobile']."</td>
					<td>".$result['fldQua']."</td>
					<td>".$result['fldCourse']."</td>
					<td>".$result['fldTime']."</td>
					<td>".$result['fldKnown']."</td>
					<td>".$result['fldEnq']."</td>
					<td>".$result['fldAbout']."</td>
					<td>".$result['fldDetail']."</td>
					<td>".$result['fldFee']."</td>
					<td>".$result['fldFoll1']."</td>
					<td>".$result['fldFoll2']."</td>
					<td>".$result['fldFoll3']."</td>
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
