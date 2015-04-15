<?php 
$header = <<<EOD
	<!doctype html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>guestbook</title>
		</head>
		<body>
EOD;

$guest_form = <<< EOD
			<h1> Guest Book</h1>
				<form name="guestbook" method="post" action="">
				<label>Name: </label><input name="name" type="text"><br/>
				<label>Email: </label><input name="email" type="text"><br/>
				<label>Comment: </label><textarea name="comment"></textarea><br/>
				<input type="submit" name="submit" Value="Submit"><br/>
			</form>
EOD;

$footer = <<< EOD
		</body>
	</html>
EOD;


echo $header;
echo $guest_form;

$DBServer = '127.0.0.1';
$DBUser = 'root';
$DBPass = '';
$DBName = 'lab9';

$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($conn->connect_error){
	die('Error: ' . $conn->connect_errorno);
}

$result = $conn->query("SELECT name, email, comment, comment_timestamp from guestbook;");

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
	while ($row = $results->fetch_assoc()) {
		echo $row['name'] . "&nbsp;";
		echo $row['email'] . "&nbsp;";
		echo $row['comment'] . "&nbsp;";
		echo $row['comment_timestamp'] . "&nbsp;<br/>";
	}
}
	
echo $footer;

?>