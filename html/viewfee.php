<head>
   <title>Bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" type="text/css" href="..\css\fee.css"></link>
</head>
<style>

body
{
	background-image:url('../image/bg14n2.jpg');

}


.tab1
{
	margin-left:90px;
}

.schm
{
	margin-left:20px;
}

.tab
{
	margin-left:395px;
	width:50%;
	height:10%;
}

table
{
    width:50%;
	font-family:Arial;
	background-color:rgb(0,0,0,0.5);
	border: 0.2rem solid #fff;
  border-radius: 1rem;
  padding: 0.4em;
  box-shadow: 0 0 .2rem #fff,
              0 0 .2rem #fff,
              0 0 2rem #bc13fe,
              0 0 0.5rem #bc13fe,
              0 0 1.5rem #bc13fe,
              inset 0 0 1.1rem #bc13fe;
}
</style>
<?php
$con = new mysqli("localhost", "root", "", "db_contact");
if ($con->connect_errno) {
    echo $con->connect_errno;
    die("Sorry, the database connection failed...");
}

$sql = "SELECT * FROM tbl_fee";
$data = mysqli_query($con, $sql);

$total = mysqli_num_rows($data);

echo $total;

if ($total != 0) {
    while ($result = mysqli_fetch_assoc($data)) {
				   $Date1=$result['fldDate1'];
				   $Date2=$result['fldDate2'];
				   $Date3=$result['fldDate3'];
				   $Scheme=$result['fldScheme'];
				   $Drfee=$result['fldDrfee'];
				   $Dofee=$result['fldDofee'];
				   $Depay=$result['fldDepay'];
				   $Jrfee=$result['fldJrfee'];
				   $Jofee=$result['fldJofee'];
				   $Jepay=$result['fldJepay'];
				   $Prfee=$result['fldPrfee'];
				   $Pofee=$result['fldPofee'];
				   $Pepay=$result['fldPepay'];
				   $Wrfee=$result['fldWrfee'];
				   $Wofee=$result['fldWofee'];
				   $Wepay=$result['fldWepay'];
				   $Crfee=$result['fldCrfee'];
				   $Cofee=$result['fldCofee'];
				   $Cepay=$result['fldCepay'];
				   $Srfee=$result['fldSrfee'];
				   $Sofee=$result['fldSofee'];
				   $Sepay=$result['fldSepay'];
				   $Dbrfee=$result['fldDbrfee'];
				   $Dbofee=$result['fldDbofee'];
				   $Dbepay=$result['fldDbepay'];
				   $Dorfee=$result['fldDorfee'];
				   $Doofee=$result['fldDoofee'];
				   $Doepay=$result['fldDoepay'];
				   $Arfee=$result['fldArfee'];
				   $Aofee=$result['fldAofee'];
				   $Aepay=$result['fldAepay'];
        ?>
        
		<h1>Fee Details</h1>
            <table class="tab">
					<td>

					<label for="date" >Date:</label>
					<input type="date" class="date" value='<?=$Date1?>' name="txtDate1">

					<label for="date">From:</label>
					<input type="date" id="date" name="txtDate2" value='<?=$Date2?>'>

					  <label for="date">To:</label>
					<input type="date" id="date" name="txtDate3" value='<?=$Date3?>' ><br><br>

					  <label for="schm" class="schm">Scheme:</label>
					  <input type="text"  name="txtScheme" value='<?=$Scheme?>' size="10px" >
					   
					</td>

					</table><br><br>
					<center>
					<table class="tab1" >

					<tr>
					<th>Course</th>
					<th>Regular Fee</th>
					<th>Offer Fee</th>
					<th>Easy Pay</th>
					</tr>

					<tr>
					<td>DCA
					<td>
					  <input type="text"  name="txtDrfee" value='<?=$Drfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtDofee" value='<?=$Dofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtDepay" value='<?=$Depay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>JAVA
					<td>
					  <input type="text"  name="txtJrfee" value='<?=$Jrfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtJofee" value='<?=$Jofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtJepay" value='<?=$Jepay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>PYTHON
					<td>
					  <input type="text"  name="txtPrfee" value='<?=$Prfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtPofee" value='<?=$Pofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtPepay" value='<?=$Pepay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>WEB DESIGN
					<td>
					  <input type="text"  name="txtWrfee" value='<?=$Wrfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtWofee" value='<?=$Wofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtWepay" value='<?=$Wepay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>COREL DRAW
					<td>
					  <input type="text"  name="txtCrfee" value='<?=$Crfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtCofee" value='<?=$Cofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtCepay" value='<?=$Cepay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>SPOKEN ENGLISH
					<td>
					  <input type="text"  name="txtSrfee" value='<?=$Srfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtSofee" value='<?=$Sofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtSepay" value='<?=$Sepay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>DBCS
					<td>
					  <input type="text"  name="txtDbrfee" value='<?=$Dbrfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtDbofee" value='<?=$Dbofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtDbepay" value='<?=$Dbepay?>' size="15px" ></td>

					</tr>

					<tr>
					<td>DOT NET
					<td>
					  <input type="text"  name="txtDorfee" value='<?=$Dorfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtDoofee" value='<?=$Doofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtDoepay" value='<?=$Doepay?>'size="15px" ></td>

					</tr>

					<tr>
					<td>ANDROID DEVELOPMENT
					<td>
					  <input type="text"  name="txtArfee" value='<?=$Arfee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtAofee" value='<?=$Aofee?>' size="15px" ></td>
					  
					  <td>
					  <input type="text"  name="txtAepay" value='<?=$Aepay?>' size="15px" ></td>

					</tr>
					</table>
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
