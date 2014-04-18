$(document).ready(function(){
	
	//var my_weather_data_now = weather_data_now.firstChild();

	$.each(weather_data_now, function(key, value) {
	    console.log(key, value);
	});

    $("#description").html(weather_data_now.weather[0].description);     
});