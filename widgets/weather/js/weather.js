$(document).ready(function(){
	$(".weather_data").each(function(){
		find_weather_data($(this).attr("id"), weather_data_now)
	});

	function find_weather_data(key, data){
		if(data[key].children() > 0){
			data[key].children().each(function(){
				find_weather_data(key, $(this));
			});
	    }else{
	    	if(data.hasOwnProperty(key)){
	    		$('.weather_data[id="'+key+'"]')html(data[key]);
	    	}
	    }
	}
});