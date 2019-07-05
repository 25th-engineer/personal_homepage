<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>刁肥宅测试留言板</title>
<style>
	@import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
	.mainCSS {
		font-family: 'Noto Sans TC', sans-serif;
	}
	table{
		border: 2px solid #000;
	    box-shadow: 5px 5px 5px rgba(50%,50%,50%,0.8);
	    width: 95%;
	    font-size: 20px;
		border-radius: 10px;
		margin-bottom: 10px;
	}
	tr, td {
		border: 0px solid #000;
		color: #555;
		word-break: break-all;
		vertical-align: top;
	}
	a{
		text-decoration:none;
		font-size: 20px;
		color: #00F;
	}

</style>
</head>
<body class="mainCSS">
<center>
	
<?PHP
$pdo = new PDO('mysql:dbname=DFZ_message_board','root','123');
	//$_rows = $pdo->exec( "SELECT  COUNT(*) FROM dfz" );
	$sql = "select * from dfz order by time desc";
	$res = $pdo->prepare($sql);
	$res->execute();
	$_rows = $res->rowCount();


	echo "<div style='color:#F00;font-size:20px;'>共有 " . $_rows. " 条留言</div>";
	echo "<div style='margin-bottom:15px;'><a href='leaveMessage.php'><給我留言></a></div>";

/*
	while($result=$res->fetch(PDO::FETCH_ASSOC)){
	echo "<table>
	<tr>
	<td style='width:30px;'>" . $result['id'] . ".</td><td>" . $result['content'] . "</td></tr></table>";
  }
*/
	while($result=$res->fetch(PDO::FETCH_ASSOC)){
	echo "<table>
	<tr>
	<td style='width:30px;'>" . ( $_rows - $result['id'] + 1 ) . ".</td><td>" . $result['time'] . "</td></tr>
	<tr>
	<td style='width:30px;'>" . "</td><td>" . $result['nickname'] . "</td></tr>
	<tr>
	<td style='width:30px;'>" . "</td><td>" . $result['content'] . "</td></tr>
	</table>";
	}
?>
	
</center>

<!--
<a href="#top" target="_self">返回顶部</a>
-->

<style type="text/css">  
.btns{font-weight: bold;display: inline-block;width: 80px;height: 27px;border: #5fb878;background: 	#FFFF00;font-size: 1.4em;text-align: center;padding-top: 5px;color: #0000FF;}
a:hover{color:#FFFFFF}
</style>

<div style="overflow: hidden;position: fixed;right: 10px;bottom: 20px;z-index: 10;">
		<div style="overflow: hidden;">
		    	<div style="padding-top:20px;padding-right:50px;padding-bottom:50px">
				<a href="#" style="float: right; width:100px" class="btns">回到顶部</a>
			</div>
	    </div>
    </div>

</body>
</html>
