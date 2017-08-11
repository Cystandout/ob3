<?php
$conn = mysql_connect("localhost", "root", "root") or die("无法连接MySql数据库服务器！");
mysql_select_db("secondhand", $conn) or die("无法连接数据库！");
mysql_query("set names 'utf8'");
$result=mysql_query("select * from yonghu",$conn);
?> 
 <? while($row=mysql_fetch_assoc($result)){?>
<tr>
<td><?=$row['username']?></td>
   <td><?=$row['nickname']?></td>
   <td><?= $row['password']?></td>
   <td><?=$row['age'] ?></td>
   <td><?=$row['sex']?></td>
    <td><?=$row['logincount']?></td>
     <td><?=$row['logintime']?></td>
      <td><?=$row['regtime']?></td>
   </tr>
    <? } ?>