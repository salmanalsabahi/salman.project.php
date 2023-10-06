<?php
error_reporting(1);
include("config.php");
extract($_REQUEST);

if($_REQUEST['sub'])
 {
 $name=$_REQUEST['t1'];
 $pass=$_REQUEST['p1'];
 $sel=mysqli_query($conn,"select name,pass from details where name='$name'");
 $arr=mysqli_fetch_array($sel);
 if($arr['name']==$name and $arr['pass']==$pass)
   {
   session_start();
   $_SESSION['eid']=$name;
  header("location:home.php");
  }
  else
   {
     $er="name and password do not match";
	 }
}	 
?>
<html>
<head>
<script>
function nam()
{
  var nam=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t1.value.search(nam)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	} 
		function pass()
	{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
   if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
	 }
	 
	 	
function vali()
{
  var nam=/^[a-zA-Z]{4,15}$/;
  var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 if(document.f1.t1.value.search(nam)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	  else if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
	 	 else 
	{
	 return true;
	 }
	 }
	
</script>
</head>
<body background="usepics/p3.jpg">

<div><br><h1 align="center"><font face="Courier New, Courier, monospace">ADMINISTRATOR LOGIN</font></h1>
<div><br><h1 align="center"><font face="Courier New, Courier, monospace">دخول المسؤؤل </font></h1>
<div><br><h1 align="center"><font face="Courier New, Courier, monospace"> الرجااخال
(اسم المستخدم_كلمه المرور)</font></h1>
</div>

<br><br><br><br><br>
<div style="width:100%;float:left" align="center" >
<center><fieldset style="background:#FFFFFF;width:300;height:130">
<br>
<table width="200" border="0" align="center">
<form method="post" name="f1" onSubmit="return vali()">
<tr><td colspan="2"><?php echo "<font color='red'>$er</font>";?></td></tr>
  <tr>
    <td width="81">UserName:</td>
    <td width="103"><label>
      <input name="t1" type="text" id="t1" onChange="return nam()">
    </label></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="p1" type="password" id="p1" onChange="return pass()"></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center"><label>
      <input name="sub" type="submit" id="sub" value="Login">
    </label></td>
   
  </form>
</table>
</fieldset></center>
</div>




</body>
</html>