<?php
include 'php/weather';
?>

<script src="../plugins/jQuery/jquery-1.11.0.min.js"></script>

<div id="weather_container">
	temp:<span id="temperature"></span> °C
</div>

<script>
	    $("#temperature").html(weather_data_now.main.temp - 273.15);
</script>