<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");

$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
$img=$_FILES['file']['name'];
$itemno=$_REQUEST['t1'];
$price=$_REQUEST['t2'];
$desc=$_REQUEST['text'];
$t=date("d-m-y");

if($_REQUEST['sub'])
  {
    if(mysqli_query($conn,"insert into items  values('','$catg','$subcatg','$img','$itemno','$price','$desc','','$t')"))
	   {
	    move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		
	    echo "<font size='+2'>item inserted successfully</font>";
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}   
		 
?><head>
<script>
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{
  
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("subcat").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}
</script>

</head>


<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<br><br><br>
<center><font color="#660066" size="+5">اضافه ملف اونص  </font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center">
<tr><td width="111"><span class="style3"> الجنس او النوع :</span></td>
<td width="264"><select name=cat onChange="showUser(this.value)">
  <option value=''>Select One</option>
 <?php
require "config.php";// connection to database 
$q=mysqli_query($conn,"select * from category ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['cat_id'].">".$n['category']."</option>";
}
?>

</select>
</td>
</tr>

<tr>
<td><span class="style3">  الصنف او الفئه :</span></td>
<td width="264"><select name=subcat onChange="showUser(this.value)">
  <option value=''>Select One</option>
 <?php
require "config.php";// connection to database 
$q1=mysqli_query($conn,"select * from subcategory");
while($n1=mysqli_fetch_array($q1)){
echo "<option value=".$n1['subcat_id'].">".$n1['subcategory']."</option>";
}
?>

</select>
</td>
</tr>
<tr>
<td><span class="style3">ادراج صوره اوملف:</span></td>
<td><input name="file" type="file"></td></tr>
<tr>
  <td><span class="style3"> النوع: </span></td>
  <td><label>
    <input name="t1" type="text" id="t1">
  </label></td>
</tr>
<tr>
  <td><span class="style3">سعر المنتج:</span></td>
  <td><label>
  <input name="t2" type="text" id="t2">
  </label></td>
</tr>
<tr>
<td><span class="style3">الوصف:</span></td>
<td><textarea name="text" cols="35" rows="6"></textarea></td></tr>
<tr><td  colspan="2" align="center"><input name="sub" type="ارسال" value="ارسال"></td></tr>
</table>
</form>
</fieldset></center>
</body>
