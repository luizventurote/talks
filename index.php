<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Talks - Luiz Venturote</title>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
</head>
<body>

	<?php

		$dir_open = opendir('.');

		while(false !== ($filename = readdir($dir_open))){
		    if($filename != "." && $filename != ".." && $filename != ".git" && $filename != "index.php" && $filename != "README.md") {
		        $link = "<a href='./$filename'> $filename </a>";
		        echo $link;
		    }
		}

		closedir($dir_open);

	?>

	<style>
		
		a {
			color: #4c4c4c;
		    padding: 15px 10px;
		    display: block;
		    margin: 0;
		    border-bottom: 1px solid #dedede;
		    text-decoration: none;
		    font-family: Arial;
		    text-transform: uppercase;
		    font-size: 12px;
		}

		a:hover {
			background: #eee;
		}

	</style>
	
</body>
</html>