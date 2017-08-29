<?php
header('Content-type:text/html;charset=utf-8');
$id=$_POST['id'];
$name=$_POST['name'];
$states=$_POST['states'];
$price=$_POST['price'];
$photo=$_POST['photo'];
try {
    $conn = new PDO("mysql:host=localhost;dbname=secondhand", 'root', 'root');
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO shangpin(id,name,states,price,photo)
    values('$id','$name','$states','$price','$photo')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
echo '发布成功';
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>