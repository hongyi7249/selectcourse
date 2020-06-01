<?php
    $dbhost = '127.0.0.1';
	$dbuser = 'hj';
	$dbpass = 'test1234';
	$dbname = 'testdb';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_select_db($conn, $dbname);
	$_id=$_POST['bbb'];
	$sql = "SELECT * FROM db_table_course WHERE 選課代號 = '$_id'";
	$result = mysqli_query($conn,$sql);
	$row= mysqli_fetch_row($result);
	for($i=0 ; $i<9 ; $i++){
				echo" $row[$i]";
			}
	echo "<br>";
	session_start();
	echo $_SESSION["uid"];
	
	
?>