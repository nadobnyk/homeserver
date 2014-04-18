<?php
require_once 'vendor/autoload.php';
require_once 'include_files.php';
?>

<div id="weather_container">
	<div id="weather_today">
		<ul>
			<li>Wetter:<span class="weather_data" id="weather.description"></span></li>
			<li>Temperatur:<span class="weather_data" id="main.temp"></span></li>
			<li>Regenwarscheinlichkeit:<span class="weather_data" id="rain.3h"></span></li>
			<li>Luftfeuchtigkeit:<span class="weather_data" id="main.humidity"></span></li>
			<li>Wind:<span class="weather_data" id="wind.speed"></span></li>
	</div>
</div>