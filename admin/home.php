<?php
error_reporting(1);
session_start();
extract($_REQUEST);
$name=$_SESSION['eid'];
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($name=="")
{
header("location:index.php");
}
?>
<head>
<style>
a{text-decoration:none}
a:hover{background-color:#FFFFFF}

</style>
</head>
<body bgcolor="#FFFFFF" style="height:100%">
<div style="width:100%;float:left">
<div style="width:13%;float:left"><img src="usepics/9.jpg" width="182" height="166"/></div>
<div style="width:86.25%;height:27%;float:right;background-color:#99CC00">
  	<div  style="width:30%;height:10%	;float:right">
	<!-- Start of Page Search -->

		
		    <h5>&nbsp;</h5>
		    <input type="text" name="t1" value="search" onfocus=
"if(this.value=='search')
{this.value='';}
"
onBlur=
"if(this.value=='')
{this.value='search';}
"/>
            <input name="sub" type="submit" class="button" id="sub" value="Go" />

		

		  <h5>&nbsp;</h5>
		  <!--</form>-->
		

		<!-- End of Page Search -->
	</div>

  <div style="width:50%;height:10%;float:right">
<br /><br /><br /><br/>
    <a href="?con=hm"><font color="#660066" size="+2"> مرحبا "welcomw"</font></a>&nbsp;&nbsp;&nbsp;&nbsp; <br><br><br>
	<a href="?log=out"><font color="#660066" size="+2"> ?.......الرجوع للصفحه الرئيسيه  </font></a><br/>
  </div>
</div>
</div>

<div>

<div style="width:13.7%;height:100%;float:left;background-color:#99CC00">
  <div align="center"><br />
      <br />
      <a href="?con=add"><font color="#660066" size="+2">اضافه عناصر </font></a><br/>
    <br />

    <a href="?con=view"><font color="#660066" size="+2">مشاهده البظائع </font>
	</a><br/><br/>
	 <a href="?con=ord"><font color="#660066" size="+2">الطلبيات(
	 <?php
	 include("config.php");
$count=0;
$sel=mysqli_query($conn,"select * from orders");
$count=mysqli_num_rows($sel);
echo $count;
	 ?>)</font>
	</a>
	<br/><br/>
	 <a href="?con=fdbk"><font color="#660066" size="+2">ردود الفعل(
	 <?php
	 include("config.php");
$count=0;
$sel=mysqli_query($conn,"select * from fdbk");
$count=mysqli_num_rows($sel);
echo $count;
	 ?>)</font>
	</a>

	</div>
</div>
<div style="width:86.2%;float:right;background-image:url(usepics/p3.jpg)">
<?php
switch($_REQUEST['con'])
{
case 'add':include("additem.php");
        break;

case 'view':include("view.php");
        break;
		case 'ord':include("orders.php");
        break;
		case 'fdbk':include("fdbk.php");
        break;
case 'hm':include("hm.php");
        break;
}
		
		if($_REQUEST['view'])
		{
		include("viewtable.php");
		}
	
		?>
	
</div>
</div>

</body>