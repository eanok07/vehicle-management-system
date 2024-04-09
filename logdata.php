<?php session_start();?>
<?php
echo $uname=$_POST['uname'];
echo $pass=$_POST['pass'];
echo $utype=$_POST['utype'];

mysql_connect("localhost", "root" ,"") or die("Connection Error");  //Connection Mysql
mysql_select_db("mechDB") or die("Database Error"); //database
$q=mysql_query("select * from tb_reg where uname='$uname' and pass='$pass' ");   // fetch Record
$r=mysql_fetch_array($q);

if($r['uname']==$uname && $r['pass']==$pass)
{
	 
 $_SESSION['uname'] = $r["uname"]; 
  
   
 header("location:userhome.php");
}


else if($uname=="admin" && $pass=="123")
{
header("location:adminmain.php");
}
else
{
header("Location:index.php?a=Invalid user Try again");
}

?> 