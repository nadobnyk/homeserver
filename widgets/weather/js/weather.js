$(document).ready(function(){
	$(".weather_data").each(function(){
		$(this).html(weather_data_now.find($(this.attr("id"))));
		//$(this).html(weather_data_now.main.find($(this.attr("id"))));
	    //$("#temperature").html(weather_data_now.main.temp);
	});
});