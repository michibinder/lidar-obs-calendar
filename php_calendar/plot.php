<?php
if (isset($_GET['content'])) {
    $content = $_GET['content'];
} else {
    $content = "tmp";
}
if (isset($_GET['lidar'])) {
    $lidar = $_GET['lidar'];
} else {
    $lidar = "coral";
}

if ($content == "era5") {
    $dir = "../plots/" . $lidar . "/" . $content . "/" . "*.mp4";
} else {
    $dir = "../plots/" . $lidar . "/" . $content . "/" . "*.png";
}

// Get the list of all files with .jpg extension in the directory and safe it in an array named $available_plots
$available_plots = glob( $dir );
natsort($available_plots);

// Get index of requested plot by checking arguments passed via url link
if (isset($_GET['index'])) {
    $i = $_GET['index'];
} else {
    // Month of last plot
    $i = 0;
}

?>

<html>
	<head>
		<title><?php echo $lidar ?></title>
	</head>
	<body>
		<?php 
        echo "<img src='" . $available_plots[$i] . "' />";
		?>
		
	</body>
</html>
