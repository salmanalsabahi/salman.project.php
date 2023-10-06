<html> 
<head> 

<meta       http-equiv="Content-Type"       content="text/html; charset=utf-8" /> 
<title>تسجيل</title> 
<style type="text/css"> 
body
   { background-color:yellow;
   }
body{ 
direction:rtl;
background-image: url(./img/img-01.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center top;
 } 
form input{ 
border:1px solid #CCC;



 } 
#result{ 
font-weight:bold; color:#930; text-align:center; 
}
 table{ 
border:2px solid #0C3; width:500px;
padding:10px;
 } 
table caption{
     background-color:#0C3; font-weight:bold; 
} 
.submit{ 
width:75px;
 } 
.errorMessage{ text-align:right;
    font-weight:normal;
    textarea {

      
     } 
</style> 

</head> 
<body id=home >
 

   <form action="" method="post"> 
      <table align="center"> 
       <caption>تسجيل مستخدم جديد</caption> 
             <tr><td colspan="2" id="result"> 
               <?php 
 
          if(array_key_exists('register',$_POST))   { 
                  $errors=array(); 
                  if(empty($_POST['name']))   { 

                    array_push($errors,'ادخل الاسم.');  
                    } 
                      elseif(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\- \+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['name'])) 
                      { 
                        array_push($errors,'الاسم المدخل للاسم تحتوي على قيمة غير صالحة');  
                      } 
                        if(empty($_POST['username'])) 
                          { 
                          array_push($errors,'ادخل اسم المستخدم'); 
                    } 

  elseif(!preg_match("/^[A-Za-z][A-Za-z0-9_]+$/",$_POST['username'])) 
  
  { 
  array_push($errors,'الاسم المدخل للاسم المستخدم تحتوي على قيمة غير صالحه .'); 
  } 

  if(empty($_POST['password'])) 
 { 
  array_push($errors,' ادخل كلمة المرور');  
 } 
 #"/^[A-Za-z0-9_]*[A-Z][A-Za-z0-9_]*$/"
 elseif(!preg_match("/^[A-Za-z][A-Za-z0-9_]+$/",$_POST['password']))  

  { 
  array_push($errors,'القيمة المدخلة لكلمة المرور تحتوي على قيمة غير صالح .'); 
  } 

  elseif(strlen($_POST['password'])<6)   { 
    array_push($errors,' كلمة المرور يجب الا تقل عن 8 خانات');
    }     

    elseif($_POST['password2'] !== $_POST['password']) 
  { 
    array_push($errors,' كلمة المرور لا تطابق كلمة المرور المدخلة '); 
    }   
  if(empty($_POST['email']))  
 { 
    array_push($errors,' ادخل البريد الالكتروني'); 
 } 

 elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})]*$/",$_POST['email'])) 
   { 
    array_push($errors,'القيمة المدخلة للبريد الالكتروني غير صالحة.');   } 
    if(empty($_POST['phone']))   { 

    array_push($errors,'ادخل رقم التلفون');   } 
    elseif(!preg_match("/^[0-9]{10,12}$/",$_POST['phone']))  
     { 
    array_push($errors,' القيمة المدخلة غير صالحة.'); 
    } 
    if(empty($_POST['gender']))  
     { 
    array_push($errors,' حدد جنسك'  );  
   } 
 
    if(empty($_POST['agreement'])) 
      { 
    array_push($errors,' الرجاء الموافقة على شروط التسجيل.');   
  } 
  if($errors) 
    { 
    echo'<ol class="errorMessage">';   foreach($errors as $value) 
    { 
    echo '<li>'.$value.'</li>'; 
    } 
    echo'</ol>'; 
    } 
        else    
           { 
             echo'.تمت عملية التسجيل بنجاح';  
                 } 
  } 
    ?> 
      
  </td></tr>   <tr> 
  
  <td>الاسم الكامل</td> 
  <td><input name="name" id="name" size="20" maxlength="20" type="text" value="<?php echo @$_POST['name']?>"/>*</td> 
    </tr> 

    <tr> 
      <td> اسم المستخدم</td> 
  <td><input    name="username"    id="username"    size="20" 
  maxlength="20"       type="text"       value="<?php @$_POST['username']?>"/>*</td> 
    </tr>      <tr> 
      <td>كلمة المرور</td> 
      <td><input    name="password"    id="password"    size="20" maxlength="15" type="password"  >*</td> 
    </tr>      <tr> 
      <td>تاكيد كلمة المرور</td> 
  <td><input   name="password2"   id="password2"   size="20" maxlength="15" type="password">*</td> 
    </tr>    <tr> 
      <td>البريد الالكتروني</td> 
  <td><input    name="email"    size="35"    maxlength="30" type="text" value="<?php echo @$_POST['email']?>">*</td> 
    </tr>     <tr> 
      <td>رقم الهاتف</label></td> 
  <td><input    name="phone"    size="15"    maxlength="15" type="text" value="<?php echo @$_POST['phone']?>">*</td> 
    </tr>    <tr> 
      <td>الجنس</td> 
      <td>ذكر<input name="gender" type="radio" value="male"><br /> 
      انثى<input name="gender" type="radio" value="female">* 
    </td> 
  </tr>  
  <td>
<br/>
<h1><p>الهوايات</p></h1>
<ul><br>
<li><label><input type="checkbox" >رياضة</label></li> <br> 
<li><label><input type="checkbox" >قصص</label></li>  
<li><label><input type="checkbox" >رسم</label></li>  
<li><label><input type="checkbox" >شعر</label></li>   
</ul> 
  <tr> 
    <td>البلد</td> 
    <td> 
    <select name="from"> 
     <option value="" selected></option> 
     <option value="اليمن">اليمن</option>
     <option value="اليمن">اليمن</option>
     <option value="السعودية">السعودية</option>

 
     </select>* 
         </td> 
          </tr> 
      <tr> 
     <td>الموافقة على شروط التسجيل</td> 
    <td><input name="agreement" type="checkbox"/></td>  
  </tr>     
    <tr> 
    <td><input  name="register"  value="تسجيل"  type="submit" class="submit"/></td> 
    <td align="left">* الحقول مطلوبة</td>   </tr> 
   </table> 

  


    </form>







  </body>
 </html>