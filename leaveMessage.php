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
	table, tr, td {
		border: 0px solid #000;
		color: #00F;
	}
	.textBox {
	    border: 2px solid #0000FF;
	    box-shadow: 5px 5px 5px rgba(50%,50%,50%,0.8);
		border-radius: 10px;
	}
	.settingBtn {
	    font-size: 25px;
	    color: #F00;
	    text-align: center;
	    vertical-align: middle;
	    line-height: -2px;
	    padding: 5px;
	    padding-top: 0px;
	    padding-bottom: 0px;
	    height: 60px;
	    width: 60px;
	    border: solid 2px #F00;
	    border-radius: 35px;
	    background: #FFEEEE;
	    box-shadow: 0px 0px 8px rgba(20%,20%,20%,0.8);
	    font-family: 'Noto Sans TC', sans-serif;
	}

</style>
</head>
<body class="mainCSS">
<!--
<center>
	<div style="border-bottom: solid 2px #F00; padding-bottom: 10px;font-size:25px;color:#F00;">刁肥宅测试留言板<br>欢迎留言</div>
	<form action="save_message.php" method="POST" style="width:95%;height:80%;border: 0px solid #000;">
		<table style="width:100%; font-size:25px;">
			<tr>
				<td style="width:70px;">
					昵称:
				</td>
				<td style="margin-bottom: 10px;">
					<input type="text" name="name" class="textBox" style="width:98%;text-align: center;font-size:25px;" />
				</td>
			</tr>
			<tr>
				<td colspan="2">留言:</td>
			</tr>
			<tr>
				<td colspan="2">
					<input name="message" class="textBox" style="width:98%;height:200px;resize:none; font-size:20px;">	
				</td>
			</tr>
		</table>
		<input type="submit" class="settingBtn" value="OK" />
		
		
		
		
		
		
	</form> 
	
</center>
-->
<center>
	<div style="border-bottom: solid 2px #F00; padding-bottom: 10px;font-size:25px;color:#F00;">刁肥宅测试留言板<br>欢迎留言</div>
	<form action="save_message.php" method="post" style="width:95%;height:80%;border: 0px solid #000;">
		<table style="width:100%; font-size:25px;">
			<tr>
				<td style="width:70px;">
					昵称:
				</td>
				<td style="margin-bottom: 10px;">
					<input type="text" name="name" class="textBox" style="width:98%;text-align: center;font-size:25px;" />
				</td>
			</tr>
			<tr>
				<td colspan="2">留言:</td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="message" class="textBox" style="width:98%;height:200px;resize:none; font-size:20px;"></textarea></td>
			</tr>
		</table>
		<input type="submit" class="settingBtn" value="OK"/>
	</form> 
</center>


</body>
</html>