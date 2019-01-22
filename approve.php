<?php
$conn=mysqli_connect("localhost","root","")or die(mysqli_error());
     mysqli_select_db($conn,"health")or die (mysqli_error());
	 


$result = mysqli_query($conn,"SELECT * FROM child") or die (mysqli_error());

echo "<table border='1'>
<tr>
<th>serial no</th>
<th>First name</th>
<th>othername</th>
<th>surname</th>
<th>dob</th>
<th>sex</th>
<th>type of birth</th>
<th>nature of birth</th>
<th>place of birth</th>
<th>district</th>
<th>approve</th>



</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['serial_no'] . "</td>";
echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['Othername'] . "</td>";
echo "<td>" . $row['Surname'] . "</td>";
echo "<td>" . $row['Date_of_birth'] . "</td>";
echo "<td>" . $row['Sex'] . "</td>";
echo "<td>" . $row['Type_of_birth'] . "</td>";
echo "<td>" . $row['Nature_of_birth'] . "</td>";
echo "<td>" . $row['place_of_birth'] . "</td>";
echo "<td>" . $row['District'] . "</td>";
echo "<td><a href='delete.php?fname=".$row['fname']."'>approve</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>