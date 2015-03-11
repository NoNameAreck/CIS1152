<?php
require_once "src/math_fun.php";
require_once "src/PageLayout.php";


use VTC\Lab_5\MathFun as MathFun;
use VTC\Lab_5\PageLayout as PageLayout;

$name = new MathFun\MathFun;




if (isset($_POST['submit'])) {
    $float_value  = $name->truncateFloat($_POST["truncateFloat"]);
	$degrees_fw  = $name->farenheit2Kelvin($_POST["farenheit2Kelvin"]);
    $area = $name->dodecahedronVolume($_POST["dodecahedronVolume"]);
    $height  = $name->impactVelocity($_POST["impactVelocity"]);
} else {
    $float_value = "";
    $degrees_fw  = "";
    $area = "";
    $height = "";
}

echo PageLayout\PageLayout::$header;
if (!isset($_POST['submit'])){
echo PageLayout\PageLayout::$form_layout;
} else {
	PageLayout\PageLayout::form_results($float_value,$degrees_fw,$area,$height);
}
echo PageLayout\PageLayout::$footer;

?>