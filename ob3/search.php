
<?php
$conn=mysql_connect("localhost","root","root");
mysql_query("set names 'utf8'");
mysql_select_db("user",$conn);
$keyword=$_GET['keyword'];
$sql="select id from house where id=$keyword";
$rs=mysql_query($sql) or die("执行失败");
$row=mysql_fetch_assoc($rs);
$a=$row['id'];
header("Location:$a.php");
?>
   