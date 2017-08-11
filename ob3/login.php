<?php
header('Content-type:text/html;charset=utf-8');
$nickname=$_POST['nickname'];
$time=date("Y-m-d H:i");
$password=md5($_POST['password']);
try{
    $conn = new PDO("mysql:host=localhost;dbname=secondhand", 'root', 'root');
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="select *from yonghu where nickname='$nickname' and password='$password'";
$rs=$conn->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
	if($result){
	$sql="update yonghu set logincount=logincount+1 ";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
	header("Location:login_success.html");
}
else{
echo '<script>alert("用户名或密码错误");history.back();</script>';

}
}
	catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>