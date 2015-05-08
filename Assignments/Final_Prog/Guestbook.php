<?php
require_once "page_layout.php";

use final_prog\PageLayout as PageLayout;

$Guest_Book= <<< EOD
	<h1> Guest Book</h1>
			<form name="store" method="post" action="">
				<label>Name: </label><input name="name" type="text"><br/>
				<label>Email: </label><input name="email" type="text"><br/>
				<label>Number : </label><textarea name="comment"></textarea><br/>
				<input type="submit" name="submit" Value="Submit"><br/>
			</form>
EOD;

$DBServer = '127.0.0.1';
$DBUser = 'root';
$DBPass = '';
$DBName = 'babbage';

$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($conn->connect_error){
	die('Error: ' . $conn->connect_errorno);
}

$result = $conn->query("SELECT name, email, comment, comment_timestamp from guestbook;");

echo PageLayout\PageLayout::$header;

echo $Guest_Book;

if(isset($_POST['submit'])){

	$name = "'" . $conn->real_escape_string($_POST['name']) . "'";
	$email = "'" . $conn->real_escape_string($_POST['email']) . "'";
	$comment = "'" . $conn->real_escape_string($_POST['comment']) . "'";
	
	$sql = $conn->query("INSERT INTO guestbook(name,email,comment) VALUES($name,$email,$comment);");
	
	if($sql === false){
		die("Error: " . $conn->errno);
	}
	
	while ($row = $result->fetch_assoc()) {
		echo $row['name'] . "&nbsp;";
		echo $row['email'] . "&nbsp;";
		echo $row['comment'] . "&nbsp;";
		echo $row['comment_timestamp'] . "&nbsp;<br/>";
	}
	
}else {
	while ($row = $result->fetch_assoc()) {
		echo $row['name'] . "&nbsp;";
		echo $row['email'] . "&nbsp;";
		echo $row['comment'] . "&nbsp;";
		echo $row['comment_timestamp'] . "&nbsp;<br/>";
	}
}

echo PageLayout\PageLayout::$footer;

?>