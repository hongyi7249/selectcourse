<a href = "add.php"><font size = "3">離開</font></a><br><br>

<?php
    session_start();
    $dbhost = '127.0.0.1';
	$dbuser = 'hj';
	$dbpass = 'test1234';
	$stu_id = $_SESSION["uid"];
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
	$dbname = 'testdb';
	$class = $_POST['bbb'];
	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_select_db($conn, $dbname);
	$sql2 = "SELECT* FROM db_table_course WHERE 選課代號 = '$class'";
	$result2 = mysqli_query($conn,$sq2);
	$row2 = mysqli_fetch_row($result2);
	$sql = "SELECT* FROM student WHERE stuid = '$stu_id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($result);
	if($row[5]+$row2[3]<='30') {
		if($row[7]+1>'$row[7]') {
		}
		else {
			echo "選課失敗:開課人數已達上限";
		}
	} else {
			echo "選課失敗:學分不足或超過上限";
	}
	$sql1 = "SELECT* FROM db_table_course WHERE 班級 = '$row[3]' and 必選修 = 'M'";
	$result1 = mysqli_query($conn,$sql1);
	while(1) {
		$row = mysqli_fetch_row($result1);
		if($row==null) break;
		mysqli_query($conn,$sql2);
		foreach($row as $num){
				echo"$num";
		}
		echo "<br>";
	}
	
			
	echo "<br>";
	
	
?>
