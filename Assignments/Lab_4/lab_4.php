<?php

/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150120
 */
 
/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define("GRAVITY", 9.8);

function truncateFloat($float_value)
{
	$float_value = (int)($float_value*100)/100;
	echo $float_value ."<br>";
}

/**
 * Convert the temperature from farenheit to kelvin
 *
 * Takes the temperature in farenheit performs math operations
 * and returns in Kelvin
 *
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	$degrees_k = ($degrees_f - 32)*(5/9)+273.15;
	echo $degrees_k ."<br>";
}

/**
 * Find the volume of a Dodecahedron
 *
 * Giving the area of a line segment return the volume of the Dodecahedron
 *
 * @param $area
 */
function dodecahedronVolume($area)
{
	$Volume = ((15+7*sqrt(5))/4)*pow($area,3);
	echo $Volume ."<br>";
}

/**
 * Return the impact velocity of a falling object
 *
 * Giving a height find the velocity at which the object with hit the ground on earth.
 *
 * @param $height
 */
function impactVelocity($height)
{
	$Velocity= sqrt(2*GRAVITY*$height);
	echo $Velocity ."<br>";
}

if (isset($_POST['submit'])) {
    $float_value  = $_POST["float_value"];
    $degrees_f  = $_POST["degrees_f"];
    $area = $_POST["area"];
    $height  = $_POST["height"];
} else {
    $float_value = "";
    $degrees_f  = "";
    $area = "";
    $height = "";
}

$form_layout = <<< EOD
<p>
<form method="post" action="">
Truncate Float: <input type="decimal" name="float_value"><br>
Farenheit 2 Kelvin: <input type="decimal" name="degrees_f"><br>
Dodecahedron Volume: <input type="decimal" name="area"><br>
Impact Velocity: <input type="decimal" name="height"><br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>
<?php
if (!isset($_POST['submit'])) {
    // display the form
	echo $form_layout;
} else {
    // display the output
    echo " \nTruncate Float: ";
	truncateFloat($float_value);
	echo"<br> \nFarenheit 2 Kelvin: ";
	farenheit2Kelvin($degrees_f);
	echo"<br> \nDodecahedron Volume: ";
	dodecahedronVolume($area);
	echo"<br> \nImpact Velocity: ";
	impactVelocity($height);
	echo"<br>\n</p>\n";
}
?>
</body>
</html>
