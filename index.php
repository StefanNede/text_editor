<?php
$result_file = fopen("result.txt", "r");
$results = "";
if (filesize("result.txt") == 0){
	$results = "";
}
else {
	$results = fread($result_file, filesize("result.txt"));
}
fclose($result_file);
print <<<EOF
	<!DOCTYPE html>
	<html>
	<head>
		<link href="style.css" rel="stylesheet"></link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<form action="submit.php" method="post" class="form">
			<label for="code">Code:</label>
			<textarea type="text" name="code" placeholder="write your python code in here" id="code"></textarea>
			<input type="submit"></input>
		</form>
		<div class="results">
			$results 
		</div>
	<script src="app.js">
	</script>
	</body>

	</html>
EOF;

?>
