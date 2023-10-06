<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");
extract($_REQUEST);
if(isset($sub))
{
$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
 echo "<script>location.href='home.php?view=$catg & view1=$subcatg'</script>";
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
{// code for IE7+, Firefox, Chrome, Opera, Safari
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
//alert(str);
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}

</script>

</head>


<style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<body>
<br><br><br>
<center><font color="#660066" size="+3">View مشاهده البضائع</font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >

<table align="center">
<tr><td width="118"><span class="style4">الفئه:</span></td>

<td width="281"><select name=cat onChange="showUser(this.value)">
  <option value=''>رجل</option>
  <option value=''>امراءه</option>
  <option value=''>غير ذلك</option>
 <?php
require "config.php";// connection to database 
$q=mysqli_query($conn,"select * from category ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['cat_id'].">".$n['category']."</option>";
}
?>

</select></td>
</tr>

<tr><td><span class="style4">  البضائع والمنتجات:</span></td>
<td><select name=subcat>
  <option مشاهده=''>اكوات </option>
  <option مشاهده=''> الساعات</option>
  <option مشاهده=''> اكسسوارات</option>
  <option مشاهده=''>جزمات </option>
  <option مشاهده=''>Select </option>
  <option مشاهده=''>بدلاات </option>
  <option مشاهده=''>شنطات </option>
  <option مشاهده=''>تلفونات </option>
  <option مشاهده=''>شميز </option>
  <option مشاهده=''> معوز</option>
  <option مشاهده=''>شواحن </option>
  <option مشاهده=''>سماعات </option>
  <option مشاهده=''> بطاريات</option>
  <option مشاهده=''> فنايل</option>
  <option مشاهده=''>صناطل </option>
  <option مشاهده=''>ثوب </option>

















 <?php
require "config.php";// connection to database 
$q1=mysqli_query($conn,"select * from subcategory ");
while($n1=mysqli_fetch_array($q1)){
echo "<option value=".$n1['subcat_id'].">".$n1['subcategory']."</option>";
}
?>

</select></td>
</tr>
<br>
<br>
<tr><td colspan="2" align="center"><input  name="sub" type="submit" value="مشاده" ></td></tr>
</table>
</form>
</fieldset></center>
</body>