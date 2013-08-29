<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

	$months = array (1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	
	echo "<select name='month'>";
	foreach ($months as $key => $value) {
		echo "<option value\"$key\">$value</option>\n";
	}
	echo "</select>";
	
	echo "<select name=\"day\">";
	for ($day = 1; $day <=31; $day++) {
		echo "<option value=\"$day\">$day</option>\n";
	}
	echo "</select>";
	
	echo "<select name=\"year\">";
	$year = 2005;
	while ($year <= 2015) {
		echo "<option value=\"$year\">$year</option>\n";
		$year++;
	}
	echo "</select>";

?>

</body>
</html>