<?php
header('Content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$nickname=$_POST['nickname'];
$password=md5($_POST['password']);
$age=$_POST['age'];
$sex=$_POST['sex'];
$time=date("Y-m-d H:i");
try {
    $conn = new PDO("mysql:host=localhost;dbname=secondhand", 'root', 'root');
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="select *from yonghu where username='$username'";
$rs=$conn->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
	if($result){
	echo '<script>alert("用户名已存在");history.back();</script>';
	exit();
}
    $sql = "INSERT INTO yonghu(username, nickname, password,age,sex,regtime)
    values('$username','$nickname','$password','$age','$sex','$time')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
header("Location:reg_success.html");}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>