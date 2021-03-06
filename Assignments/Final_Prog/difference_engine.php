<?php
require_once "page_layout.php";

use final_prog\PageLayout as PageLayout;

$form_layout_1 = <<< EOD
	<p>
		<form method="post" action="">
			<label name="power">Power of x </label><input type="number" name="power"><br>
			<input type="submit" value="submit" name="submit_power">
		</form>
	</p>
EOD;
	$form_layout_2a = <<< EOD
	<p>
		<form method="post" action="">
EOD;
	$form_layout_2b = <<< EOD
			<br>
			<input type="submit" value="enter" name="submit">
		</form>
	</p>
EOD;
	$discribtion = <<< EOD
	<p> 
		The Difference Engine work by the users entering the first few answers to the equation
		then the machine would build a table of differences. After building this table of 
		differences the machine would add the constant difference of the last column to the 
		difference in the column before it to solve equations using only addition. Here is an 
		example of how the machine would work.
	</p>
EOD;
	$difference = array(array());
	
	if(isset($_POST['submit_power'])&&!isset($_POST['submit'])){
		$power = $_POST['power'];
	}
	
	
	function tableRow($power,$rowNumber,$array){
		echo "<tr><td>" . $rowNumber . "</td><td>" . sloveFX($power,$rowNumber) . "</td>";
		if($power-$rowNumber>=0){
			for($colNumber=1;$colNumber<$rowNumber;$colNumber++){
				echo "<td>" . $array[$rowNumber][$colNumber] . "</td>";
			}
		} else{
			for($colNumber=1;$colNumber<=$power;$colNumber++){
				echo "<td>" . $array[$rowNumber][$colNumber] . "</td>";
			}
		}
		echo "</tr>";
	}
	
	function sloveFX($power,$rowNumber){
		$answer = 0;
		for($i = $power;$i>0;$i--){
			$answer = $answer + ($_POST['power' . $i] * pow($rowNumber,$i));
		}
		return $answer;
	}

echo PageLayout\PageLayout::$header;
echo "<h1>Difference Engine Widget</h1>";
echo $discribtion;
	if(!isset($_POST['submit_power'])&&!isset($_POST['submit'])){
		echo $form_layout_1;
	} else{
		if(!isset($_POST['submit'])) { 
			echo $form_layout_2a;
			for ($i = $power; $i>0; $i--){
				echo "<input size=\"1\"type=\"text\" value=\"0\" name=\"power" . $i . "\"><label name=\"power" . $i . "\">x<sup>" . $i . "</sup></label>";
				if($i>1){
					echo " + ";
				}
			}
			echo "<input type=\"hidden\" value=\"" . $power . "\"name=\"power\">";
			echo $form_layout_2b;
		} else {
			$power = $_POST['power'];
			echo "<h3>Difference Table</h3>";
			for($i = $power ; $i>0;$i--){
				echo $_POST['power' . $i] . "x<sup>" . $i ."</sup>";
				if($i>1){
					echo " + ";
				}
			}
			echo "<br>";
			$numOfRows = 16;
			if($power>$numOfRows){
				$numOfRows = $power + 4;
			}
			
			for($rowNumber=1;$rowNumber<=$numOfRows;$rowNumber++){
				for($colNumber=0;$colNumber<=$power+1;$colNumber++){
					if($colNumber==0){
						$difference[$rowNumber][$colNumber] = sloveFX($power,$rowNumber);
					}elseif($rowNumber>1){
						$difference[$rowNumber][$colNumber] = $difference[$rowNumber][$colNumber-1]-$difference[$rowNumber-1][$colNumber-1];
					}else{
						$difference[$rowNumber][$colNumber] = 0;
					}
				}
			}
			
			for($i = -1;$i<=$power;$i++){
				if($i==-1){
					echo"<table><tr><td>x</td>";
				}elseif($i==0){
					echo"<td>f(x)</td>";
				}else{
					echo "<td>" . $i . " Difference </td>";
				}
			}
			echo "</tr>";
			
			
			for($i = 1; $i <= $numOfRows;$i++){
				tableRow($power,$i,$difference);
			}
			echo"</table>";
			
		}
	}

echo PageLayout\PageLayout::$footer;

?>