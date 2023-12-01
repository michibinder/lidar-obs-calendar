<?php
$titel = "CORAL";
$plot_folder = opendir('./plots');

$files = array_diff(scandir($plot_folder), array('.', '..'));


?>

<html>
	<head>
		<title><?php echo $titel ?></title>
	</head>
	<body>
		Hier steht nix
		<?php 
		
		echo $titel;
		
		$dir = "./plots/*.png";
		//get the list of all files with .jpg extension in the directory and safe it in an array named $images
		$images = glob( $dir );

		//extract only the name of the file without the extension and save in an array named $find
		foreach( $images as $image ):
			echo "<img src='" . $image . "' />";
		endforeach;
		
		?>
		<p><img src="plots/20200103-0210_T10Z900_tmp.png">
	</body>
</html>
