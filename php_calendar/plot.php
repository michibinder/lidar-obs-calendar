<?php

// Determine the required state for plot content
// content_state = 0 -> tmp
// content_state = 1 -> bwf
if (isset($_GET['content'])) {
    if ($_GET['content'] == '1'){
		$dir = "../plots/bwf/*.png";
	} else {
		$dir = "../plots/tmp/*.png";
	}
} else {
	$dir = "../plots/tmp/*.png";
}
$dir_aerosol = "../plots/aerosol/*.png";

// Get the list of all files with .jpg extension in the directory and safe it in an array named $available_plots
$available_plots = glob( $dir );
natsort($available_plots);
$available_plots_aerosol = glob( $dir_aerosol );
natsort($available_plots_aerosol);

// Get index of requested plot by checking arguments passed via url link
if (isset($_GET['index'])) {
    $i = $_GET['index'];
} else {
    // Month of last plot
    $i = 0;
}

$titel = "CORAL";

?>

<html>
	<head>
		<title><?php echo $titel ?></title>
	</head>
	<body>
		<?php 
        echo "<img src='" . $available_plots[$i] . "' />";
        echo "<img src='" . $available_plots_aerosol[$i] . "' />";
		?>
		
	</body>
</html>
