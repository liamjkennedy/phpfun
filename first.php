<!DOCTYPE html>
<html>
<head>
	<title>Forms</title> 
</head>
<body>

<?php
	
	$movies = array (
		9 => 'The Fast and the Furious',
		6 => '2 Fast 2 Furious',
		8 => 'The Fast and the Furious 3: Tokyo Drift',
		5 => 'Fast & Furious',
		7 => 'Fast Five',
		10 => 'Fast & Furious 6',
	);
	
	echo "<p>In chronological order: <br /><pre>Rating	Title
";
	foreach ($movies as $key => $value) {
		echo "$key\t$value\n";
	}
	echo '</pre></p>';
	
	echo "<p>In alphabetical order: <br /><pre>Rating	Title
";
	asort($movies);
	foreach ($movies as $key => $value) {
		echo "$key\t$value\n";
	}
	echo '</pre></p>';
	
	echo "<p>In order of how good they are: <br /><pre>Rating	Title
";
	krsort($movies);
	foreach ($movies as $key => $value) {
		echo "$key\t$value\n";
	}
	echo '</pre></p>';
	
?>
	
</body>
</html>