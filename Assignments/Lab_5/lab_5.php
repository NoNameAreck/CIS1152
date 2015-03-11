<?php

/**
<<<<<<< HEAD
 * Lab 4, Form and Post Lab
=======
 * Lab 2, Arithmatic Lab
>>>>>>> upstream/master
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150120
 */
<<<<<<< HEAD
 
=======

>>>>>>> upstream/master
/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

<<<<<<< HEAD
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
=======
define('GRAVITY', 9.8);

function truncateFloat($float_value)
{
    echo (int) floatval($float_value * 100) / 100;
}

/**
>>>>>>> upstream/master
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
<<<<<<< HEAD
	return($degrees_f - 32)*(5/9)+273.15;
}

/**
 * Find the volume of a Dodecahedron
 *
 * Giving the area of a line segment return the volume of the Dodecahedron
 *
=======
    echo ($degrees_f - 32) * 5 / 9 + 273.15;
}

/**
>>>>>>> upstream/master
 * @param $area
 */
function dodecahedronVolume($area)
{
<<<<<<< HEAD
	return ((15+7*sqrt(5))/4)*pow($area,3);
}

/**
 * Return the impact velocity of a falling object
 *
 * Giving a height find the velocity at which the object with hit the ground on earth.
 *
=======
    echo pow($area, 3) / 4 * (15 + 7 * sqrt(5));
}

/**
>>>>>>> upstream/master
 * @param $height
 */
function impactVelocity($height)
{
<<<<<<< HEAD
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
=======
    echo sqrt(2 * GRAVITY * $height);
}

if (isset($_POST['submit'])) {
    $truncateFloatInput = $_POST["truncateFloat"];
    $farenheit2KelvinInput = $_POST["farenheit2Kelvin"];
    $dodecahedronVolumeInput = $_POST["dodecahedronVolume"];
    $impactVelocityInput = $_POST["impactVelocity"];
} else {
    $truncateFloatInput = "";
    $farenheit2KelvinInput = "";
    $dodecahedronVolumeInput = "";
    $impactVelocityInput = "";
>>>>>>> upstream/master
}

$form_layout = <<< EOD
<p>
<form method="post" action="">
<<<<<<< HEAD
Truncate Float: <input type="decimal" name="float_value"><br>
Farenheit 2 Kelvin: <input type="decimal" name="degrees_f"><br>
Dodecahedron Volume: <input type="decimal" name="area"><br>
Impact Velocity: <input type="decimal" name="height"><br>
=======
<label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
<label name="farenheit2Kelvin">Farenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
<label name="dodecahedronVolume"></label>Dodecahedron Side Value<input type="text" name="dodecahedronVolume"><br>
<label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
>>>>>>> upstream/master
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;

<<<<<<< HEAD


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

=======
?>

<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
<?php
if (!isset($_POST['submit'])) {
    // display the form
    echo $form_layout;
} else {
    if (!empty($truncateFloatInput)) {
        echo "The truncated floating point value is:";
        truncateFloat($truncateFloatInput);
        echo "<br>";
    }
    if (!empty($farenheit2KelvinInput)) {
        echo "The Kelvin value is:";
        farenheit2Kelvin($farenheit2KelvinInput);
        echo "<br>";
    }
    if (!empty($dodecahedronVolumeInput)) {
        echo "The dodecahedron volume value is:";
        dodecahedronVolume($dodecahedronVolumeInput);
        echo "<br>";
    }
    if (!empty($impactVelocityInput)) {
        echo "The splat value is:";
        impactVelocity($impactVelocityInput);
        echo "<br>";
    }

}
?>
</body>
</html>
>>>>>>> upstream/master
