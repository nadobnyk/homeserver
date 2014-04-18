$(document).ready(function(){
	    $("#temperature").html(weather_data_now.main.temp - 273.15);
});