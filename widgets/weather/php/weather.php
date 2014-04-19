<?php
$weather_data_now = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=52.503226&lon=13.486594&units=metric&lang=de");
$weather_data_today = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=52.503226&lon=13.486594&units=metric&lang=de");
?>

<script type="text/javascript">
    var weather_data_now = <?php echo $weather_data_now; ?>;
    var weather_data_today = <?php echo $weather_data_today; ?>;
</script>


<div id="weather_container">
	<div id="weather_today">
		<ul>
			<li>Wetter:<span class="weather_data" id="description"></span> 	&deg;C</li>
			<li>Temperatur:<span class="weather_data" id="temp"></span> ( <span class="weather_data" id="temp_min"></span>&deg;C - <span class="weather_data" id="temp_max"></span>&deg;C )</li>
			<li>Regenwarscheinlichkeit:<span class="weather_data" id="rain"></span>&amp;</li>
			<li>Luftfeuchtigkeit:<span class="weather_data" id="humidity"></span>&amp;</li>
			<li>Wind:<span class="weather_data" id="wind_speed"></span>km/h <span class="weather_data" id="wind_deg"></span> 	&deg;</li>
	</div>
</div>


<!-- Aufbau des JSON files


{
	"coord":{"lon":13.49,"lat":52.5},
	"sys":{"message":0.0069,"country":"DE",
	"sunrise":1397793622,"sunset":1397844613},
	"weather":[
		{"id":521,"main":"Rain","description":"Regenschauer","icon":"09d"}
	],
	"base":"cmc stations",
	"main": {
		"temp":9.78,
		"pressure":1012,
		"humidity":87,
		"temp_min":8,
		"temp_max":11.11
	},
	"wind":	{
		"speed":2.6,
		"deg":160
	},
	"rain":
		{
		"3h":0
		},
	"clouds": {
		"all":75
		},
	"dt":1397844396,
	"id":7290255,
	"name":"Berlin Treptow",
	"cod":200
}

-->