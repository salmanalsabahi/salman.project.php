<body>
<br>
<center><font color="#660066" size="+3">ردور الفعل</font></center>
<br>
</body>
<?php
include("config.php");
extract($_REQUEST);
$sel=mysqli_query($conn,"select * from fdbk");
while($arr=mysqli_fetch_array($sel))
  {
     $i=$arr['itemno'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	
	<td><h3>Details</h3><b>Buyer:</b> ".$arr['name']."<br>
	<b>Phone No:</b> ".$arr['phone no']."<br>
	<b>Email:</b> ".$arr['email']."<br>
	<b>Subject:</b> ".$arr['subj']."<br>
	<b>Message:</b> ".$arr['mesg']."<br></td>
</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>
