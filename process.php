<?php
include("db.php");
$cid=$_REQUEST["id"];

 
 
$quy=mysql_query("update tb_post set status='Accept' where id='$cid'");
echo "<script language='javascript'>location.href='mviewquery.php';</script>"; 
 

?>