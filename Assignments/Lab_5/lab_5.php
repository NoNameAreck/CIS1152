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

$header = <<< EOD
<html>
	<head>
		<title>Simple PHP Form Example</title>
	</head>
<body>

EOD;

	

$footer = <<< EOD
</body>
</html>
EOD;

function truncateFloat($float_value)
{
	return (int)($float_value*100)/100;
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
	return($degrees_f - 32)*(5/9)+273.15;
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
	return ((15+7*sqrt(5))/4)*pow($area,3);
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
	return sqrt(2*GRAVITY*$height);
}

if (isset($_POST['submit'])) {
    $float_value  = truncateFloat($_POST["float_value"]);
    $degrees_f  = farenheit2Kelvin($_POST["degrees_f"]);
    $area = dodecahedronVolume($_POST["area"]);
    $height  = impactVelocity($_POST["height"]);
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



if (!isset($_POST['submit'])) {
    // display the form
	echo $form_layout;
} else {
    // display the output
	$form_results = $header;
    if(!empty($float_value)){
		$form_results .= "The truncated floating point value is : " . $float_value . ".</br>";
	}
	if(!empty($degrees_f)){
		$form_results .= "The kelvin value is : " . $degrees_f . ".</br>";
	}
	if(!empty($area)){
		$form_results .= "The dodecahedron volume value is : " . $area . ".</br>";
	}
	if(!empty($height)){
		$form_results .= "The impact velocity value is : " . $height . ".</br>";
	}
	$form_results .= $footer;
	
	echo $form_results;
}
?>

