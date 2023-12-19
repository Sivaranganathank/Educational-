<html>
<body>
<?php
$cname=$_POST['courname'];
$sess=$_POST['session'];
$canname=$_POST['name'];
$fname=$_POST['fathername'];
$foccu=$_POST['occupation'];
$fincome=$_POST['income'];
$dob=$_POST['DOBirth'];
$age=$_POST['age'];
$gen=$_POST['gender'];
$eduqua=$_POST['edu'];
$reli=$_POST['religion'];
$cascat=$_POST['castecat'];
$cas=$_POST['caste'];
$occupa1=$_POST['occu1'];
$colsch=$_POST['coll'];
$add=$_POST['address'];
$mob=$_POST['mobile'];
$wtmob=$_POST['wtmobile'];
$email=$_POST['email'];
$idp=$_POST['id'];
$idnum=$_POST['num'];
$dat=$_POST['date'];
$tim=$_POST['t1'];
$tfee=$_POST['fee'];
$mopay=$_POST['pay'];
$inipay=$_POST['initial'];
$schm=$_POST['scheme'];


$con=new mysqli("localhost","root","","mydatabase1");
  	   
	   $sql="insert into addm values($cname,$sess,$canname,$fname,$foccu,$fincome,$dob,$age,$gen,$eduqua,$reli,$cascat,$cas,$occupa1,$colsch,$add,$mob,$wtmob,$email,$idp,$idnum,$dat,$tim,$tfee,$mopay,$inipay,$schm)";
			if($con->query($sql))
			{
				echo "data stored";
			}
			else
			{
		   echo "insert data failed";
			}
			
			
?>
</body>
</html>
