<?php
include("db.php");
$cid=$_REQUEST["id"];

 
 
$quy=mysql_query("delete from tb_employee where id='$cid'");
echo "<script language='javascript'>location.href='viewmechanic.php';</script>"; 
 

?>