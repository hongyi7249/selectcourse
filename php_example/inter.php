<a href = "add.php"><font size = "3">離開</font></a><br><br>

<?php
    session_start();
    $dbhost = '127.0.0.1';
	$dbuser = 'hj';
	$dbpass = 'test1234';
	$dbname = 'testdb';
	$stu_id = $_SESSION["uid"];
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_select_db($conn, $dbname);
	
	$sql = "SELECT* FROM student WHERE stuid = '$stu_id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($result);
	$sql1 = "SELECT* FROM db_table_course WHERE 班級 = '$row[3]' and 必選修 = 'M'";
	$result1 = mysqli_query($conn,$sql1);
	while(1) {
		$row = mysqli_fetch_row($result1);
		if($row==null) break;
		foreach($row as $num){
				echo"$num";
		}
		echo "<br>";
	}
	
			
	echo "<br>";
	
	
?>