<?php

/**
 * Lab 2, Arithmatic Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author ARECK_LOGSDON <mynameisareck@gmail.com>
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


 impactVelocity(98);
 dodecahedronVolume(89);
 farenheit2Kelvin(32);
 truncateFloat(56.78978);
