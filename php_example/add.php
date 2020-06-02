<!DOCTYPE html>
<html lang ="zh-TW" >
<head>
	<meta charset = "UTF-8">
	<title> 加課</title>
</head>
<body background ="addd.jpg">
	<div><font size = "10">選擇課程</font></div>
</body>
</html>



<?php
		$dbhost = '127.0.0.1';
		$dbuser = 'hj';
		$dbpass = 'test1234';
		$dbname = 'testdb';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
		mysqli_query($conn, "SET NAMES 'utf8'");
		mysqli_select_db($conn, $dbname);
		$sql = "SELECT * FROM db_table_course ";
		$result = mysqli_query($conn,$sql);
		echo "<form name = form2  method =post action=inter.php >";
		echo"<select name = bbb >";
		while($r != 408){
			$row= mysqli_fetch_row($result);
			echo"<option value = '$row[2]'>" ;
			for($i=0 ; $i<9 ; $i++){
				echo" $row[$i]";
			}
			echo"</option>";
			$r++;
		}
		echo"</select>";
		echo"<BR>";
		echo "<input type = submit value =送出>" ;
		echo "</form>";
		echo "<br>";
		echo "<a href = index.html>離開</a>";
		
?>

<!DOCTYPE html>
<html lang ="zh-TW" >
<head>
	<meta charset = "UTF-8">
</head>
<body>
	<div><font size = "10">查詢課程</font></div><br>  
	<form name = "form2" method = "post" action = "add.php">
		<input type = "text" name = "course" placeholder = "請輸入學號"><br><br>
		<input type = "submit" value = "查詢">
	</form>
</body>
</html>

<?php
    $uid = $_POST['course'];
	$dbhost = '127.0.0.1';
		$dbuser = 'hj';
		$dbpass = 'test1234';
		$dbname = 'testdb';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
		mysqli_query($conn, "SET NAMES 'utf8'");
		mysqli_select_db($conn, $dbname);
		$sql = "SELECT class from student where stuid = '$uid'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($result);
		
	
?>







