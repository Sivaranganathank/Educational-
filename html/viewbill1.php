<head>
   <title>Bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" type="text/css" href="..\css\bill.css"></link>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
@media print {
  .noPrint{
    display:none;
  }
}
</style>
<?php
$con = new mysqli("localhost", "root", "", "db_contact");

$txtName = $_POST['txtName'];
$txtWtmobile = $_POST['txtWtmobile'];

if ($con->connect_errno) {
    echo $con->connect_errno;
    die("Sorry, the database connection failed...");
}

$sql = "SELECT * FROM tbl_bill WHERE fldWtmobile=$txtWtmobile";
$data = mysqli_query($con, $sql);

$total = mysqli_num_rows($data);

echo $total;

if ($total != 0) {
    while ($result = mysqli_fetch_assoc($data)) {
					$Bill=$result['fldBill'];
					$Date=$result['fldDate'];
					$Wtmobile=$result['fldWtmobile'];
					$Name=$result['fldName'];
					$Amount=$result['fldAmount'];
					$Rupee=$result['fldRupee'];
					$Course=$result['fldCourse'];
					$Opay=$result['fldOpay'];
					$H1=$result['fldH1'];
					$A1=$result['fldA1'];
					$H2=$result['fldH2'];
					$A2=$result['fldA2'];
					$H3=$result['fldH3'];
					$A3=$result['fldA3'];
					$H4=$result['fldH4'];
					$A4=$result['fldA4'];
					$H5=$result['fldH5'];
					$A5=$result['fldA5'];
					$H6=$result['fldH6'];
					$A6=$result['fldA6'];
					$H7=$result['fldH7'];
					$A7=$result['fldA7'];
					$Total=$result['fldTot'];

        ?>
        <center>
            <table>
                <tr>
                    <td rowspan=2 align="center"><label for="Billmo"> Bill No:</label>
					<input type="tel" name="txtBill" value='<?=$Bill?>'size="15px" class="wtmob" ></td>
                    <td colspan=2>Cash Receipt</td>
                    <td colspan=1>Enrollment No:3739</td>
                </tr>
                <tr>
                    <td><img src="../image/logo1.jpg" alt="CGS INFOTECH"></td>
                    <td align="center">No.3/4,Anna Salai <br>Near VASAVI MAHAL,<br>Rasipuram-637408.</td>
                    <td align="center">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="txtDate" value="<?= $Date ?>" class="dat">
                        <label for="wtmobile">Whatsapp Mobile No:</label>
                        <input type="tel" name="txtWtmobile" value="<?= $Wtmobile ?>" size="15px" class="wtmob">
                    </td>
                </tr>
            </table>
            <table class="tab1">
                <td>
                    <table class="tab">
                        <tr>
                            <th>Denomination</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>Online Pay</td>
                            <td><input type='text' name='txtOpay' value='<?= $Opay ?>' size='10px'></td>
                        </tr>
                        <tr>
                            <td>2000*<input type='text' name='txtH1' value='<?= $H1 ?>' size='1px'></td>
                            <td><input type='text' name='txtA1' value='<?= $A1 ?>' size='10px'></td>
                       <tr>
							<td>500*<input type='text' name='txtH2' Value='<?= $H2?>' size='1px' class='fi'></td>
							<td><input type='text' name='txtA2' Value = '<?= $A2?>' size='10px'></td>
						</tr>

						<tr>
							<td>200*<input type='text' name='txtH3' Value = '<?= $H3?>' size='1px' class='tw'></td>
							<td><input type='text' name='txtA3' Value = '<?= $A3?>' size='10px'></td>
						</tr>

						<tr>
							<td>100*<input type='text' name='txtH4' Value = '<?= $H4?>' size='1px' class='hu'></td>
							<td><input type='text' name='txtA4' Value = '<?= $A4?>' size='10px'></td>
						</tr>

						<tr>
							<td>50*<input type='text' name='txtH5' Value = '<?= $H5?>' size='1px' class='fif'></td>
							<td><input type='text' name='txtA5' Value = '<?= $A5?>' size='10px'></td>
						</tr>

						<tr>
							<td>20*<input type='text' name='txtH6' Value = '<?= $H6?>' size='1px' class='twe'></td>
							<td><input type='text' name='txtA6' Value = '<?= $A6?>' size='10px'></td>
						</tr>

						<tr>
							<td>10*<input type='text' name='txtH7' Value = '<?= $H7?>' size='1px' class='ten'></td>
							<td><input type='text' name='txtA7' Value = '<?= $A7?>' size='10px'></td>
						</tr>
                        <tr>
						    <td>Total:</td>
							<td><input type='text' name='txtTot' Value = '<?=$Total?>' size='10px'></td>
						</tr>
                    </table>
                    <p style="margin-top:15px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;Received with thanks from Mr/s <input type='text' name='txtName' Value='<?=$Name?>'size='20px' ><br><br>&nbsp;&nbsp;&nbsp;&nbsp;Rs.<input type='text' name='txtAmount' Value='<?=$Amount?>' size='10px' >&nbsp;&nbsp;&nbsp;&nbsp;(Rupees <input type='text' name='txtRupee' Value='<?=$Rupee?>' size='15px' >Only)<br><br>&nbsp;&nbsp;&nbsp;&nbsp; towards course
<input type='text' name='txtCourse' Value = '<?=$Course?>' id='id pro' class='idp >
  <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid By&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Receiver's Signature
  
  <br><br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note:&nbsp;&nbsp;1.&nbsp;The fess should be paid as per fees schedule on 1st of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;every Month.
  <br>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;The Grace period of 10 days allowed every month without penalty.
  
  <br>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;From 11th day to 20th day, the late fee of Rs.300 will be Collected. 
  
   <br>
   
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp;Fee once paid will not be refundable.
   
                    </p>
                </td>
            </table>
        </center>
        <?php
    }
} else {
    echo "NO Records Found";
}
?>
<center>
<button onclick="window.print();" class="noPrint">Print</button><br><br>
</center>

<div class="noPrint">
    <a href="../html/viewdel.html"><button type="button"><span></span>Back</button></a>
</div>
