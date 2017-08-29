<?php
header('Content-type:text/html;charset=utf-8');
$conn = mysql_connect("localhost", "root", "root") or die("无法连接MySql数据库服务器！");
mysql_select_db("secondhand", $conn) or die("无法连接数据库！");
mysql_query("set names 'utf8'");
$result=mysql_query("select * from shangpin",$conn);
?>  
<? while($row=mysql_fetch_assoc($result)){?>
<tr>
   <td><a href="<?=$row['id']?>.php" ><font color="#000000" size="3"><?= $row['name']?> </font></a></td>
   <td><?= $row['states']?> </td>
   <td><font color="#FF0000" size="5"><?='￥'.$row['price'] ?></font></td>
   <td><div><a href="<?=$row['id']?>.php" ><img src="image/<?=$row['photo']?>.jpg"></a></div></td>
   </tr>
    <? } ?>