<?php

namespace final_prog\PageLayout;

class PageLayout
{
	public static $header = <<< EOD
<html>
	<head>
		<title>Charles Babbage</title>
		<link rel="stylesheet" type="text/css" href="charles_babbage.css" />
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>Charles Babbage:</h1><h2> the father of computer engineering</h2>
			</div>
			<div id="nav">
				<ul>
					<li><a href="./biography.php">Biography</a></li>
					<li><a href="./work.php">Work</a></li>
					<li><a href="./guestbook.php">GuestBook</a></li>
					<li><a href="./difference_engine.php">Difference Engine</a></li>
				</ul>
			</div>
			<div id="content">
EOD;
	public static $footer = <<< EOD
			</div>
			<div id="footer">
				<p> 
					This site was created by Areck Logsdon in 2014 <br>
					with information gather from www.computerhistory.org/babbage/history/ and photos found on Google
				</p>
			</div>
		</div>
	</body>
</html>
EOD;
}


?>