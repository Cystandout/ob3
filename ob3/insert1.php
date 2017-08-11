<?php
header('Content-type:text/html;charset=utf-8');
$conn = mysql_connect("localhost", "root", "root") or die("无法连接MySql数据库服务器！");
mysql_select_db("secondhand", $conn) or die("无法连接数据库！");
mysql_query("set names 'utf8'");
$result=mysql_query("insert into cart select * from shangpin where id='1'",$conn);
echo '<script>alert("成功加入购物车")</script>';
?>