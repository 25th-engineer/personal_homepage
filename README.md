# 刁肥宅个人主页

## 声明

	做（严格来说是再创造）这个主页的原因纯粹是因为个人兴趣，没有任何商业目的。任何组织或个人都可以下载、修改与使用，本人
不*承担*由此带来的**任何法律责任**。

## 安装（以Linux系统为例）

### 环境：
	操作系统：Ubuntu 16.04 LTS；
	网络服务器：Apache2；
	数据库：MySQL；
	开发语言：html、PHP 7.0；

### 步骤

>>* 下载本仓库的所有文件，解压；或者使用下列命令将本仓库克隆下来；

	git clone git@github.com:25thengineer/personal_homepage.git

>>* 打开MySQL，创建两个分别名为board与DFZ_message_board的数据库，并将仓库内的两个sql文件导入依次（注意顺序：数据库选择board时导入board.sql，<br></br>选择DFZ_message_board时导入DFZ_message_board.sql），参考命令如下；
mysql -u root -p
>>>* （输入密码）
create database board;
use board;
source ./board.sql;
>>>* （使用source命令时注意路径要正确）
create database DFZ_message_board;
use DFZ_message_board;
source ./DFZ_message_board.sql;

>>* 将仓库内的所有文件复制到服务器根目录（或子文件夹，视具体情况而定），如图1、图2所示；

<br></br>
![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x1.png)
<br></br>
>>>*							图1

<br></br>
![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x2.png)
<br></br>
>>>*							图2
>>* 在我的机子与环境上，顺利完成上述所有步骤后，就可以在浏览器地址栏输入以下地址方位主页了，效果如图3~7所示。

	http://localhost/DFZ_HOME_PAGES/
>>* <br></br>

<br></br>	
![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x3.png)
<br></br>
>>>*							图3

<br></br>	
![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x4.png)
<br></br>
>>>*							图4
	
![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x5.png)
<br></br>	
>>>*							图5

![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x6.png)
<br></br>
>>>*							图6
	
![](https://github.com/25thengineer/personal_homepage/blob/master/setup/x7.png)
<br></br>

>>>*							图7
