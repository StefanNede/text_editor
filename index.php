<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	function compute(){
		$code = $_POST["code"];
		$code_file = fopen("main.py", "w");
		fwrite($code_file, $code);
		fclose($code_file);
		$result = nl2br(shell_exec("python3 main.py"));
		exec("rm main.py");
		$result_file = fopen("result.txt", "w");
		fwrite($result_file, $result);
		fclose($result_file);
	};

	compute();
	$result_file = fopen("result.txt", "r");
	$results = "";
	if (filesize("result.txt") == 0){
		$results = "";
	}
	else {
		$results = fread($result_file, filesize("result.txt"));
	}
	fclose($result_file);
}
else {
	$results = "";
}
print <<<EOF
	<!DOCTYPE html>
	<html>
	<head>
		<link href="style.css" rel="stylesheet"></link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<button class="change_theme">
			<div class="change"/>
		</button>
		<form action="index.php" method="post" class="form">
			<label for="code">Code:</label>
			<textarea type="text" name="code" placeholder="write your python code in here" id="code"></textarea>
			<input type="submit" value="run"></input>
		</form>
		<div class="results">
			$results 
		</div>
	<script src="app.js">
	</script>
	</body>

	</html>
EOF;
