<?php
require_once 'vendor/autoload.php';
require_once 'include_files.php';
?>

<div id="weather_container">
	<div id="weather_today">
		<ul>
			<li>Wetter:<span class="weather_data" id="description"></span>°C</li>
			<li>Temperatur:<span class="weather_data" id="temp"></span> (<span class="weather_data" id="temp_min"></span> - <span class="weather_data" id="temp_max"></span>)</li>
			<li>Regenwarscheinlichkeit:<span class="weather_data" id="rain"></span></li>
			<li>Luftfeuchtigkeit:<span class="weather_data" id="humidity"></span></li>
			<li>Wind:<span class="weather_data" id="wind_speed"></span>km/h <span class="weather_data" id="wind_deg"></span>°</li>
	</div>
</div>