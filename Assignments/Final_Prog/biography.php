<?php
require_once "page_layout.php";

use final_prog\PageLayout as PageLayout;

$biography = <<< EOD
	<p>
		Charles Babbage was born on December 26, 1791 to a London Banker Benjamin Babbage.
		Charles taught himself algebra at a young age. When Babbage entered Trinity College
		in Cambridge he was far more advanced than his tutors. Babbage was very interested
		in building machinery for calculatation.
	</p>
	<p>
		Charles Babbage designed three machine during his life to perform calculatations. He
		was never able to fully built one of these machines because he lacked funding. The 
		closest Babbage got to completing the difference engine was a seventh of the machine
		was built and complete. This peice show everything Babbage wanted to do was possible
		if funded. Babbage lacked funding because the size of the machine was so large with 
		thousands of small percise parts. 
	</p>
	<p>
		After Babbage died all of his ideas were just set aside and never looked at again. Most
		people at the time didn't see a need for a machine like Babbage's Difference Engine. Babbage's 
		machines work almost the same way as early eletrical computers but the designers of the computers
		never looked at Babbage's work. A few people built a ful-sized version of the Difference Engine 
		no. 2 that was finished in 2002 and work just like Babbage wanted.
	</p>
EOD;

echo PageLayout\PageLayout::$header;
echo "<h1>Biography</h1>";
echo $biography;
echo PageLayout\PageLayout::$footer;

?>