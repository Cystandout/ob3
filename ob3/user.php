<?php


$conn = mysql_connect("localhost", "root", "root") or die("�޷�����MySql���ݿ��������");
mysql_select_db("secondhand", $conn) or die("�޷��������ݿ⣡");
mysql_query("set names 'utf8'");
$result=mysql_query("select * from yonghu where nickname='2'",$conn);
?>  
<? while($row=mysql_fetch_assoc($result)){?>
<tr>
   <td><?= $row['username']?> </td>
   <td><font color="#FF0000" size="5"><?=$row['nickname'] ?></font></td>
   <td><font color="#FF0000" size="5"><?=$row['age'] ?></font></td>
    <td><font color="#FF0000" size="5"><?=$row['sex'] ?></font></td>
   </tr>
    <? } ?>
