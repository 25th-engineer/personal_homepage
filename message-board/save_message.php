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
	a{
		text-decoration:none;
		font-size: 20px;
		color: #00F;
	}
	.showOK {
	    border: 2px solid #F00;
	    box-shadow: 5px 5px 5px rgba(50%,50%,50%,0.8);
		border-radius: 10px;
		font-size: 25px;
		color: #F00;
	    vertical-align: middle;
		width: 50%;
		height: 50px;
		padding-top: 10px;
		border-style:dashed;
	}

</style>
</head>
<body class="mainCSS">
<center>


<?PHP
error_reporting(0);
include_once "leaveMessage.php";

$username = $_POST['name'];
$message = $_POST['message'];



$time = time();

date_default_timezone_set("Asia/Shanghai");
//$dateTime = date("Y/m/d") . " " . date("h:i:sa");

$pdo = new PDO('mysql:dbname=DFZ_message_board','root','123');

//$time2 = NOW();

$xr = $pdo->exec("insert into dfz values (default, NOW(), '$username','$message')");

if ($xr){
	//echo "<script>alert('t');location.href='./index.php'</script>";
	//exit();
	//return;
	;
}else{
	echo "<script>alert('f')</script>";
}
$pdo = null;

header("Location: ./finish.html"); 
?>

</center>

</body>
</html>
