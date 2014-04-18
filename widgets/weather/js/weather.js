$(document).ready(function(){
	$(".weather_data").each(function(){
		$(this).html(weather_data_now[$(this).attr("id")]);

	});
});