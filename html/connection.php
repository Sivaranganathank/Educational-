<?php
$con=new mysqli("localhost","root","","mydatabase1");

if(!$con)
{
	die('Connection Failed');
}

if(isset($_POST['submit']))
{
	$coursename=$_POST['coursename'];
$session=$_POST['session'];
$name=$_POST['name'];
$fathername=$_POST['fathername'];
$occupation=$_POST['occupation'];
$income=$_POST['income'];
$DOBirth=$_POST['DOBirth'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$eduqua=$_POST['eduqua'];
$religion=$_POST['religion'];
$castecat=$_POST['castecat'];
$caste=$_POST['caste'];
$occu1=$_POST['occu1'];
$coll=$_POST['coll'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$wtmobile=$_POST['wtmobile'];
$email=$_POST['email'];
$id=$_POST['id'];
$num=$_POST['num'];
$date=$_POST['date'];
$time=$_POST['time'];
$fee=$_POST['fee'];
$pay=$_POST['pay'];
$initial=$_POST['initial'];
$scheme=$_POST['scheme'];

 $sql="insert into addm ('courname','session','name','fathername','occupation','income','DOBirth','age','gender', 'eduqua','religion','castecat','caste','occu1','coll','address','mobile','wtmobile','email','id','num','date','time', 'fee','pay','initial','scheme') values('$coursename','$session','$name','$fathername','$occupation','$income','$DOBirth','$age','$gender', '$eduqua','$religion','$castecat','$caste','$occu1','$coll','$address','$mobile','$wtmobile','$email','$id','$num','$date','$time', '$fee','$pay','$initial','$scheme');";
 
 if($con->query($sql))
			{
				echo "data stored";
			}
			else
			{
		   echo "insert data failed";
			}
}
?>