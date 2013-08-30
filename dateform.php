<?php
	
	$page_title = 'Calendar Form';
	include('includes/header.inc.html');
	
	/**
	 * Create drop-down menu for day, month and year
	 * 
	 * @param array $user_selection a date selected by the user to reset the drop-down menu to
	 * @return the HTML for the drop-down menu
	 */
	function make_calendar_pulldowns($d = NULL, $m = NULL, $y = NULL) {
		
		$months = array (1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		
		echo "<select name='month'>";
		foreach ($months as $key => $value) {
			echo "<option value=\"$key\"";
			if ($key == $m) {
				echo ' selected = "selected"';
			}
			echo ">$value</option>\n";
		}
		echo "</select>";
		
		echo "<select name=\"day\">";
		for ($day = 1; $day <=31; $day++) {
			echo "<option value=\"$day\"";
			if ($day == $d) {
				echo ' selected = "selected"';
			}
			echo ">$day</option>\n";
		}
		echo "</select>";
		
		echo "<select name=\"year\">";
		$year = 2005;
		while ($year <= 2015) {
			echo "<option value=\"$year\"";
			if ($year == $y) {
				echo ' selected = "selected"';
			}
			echo ">$year</option>\n";
			$year++;
		}
		echo "</select>";
		
	}
	
	echo '<h1 id="mainhead">Select a Date:</h1>
			<p><br /></p><form action="dateform.php" method="post">';
		
		$dates = getdate();
		
		make_calendar_pulldowns($dates['mday'], $dates['mon'], $dates['year']);
		
	echo '</form><p><br /></p>';
	
	echo '<p>Today is ' . date('l') . '. The current time is ' . date('g:i a') . '.</p>';
	

	include('includes/footer.inc.html');
	
?>