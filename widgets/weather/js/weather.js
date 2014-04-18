$(document).ready(function(){
	
	//var my_weather_data_now = weather_data_now.firstChild();


	$("#description").html(weather_data_now.weather[0].description);
	var required_data = $(".weather_data").map(function(){return $(this).attr("id");}).get();
	parse_WeatherData(weather_data_now);

	function parse_WeatherData(my_weather_data_now){
		required_data.each(function(){
			key = $(this).attr("id");
			if (my_weather_data_now.hasOwnProperty(key))
			{
				$("#"+key).html(my_weather_data_now[key]);
			}else{
				if(my_weather_data_now.children().length > 0)
				my_weather_data_now.children().each(function(){
					parse_WeatherData();
				});
			}
		});
	}
     
});