$(document).ready(function(){

	var my_weather_data_now_array = $.parseJSON(weather_data_now);
	var myDomObject;
	$(".weather_data").each(function(){
		myDomObject = $(this);
		myID = $(this),attr("id");
		
		$.each(my_weather_data_now_array, function(){
			if($(this)[myID]){
				myDomObject.html($(this)[myID]);
				break;
			}
		});
	});
});