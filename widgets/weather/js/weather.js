$(document).ready(function(){
	
	$('.weather_data[id="description"]').html(weather_data_now.weather[0].description);
	$('.weather_data[id="temp"]').html(weather_data_now.main.temp);
	$('.weather_data[id="temp_min"]').html(weather_data_now.main.temp_min);
	$('.weather_data[id="temp_max"]').html(weather_data_now.main.temp_max);
	$('.weather_data[id="icon"]').html(weather_data_now.weather[0].icon);
	$('.weather_data[id="humidity"]').html(weather_data_now.main.humidity);
	$('.weather_data[id="wind_speed"]').html(weather_data_now.wind.speed);
	$('.weather_data[id="wind_deg"]').html(weather_data_now.wind.deg);
	$('.weather_data[id="rain"]').html(weather_data_now.rain.3h);
});