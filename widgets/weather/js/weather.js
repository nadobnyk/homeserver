$(document).ready(function(){
	$(".weather_data").each(function(){
		$(this).html(weather_data_now.weather.($(this.attr("id"))));
		$(this).html(weather_data_now.main.($(this.attr("id"))));
	    //$("#temperature").html(weather_data_now.main.temp);
	});
});