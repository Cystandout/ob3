<link id="css" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/button.css" rel="stylesheet" type="text/css" />
<?php
$conn = mysql_connect("localhost", "root", "root") or die("无法连接MySql数据库服务器！");
mysql_select_db("secondhand", $conn) or die("无法连接数据库！");
mysql_query("set names 'utf8'");
$result=mysql_query("select * from shangpin where id='4'",$conn);
$row=mysql_fetch_assoc($result);
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
							 <li class="active">
							 <a href="shop.html">二手商店</a>	
							 <li>
							 <a href="mine.html">我的闲置
							 </a>						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">换肤<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="White()"/>Bootstrap白</a></li>
                            <li><a href="#" onclick="Yellow()"/>柠檬黄</a></li>
                            <li><a href="#" onclick="Blue()"/>冰川蓝</a></li>
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
							 <a href="reg.html">注册</a>						</li>
							 <li>
							 <a href="login.html">登录</a>						</li>
                        
					</ul>
				</div>
			</nav>
			</div>    
	</div>

<div class="table-responsive">
  <table sborder="1" width="100%">
<tr>
<td width="500"><div><img src="image/<?=$row['photo']?>.jpg"></div></td>
 <td><?=$row['name']?> <p><?=$row['states']?></p>
 <p><font color="#FF0000">￥<?=$row['price']?></font></p>
 </td>
</tr>
</table>
<form> 
<button class="button button-highlight-flat" style="float:right" onclick="cart()" />加入购物车</button>
</form>
</div>
</body>
<script>
function cart(){
<?php
header('Content-type:text/html;charset=utf-8');
$conn = mysql_connect("localhost", "root", "root") or die("无法连接MySql数据库服务器！");
mysql_select_db("secondhand", $conn) or die("无法连接数据库！");
mysql_query("set names 'utf8'");
$result=mysql_query("insert into cart select * from shangpin where id='4'",$conn);
?>
alert("成功加入购物车");
}
</script>
 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
