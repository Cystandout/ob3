<link id="css" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/button.css" rel="stylesheet" type="text/css" />
<?php
header('Content-type:text/html;charset=utf-8');
require('conn.php');
if($_GET["del"]==1){
	$selectid=$_POST['selected'];
	if(count($selectid)>0){
		$sel=implode(',',$selectid);
		mysql_query("delete from cart where id in ($sel)") or die("执行失败");
		header("Location:mine.php");
	}
else 
echo'<script>alert("没有选中记录")</script>';
}
$result=mysql_query(" select * from cart",$conn);
?>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">Brand</a>				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							 <a href="index.html">首页</a>						</li>
						<li>
							 <a href="present.html">发布</a>	
							 <li >
							 <a href="shop.html">二手商店</a>	
							 <li class="active">
							 <a href="mine.php">我的闲置
							 </a>						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">换肤<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#" onClick="White()"/>Bootstrap白</a></li>
                            <li><a href="#" onClick="Yellow()"/>柠檬黄</a></li>
                            <li><a href="#" onClick="Blue()"/>冰川蓝</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="button button-rounded button-caution button-small button-longshadow-right">GO</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li >
							 <a href="user.html">个人信息</a>						</li>
							 <li>
							 <a href="present.html">退出登录</a>						</li>
                        
					</ul>
				</div>
			</nav>
			</div>    
	</div>

<div class="table-responsive">
 
</div>
<form method="post" action="?del=1">
<table class="table table-striped" border="0" width="95%">
<tr bgcolor="#00FFFF">
<th>id</th> 
<th>名字</th> 
<th>描述</th> 
<th>价格</th> 
<th>照片</th> 
<th>操作</th>
</tr>
<? while($row=mysql_fetch_assoc($result)){ 
?>
<tr>
<td><?=$row['id']?></td>
<td><?=$row['name'] ?></td>
<td><?=$row['states'] ?></td>
<td><?=$row['price'] ?></td>
<td><div><img src="image/<?=$row['photo'] ?>.jpg" width="30" height="30"></div></td>
<td align="center">
<input type="checkbox" name="selected[]" value="<?= $row['id'] ?>"</td>
</tr> 
</tr>
<? } ?>
<tr bgcolor="#00FFFF">
<td></td><td></td><td></td><td></td><td></td>
<td align="center"><input type="submit" value="删除" class="button button-caution-flat button-rounded button-small"></td>
<td></td></tr>
</table>
</form>
</body>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 

