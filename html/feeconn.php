<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
   $txtDate1=$_POST['txtDate1'];
   $txtDate2=$_POST['txtDate2'];
   $txtDate3=$_POST['txtDate3'];
   $txtScheme=$_POST['txtScheme'];
   $txtDrfee=$_POST['txtDrfee'];
   $txtDofee=$_POST['txtDofee'];
   $txtDepay=$_POST['txtDepay'];
   $txtDdrfee=$_POST['txtDdrfee'];
   $txtDdofee=$_POST['txtDdofee'];
   $txtDdepay=$_POST['txtDdepay'];
   $txtDcrfee=$_POST['txtDcrfee'];
   $txtDcofee=$_POST['txtDcofee'];
   $txtDcepay=$_POST['txtDcepay'];
   $txtYrfee=$_POST['txtYrfee'];
   $txtYofee=$_POST['txtYofee'];
   $txtYepay=$_POST['txtYepay'];
   $txtDcprfee=$_POST['txtDcprfee'];
   $txtDcpofee=$_POST['txtDcpofee'];
   $txtDcpepay=$_POST['txtDcpepay'];
   $txtDtrfee=$_POST['txtDtrfee'];
   $txtDtofee=$_POST['txtDtofee'];
   $txtDtepay=$_POST['txtDtepay'];
   $txtDbrfee=$_POST['txtDbrfee'];
   $txtDbofee=$_POST['txtDbofee'];
   $txtDbepay=$_POST['txtDbepay'];
   $txtDwrfee=$_POST['txtDwrfee'];
   $txtDwofee=$_POST['txtDwofee'];
   $txtDwepay=$_POST['txtDwepay'];
   $txtDarfee=$_POST['txtDarfee'];
   $txtDaofee=$_POST['txtDaofee'];
   $txtDaepay=$_POST['txtDaepay'];
   $txtMrfee=$_POST['txtMrfee'];
    $txtMofee=$_POST['txtMofee'];
   $txtMepay=$_POST['txtMepay'];
   $txtDdcrfee=$_POST['txtDdcrfee'];
   $txtDdcofee=$_POST['txtDdcofee'];
   $txtDdcepay=$_POST['txtDdcepay'];
   $txtDjrfee=$_POST['txtDjrfee'];
   $txtDjofee=$_POST['txtDjofee'];
   $txtDjepay=$_POST['txtDjepay'];
   $txtDhrfee=$_POST['txtDhrfee'];
   $txtDhofee=$_POST['txtDhofee'];
   $txtDhepay=$_POST['txtDhepay'];
   $txtDccrfee=$_POST['txtDccrfee'];
   $txtDccofee=$_POST['txtDccofee'];
   $txtDccepay=$_POST['txtDccepay'];
   $txtDwprfee=$_POST['txtDwprfee'];
   $txtDwpofee=$_POST['txtDwpofee'];
   $txtDwpepay=$_POST['txtDwpepay'];
   $txtDcarfee=$_POST['txtDcarfee'];
   $txtDcaofee=$_POST['txtDcaofee'];
   $txtDcaepay=$_POST['txtDcaepay'];
   $txtDacrfee=$_POST['txtDacrfee'];
   $txtDacofee=$_POST['txtDacofee'];
   $txtDacepay=$_POST['txtDacepay'];
   $txtDbgrfee=$_POST['txtDbgrfee'];
   $txtDbgofee=$_POST['txtDbgofee'];
   $txtDbgepay=$_POST['txtDbgepay'];
   $txtDdmrfee=$_POST['txtDdmrfee'];
   $txtDdmofee=$_POST['txtDdmofee']; 
   $txtDdmepay=$_POST['txtDdmepay'];
   $txtDbprfee=$_POST['txtDbprfee'];
   $txtDbpofee=$_POST['txtDbpofee'];
   $txtDbpepay=$_POST['txtDbpepay'];
   $txtDpprfee=$_POST['txtDpprfee'];
   $txtDppofee=$_POST['txtDppofee'];
   $txtDppepay=$_POST['txtDppepay'];
   $txtDdprfee=$_POST['txtDdprfee'];
   $txtDdpofee=$_POST['txtDdpofee'];
   $txtDdpepay=$_POST['txtDdpepay'];
   $txtAnrfee=$_POST['txtAnrfee'];
   $txtAnofee=$_POST['txtAnofee'];
   $txtAnepay=$_POST['txtAnepay'];
   $txtAdrfee=$_POST['txtAdrfee'];
   $txtAdofee=$_POST['txtAdofee'];
   $txtAdepay=$_POST['txtAdepay'];
   $txtMdrfee=$_POST['txtMdrfee'];
   $txtMdofee=$_POST['txtMdofee'];
   $txtMdepay=$_POST['txtMdepay'];
   $txtHdrfee=$_POST['txtHdrfee'];
   $txtHdofee=$_POST['txtHdofee'];
   $txtHdepay=$_POST['txtHdepay'];
   $txtegrfee=$_POST['txtegrfee'];
   $txtegofee=$_POST['txtegofee'];
   $txtegepay=$_POST['txtegepay'];
   $txttarfee=$_POST['txttarfee'];
   $txttaofee=$_POST['txttaofee'];
   $txttaepay=$_POST['txttaepay']; 
   $txtSprfee=$_POST['txtSprfee'];
   $txtSpofee=$_POST['txtSpofee'];
   $txtSpepay=$_POST['txtSpepay'];
   $txtSprfee2=$_POST['txtSprfee2'];
   $txtSpofee2=$_POST['txtSpofee2'];
   $txtSpepay2=$_POST['txtSpepay2'];
   $txtSprfee3=$_POST['txtSprfee3'];
   $txtSpofee3=$_POST['txtSpofee3'];
   $txtSpepay3=$_POST['txtSpepay3'];
   $txtSpcrfee=$_POST['txtSpcrfee'];
   $txtSpcofee=$_POST['txtSpcofee'];
   $txtSpcepay=$_POST['txtSpcepay'];
   $txtKbrfee=$_POST['txtKbrfee'];
   $txtKbofee=$_POST['txtKbofee'];
   $txtKbepay=$_POST['txtKbepay'];
   $txtKirfee=$_POST['txtKirfee'];
   $txtKiofee=$_POST['txtKiofee'];
   $txtKiepay=$_POST['txtKiepay'];
   $txtKarfee=$_POST['txtKarfee'];
   $txtKaofee=$_POST['txtKaofee'];
   $txtKaepay=$_POST['txtKaepay'];
   
   
// database insert SQL code
$sql = "INSERT INTO `tbl_fee`(`fldDate1`, `fldDate2`, `fldDate3`, `fldScheme`, `fldDrfee`, `fldDofee`, `fldDepay`, `fldDdrfee`, `fldDdofee`, `fldDdepay`, `fldDcrfee`, `fldDcofee`, `fldDcepay`, `fldYrfee`, `fldYofee`, `fldYepay`, `fldDcprfee`, `fldDcpofee`, `fldDcpepay`, `fldDtrfee`, `fldDtofee`, `fldDtepay`, `fldDbrfee`, `fldDbofee`, `fldDbepay`, `fldDwrfee`, `fldDwofee`, `fldDwepay`, `fldDarfee`, `fldDaofee`, `fldDaepay`, `fldMrfee`, `fldMofee`, `fldMepay`, `fldDdcrfee`, `Ddcofee`, `fldDdcepay`, `fldDjrfee`, `fldDjofee`, `fldDjepay`, `fldDhrfee`, `fldDhofee`, `fldDhepay`, `fldDccrfee`, `fldDccofee`, `fldDccepay`, `fldDwprfee`, `fldDwpofee`, `fldDwpepay`, `fldDcarfee`, `fldDcaofee`, `fldDcaepay`, `fldDacrfee`, `fldDacofee`, `fldDacepay`, `fldDbgrfee`, `fldDbgofee`, `fldDbgepay`, `fldDdmrfee`, `fldDdmofee`, `fldDdmepay`, `fldDbprfee`, `fldDbpofee`, `fldDbpepay`, `fldDpprfee`, `fldDppofee`, `fldDppepay`, `fldDdprfee`, `fldDdpofee`, `fldDdpepay`, `fldAnrfee`, `fldAnofee`, `fldAnepay`, `fldAdrfee`, `fldAdofee`, `fldAdepay`, `fldMdrfee`, `fldMdofee`, `fldMdepay`, `fldHdrfee`, `fldHdofee`, `fldHdepay`, `fldegrfee`, `fldegofee`, `fldegepay`, `fldtarfee`, `fldtaofee`, `fldtaepay`, `fldSprfee`, `fldSpofee`, `fldSpepay`, `fldSprfee2`, `fldSpofee2`, `fldSpepay2`, `fldSprfee3`, `fldSpofee3`, `fldSpepay3`, `fldSpcrfee`, `fldSpcofee`, `fldSpcepay`, `fldKbrfee`, `fldKbofee`, `fldKbepay`, `fldKirfee`, `fldKiofee`, `fldKiepay`, `fldKarfee`, `fldKaofee`, `fldKaepay`) VALUES ('txtDate1','txtDate2','txtDate3','$txtScheme','$txtDrfee',' $txtDofee','$txtDepay','$txtDdrfee','$txtDdofee',' $txtDdepay',' $txtDcrfee','$txtDcofee',' $txtDcepay',' $txtYrfee',' $txtYofee','$txtYepay','$txtDcprfee',' $txtDcpofee',' $txtDcpepay',' $txtDtrfee',' $txtDtofee','$txtDtepay','$txtDbrfee','$txtDbofee',' $txtDbepay',' $txtDwrfee','$txtDwofee',' $txtDwepay',' $txtDarfee',' $txtDaofee','$txtDaepay','$txtMrfee','$txtMofee','$txtMepay','$txtDdcrfee','$txtDdcofee',' $txtDdcepay','$txtDjrfee',' $txtDjofee','$txtDjepay','$txtDhrfee',' $txtDhofee','$txtDhepay',' $txtDccrfee','$txtDccofee','$txtDccepay','$txtDwprfee',' $txtDwpofee','$txtDwpepay',' $txtDcarfee',' $txtDcaofee','$txtDcaepay','$txtDacrfee','$txtDacofee','$txtDacepay',' $txtDbgrfee','$txtDbgofee','$txtDbgepay','$txtDdmrfee','$txtDdmofee','$txtDdmepay','$txtDbprfee','$txtDbpofee','$txtDbpepay',' $txtDpprfee','$txtDppofee','$txtDppepay','$txtDdprfee','$txtDdpofee','$txtDdpepay','$txtAnrfee','$txtAnofee',' $txtAnepay','$txtAdrfee',' $txtAdofee','$txtAdepay','$txtMdrfee','$txtMdofee',' $txtMdepay','$txtHdrfee',' $txtHdofee','$txtHdepay','$txtegrfee',' $txtegofee',' $txtegepay',' $txttarfee','$txttaofee','$txttaepay','$txtSprfee','$txtSpofee','$txtSpepay','$txtSprfee2','$txtSpofee2','  $txtSpepay2','$txtSprfee3',' $txtSpofee3',' $txtSpepay3','$txtSpcrfee',' $txtSpcofee',' $txtSpcepay','$txtKbrfee','$txtKbofee',' $txtKbepay','$txtKirfee',' $txtKiofee','$txtKiepay','$txtKarfee','$txtKaofee','$txtKaepay')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: http://localhost/siva/cenpro/html/fee.html");
	exit();
}
else
{
	echo "You Loose";
}

?>