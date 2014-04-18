$(document).ready(function(){
	
	//var my_weather_data_now = weather_data_now.firstChild();


	$("#description").html(weather_data_now.weather[0].description);    
	for (var key in weather_data_now) 
	{
	    if (weather_data_now.hasOwnProperty(key))
	    {
	    alert(key + " = " + weather_data_now[key]);
	    }
	}
     
});