<?php
require_once "page_layout.php";

use final_prog\PageLayout as PageLayout;

$engine = <<< EOD
	<h3>Difference Engine No. 1</h3>
	<p>
		The Difference Engine no. 1 was designed to complete equations of x to the 7.
		The machine was designed to be the size of a house and would solve equations 
		using only addition and subtraction. Only one seventh of the machine was ever complete
		but it show that the idea would work
	</p>
	<h3>Analytical Engine</h3>
	<p>
		Babbage then tried to design a machine to be more general purpose and it was 
		called the Analytical Engine. The AnalyticalEngine would have resaemable early mordern 
		computer but was never built because Babage never got the design to work right.
	</p>
	<h3>Difference Engine No. 2</h3>
	<p>
		After Babbage failed to compelte the Analytical Engine Babbage redesigned the 
		Difference Engine to use less parts and to be sligthly smaller then the first 
		Difference Engine. Babbage was able to reduce the size and number of parts by 
		using ideas from the Analytical Engine.
	</p>
EOD;

echo PageLayout\PageLayout::$header;
echo "<h1>Babbage's Work</h1>";
echo $engine;
echo PageLayout\PageLayout::$footer;

?>