
<?php
		$dbhost = '127.0.0.1';
		$dbuser = 'hj';
		$dbpass = 'test1234';
		$dbname = 'testdb';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
		mysqli_query($conn, "SET NAMES 'utf8'");
		mysqli_select_db($conn, $dbname);
		$uid=$_POST["MyHead"];	
		session_start();
		$_uid = "$uid";
		$_SESSION["uid"] = $_uid;
		$passwd=$_POST['passwd'];
		$sql = "SELECT stupassword FROM student where stuid = '$uid'";
		$result = mysqli_query($conn, $sql) or die('MySQL query error');
		$_arrt = $result->fetch_row();
		if($passwd != "" && $passwd == $_arrt[0]){
			echo "登入成功";
			header("location: index.html");
		}
		if($passwd == "" || $passwd != $_arrt[0]){
			echo "登入失敗 請重新登入";
			header("Refresh:3 url=index1.php");
		}
	
?>2
