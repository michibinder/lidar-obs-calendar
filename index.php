<?php
// include './php_calendar/calendar.php';
// class="btn btn-dark"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CORAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        .title {
            font-weight: bold;
            font-size: 26px;
            vertical-align: middle;
        }
	
	.subtitle {
            font-weight: bold;
            font-size: 20px;
            vertical-align: middle;
        }

        .container {
            font-family: 'Montserrat', sans-serif;
            margin: 30px auto;
            padding: 10px 15px 10px 30px; // top right bottom left
	    text-align: left:
	}
	
	.imprint {
            font-family: 'Montserrat', sans-serif;
	    text-align: center;
            margin: 20px auto;
            padding: 10px 15px 10px 30px; // top right bottom left
	}

        .image_container {
            font-family: 'Montserrat', sans-serif;
            margin: 30px auto;
            text-align: center;
        }
        .image_caption {
            font-family: 'Montserrat', sans-serif;
            margin: 30px auto;
            padding: 10px 300px 10px 300px; // top right bottom left
            font-size: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="image_container">  
         <a href="./php_calendar/calendar.php"><img src='./images/nightly_means.png'/></a>
   <br><a href="./php_calendar/calendar.php">Link to the measurement calender</a> 
   </div>
	
	<div class="container">
    <div class="title">The Compact Rayleigh Autonomous Lidar (CORAL)</div> </div>


    <div class="container">CORAL is a mobile middle atmosphere lidar system developed at the Institute of Atmospheric Physics of the German Aerospace Center [<a href="https://www.dlr.de/pa/en/desktopdefault.aspx/tabid-4619/7602_read-42500/">1</a>]. CORAL is designed to measure atmospheric temperature from 15 to 90 km altitude with high temporal and vertical resolution. The temperature data are used to study atmospheric gravity waves which show up as perturbations in temperature profiles. Atmospheric gravity waves play an important role in the dynamic coupling of the atmosphere. CORAL is situated in the lee of the Andes right within the gravity wave hotspot at the southern tip of South America (<a href="https://www.google.de/maps/@-53.785739,-67.7523002,412m/data=!3m1!1e3">53.79 S, 67.75 W</a>). It was transferred to <a href="http://earg.fcaglp.unlp.edu.ar">EARG station</a> close to the airport of <a href="https://en.wikipedia.org/wiki/Rio_Grande,_Tierra_del_Fuego">Rio Grande, Tierra del Fuego, Argentina</a>, in November 2017. Before, it took measurements at Sodankyl&auml; in the north of Finland (67.37 N, 26.62 E, Sep 2015 - April 2016), and in the Bavarian Forest in southern Germany (48.84 N, 13.67 E, May 2016 - Sep 2016).
</div>
    <div class="image_container">  
         <img width=400 src='./images/Gruppenbild.jpg'/>
         <img width=220 src='https://www.pa.op.dlr.de/southtrac/wp-content/uploads/sites/6/2019/11/coral_nightsky-768x1024.jpg'/>
	</div>
<div class="image_caption">Left: CORAL team including Alejandro de La Torre, Jose Luis Hormaechea, Dominique Pautet, Bernd Kaifler and Robert Reichert. Right: CORAL laser beam during SouthTRAC in the southern sky (by Sonja Gisinger). </div>

<div class="container">The CORAL lidar conducts atmospheric observations autonomously, i.e. no operator is required to supervise the lidar and its computer system on-site or remotely. CORAL uses an extensive set of sensors to assess environmental conditions. Based on these data, the computer system makes the decision whether lidar operation is feasible. At the same time, engineering data is used to check the health of the lidar instrument. If all parameters are within predefined limits, the computer system starts the lidar automatically after sunset and continues taking data until sunrise.
    </div>

	<div class="image_container">  
         <img width=400 src='./images/Erste_Messung.jpg'/>
	 <img width=400 src='./images/TDF_first_obs.png'/>
	</div>
    	<div class="image_caption">First light of CORAL at Rio Grande in November 2017. The temperature profile to the left shows the warm stratopause at 50 km and the cold mesopause at 80 km. The instrument can be fully controlled remotely (right).</div>

<div class="container">
<div class="subtitle">Technical description</div>
CORAL is a powerful Rayleigh backscatter lidar. A diode-pumped Nd:YAG laser at 532 nm wavelength and 100 Hz pulse repetition frequency with 14 W power is used for emission. The beam is expanded to 12 mm, resulting in 180 microrad beam divergence. A piezo-actuated mirror is used to control beam pointing. The telescope comprises a 630 mm diameter f/2.45 parabolic mirror with a spot size of 70 mm and a superstructure made of carbon fibers and aluminum which supports an optical fiber in the focal point. The effective field of view is approximately 360 microrad. In the receiver the beam is collimated after exiting the fiber. It is split into four beams, each directed to low-noise detectors operated in single photon counting mode. Interference filters block background light. A mechanical chopper located immediately behind the fiber end blocks the intense light originating from the lower atmosphere below 12 km altitude and prevents saturation of the detectors. 
</div>
	<div class="image_container">  
         <img width=800 src='./images/schematic.png'/>
</div>

<div class="container">The lidar system is housed in an 8-foot steel container with two custom compartments accessible by doors. One compartment is home to the electronics, the other houses the telescope. Two smaller hatches in the left wall and in the back act as opening for the cooling system. A hinged hatch of 80 cm times 80 cm is located in the roof above the telescope. Two optical domes in the roof of the electronics compartment allow for installation of passive optical instruments. A cloud monitoring allsky camera is installed in the right-hand dome. The second dome is used by an Advanced Mesospheric Temperature Mapper (AMTM) built and operated by Utah State University. CORAL can handle temperature differences of 50 K from outside to the thermally controlled electronics compartment. A UPS is installed, and in case of a power outage, the lidar shuts down automatically. A dedicated instrument description of CORAL is in preparation for the journal Atmospheric Measurement Techniques. Information on our <a href="https://www.dlr.de/pa/en/desktopdefault.aspx/tabid-8858/15305_read-42504/">institute's website</a>, <a href="https://elib.dlr.de/115670/">poster presented at an ARISE-2 workshop</a>.
</div>

<div class="container"><div class="subtitle">Scientific data</div>
Two talks explaining how we use lidar soundings of the middle atmosphere can be found <a href="https://elib.dlr.de/126540/">here</a> and <a href="https://elib.dlr.de/119996/">here</a>. Atmospheric density, temperature and temperature perturbations used to deduce gravity waves are available between 15-90 km altitude at resolutions down to 1 km and 10 min. In the lower stratosphere, also soundings of aerosol layers are available. CORAL also detects noctilucent clouds or polar mesospheric clouds in Rio Grande. From Sodankyl&auml;, also soundings of polar stratospheric clouds are available. Our allsky and side-viewing cameras also detect aurora and noctilucent clouds. Housekeeping data of the container include temperature, rain and wind at the ground. Some housekeeping data, webcam images, instrument status and ECMWF forecasts are available <a href="http://atlas.kaifler.net/coral/" class="link">in real-time here.</a> If you are interested in scientific use of the data, please contact Bernd Kaifler (bernd.kaifler at dlr.de). We make all our data available to the scientific community. Browse through our <a href="./php_calendar/calendar.php" class="link">CORAL measurement calendar</a>. A subset of the data is archived on the <a href="https://halo-db.pa.op.dlr.de/data_source/104">HALO database</a>. A complete list of scientific publications using CORAL data is <a href="coral_publications.php">here</a>.</div>
    <div class="image_container">  
         <a href="./php_calendar/calendar.php"><img src='./plots/nightly_means.png'/></a>
    </div>

<div class="container">
<div class="subtitle">Mountain waves</div>
CORAL's prime scientific task is the observation of atmospheric gravity waves. In particular, the southern tip of South America is known for strong mountain waves, a specific type of gravity waves, that are excited by airflow from the Pacific Ocean across the Andes. Particularly strong mountain waves were observed in July 2018, see <a href="https://www.dlr.de/pa/en/desktopdefault.aspx/tabid-2342/6725_read-67057/">an article on our institute's website</a>, <a href="https://elib.dlr.de/126887/">a talk given at the spring conference of the German Physical society</a>, and <a href="">a peer-reviewed article in Scientific Reports</a>. 
</div>

<div class="container">
<div class="subtitle">Noctilucent or polar mesospheric clouds</div>
Noctilucent clouds or polar mesospheric clouds are thin ice clouds at 83 km altitude, at the edge of space. They occur when it is coldest in the upper mesosphere, which happens in summer conditions, and they are used to deduce temperature and motions on a number of scales. They can be seen by eye, so if you are in Patagonia in December-February, watch the southern horizon during twilight for bright, silvery clouds. <b>If you see or have seen or photographed them in the past, let us know</b>. CORAL has detected few noctilucent clouds above Rio Grande during all seasons, and results will be published in 2021. CORAL has also observed noctilucent clouds in the past in the northern hemisphere, see <a href="https://www.dlr.de/pa/en/desktopdefault.aspx/tabid-2342/6725_read-47138/">an article on our institute's website</a>, <a href="https://elib.dlr.de/120057/">an article in the German magazine "Sterne und Weltraum"</a>, and two talks at <a href="https://elib.dlr.de/114377/">an International Workshop on Layered Phenomena in the Mesopause Region</a> and <a href="https://elib.dlr.de/114889/">an ARISE-2 workshop</a>.
</div>

<div class="image_container"><img width=500 src="./images/coral_nlc.png"></div>
<div class="image_container"><img width=400 src="./images/210103_nlc_rio_grande.png"></div>
<div class="image_caption">Backscatter from noctilucent clouds in January 2018 and 2021.</div>


<div class="container">
<div class="subtitle">Support</div>
CORAL was developed at the German Aerospace Center. We were supported in a <a href="https://www.helmholtz.de/aktuell/presseinformationen/artikel/artikeldetail/helmholtz_foerdert_den_karriereeinstieg_von_19_postdoktoranden/">postdoctoral project</a> by the Helmholtz assosciation. We have been part of and received partial funding by the <a href="http://arise-project.eu/">ARISE-2</a> Horizon 2020 project of the European Union, an infrastructure project comprising mainly infrasound stations around the globe. CORAL was part of the <a href="http://www.pa.op.dlr.de/gwlcycle2/">GW-LCYCLE2 campaign</a> during its stay in Sodankyl&auml;, Finland, and contributed to the <a href="https://www.pa.op.dlr.de/southtrac/">SouthTRAC campaign</a> by long-term measurements, see also two posts on the SouthTRAC blog <a href="https://www.pa.op.dlr.de/southtrac/news/2019/11/22/clear-sky-for-ground-based-lidar-measurements-and-ongoing-preparations-for-return-to-germany/">here</a> and <a href="https://www.pa.op.dlr.de/southtrac/news/2019/11/18/airborne-lidar-alima-meets-ground-based-lidar-coral/">here</a>.
</div>


    <div class="imprint">
	Natalie Kaifler natalie.kaifler at dlr.de - October 2020 - <a href="imprint.htm">Imprint</a> - <a href="privacypolicy.htm">Privacy Policy</a>
</div>
</body>
</html>