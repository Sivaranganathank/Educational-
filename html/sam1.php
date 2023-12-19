<?php

// Create connection
$conn= mysqli_connect('localhost', 'root', '','db_contact');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get similar values from two tables
$sql = "SELECT *
        FROM tbl_contact
        INNER JOIN tbl_enq ON tbl_contact.fldMobile = tbl_enq.fldMobile";

$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);

if ($total!=0) {
    // Output data of each row
    while ($result = mysqli_fetch_assoc($data)) {
       echo "<pre>
	   <tr>
					<td>".$result['fldName']."</td>
					<td>".$result['fldAddress']."</td>
					<td>".$result['fldMobile']."</td>
					<td>".$result['fldWtmobile']."</td>
					<td>".$result['fldQua']."</td>
					<td>".$result['fldCourse']."</td>
					<td>".$result['fldDate']."</td>
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
	</pre>
		";
        // You can process and display the data as needed
    }
} else {
    echo "No matching records found";
}

$conn->close();
?>
